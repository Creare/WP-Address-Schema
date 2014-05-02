<?php

class Wp_Address_Schema_Widget extends WP_Widget {
	// Config Constants
	public $name;
	protected $inc_dir;
	protected $plugin_url;
	
	
    // constructors
	// PHP 4
    public function Wp_Address_Schema_Widget() {
       $this->__construct();
    }
	
	// PHP 5>
	public function __construct() {
		 parent::WP_Widget(false, $this->name = __('Address Schema', 'wp_address_schema') );
		 // Set constants (annoying duplication of code...)
		$this->plugin_url = plugins_url().'/wp-address-schema/';
    }
 
    // widget form creation
    public function form($instance) {
    	// Check values
		if( $instance) {
			 $address_id = esc_attr($instance['address_id']);
		} else {
			 $address_id = '';
		}
		?>
		<p>
        <label for="<?php echo $this->get_field_id('address_id'); ?>"><?php _e('Select', 'wp_address_schema'); ?></label>
        <select name="<?php echo $this->get_field_name('address_id'); ?>" id="<?php echo $this->get_field_id('address_id'); ?>" class="widefat">
        <?php
		$addresses = $this->getAddresses();
        foreach ($addresses as $address) {
        	echo '<option value="' . $address['id'] . '" id="' . $address['id'] . '"', $address_id == $address['id'] ? ' selected="selected"' : '', '>', $address['value'], '</option>';
        }
        ?>
        </select>
        </p>
		<?php
	
	}
	
    // widget update
    public function update($new_instance, $old_instance) {
		$instance = $old_instance;
		// Fields
		$instance['address_id'] = strip_tags($new_instance['address_id']);
		return $instance;
	}

	
    // widget display
 	public function widget($args, $instance) {
   		extract( $args );
		$widget_code = $instance['address_id'];
		$widget_code_a = explode('_', $widget_code);
		$widget_code_a = array_reverse($widget_code_a);
		$widget_id = $widget_code_a[0];
		
		require_once 'wp-address-schema-display.php';
		$display = new Wp_Address_Schema_Display();
		echo $before_widget;
		echo $display->parseAddress($widget_id);
		echo $after_widget;
    }
	
	
	private function getAddresses() {
		
		$addresses = array();
		
		$args = array(
			'post_type' => 'wp_address_schema',
			'posts_per_page' => -1
		);
			
		$wp_query = new WP_Query( $args );
			
		while ( $wp_query->have_posts() ) { 
			$wp_query->the_post();
				
			$widget_id = 'wp_as_'.get_the_ID();
			$widget_title = get_the_title()." Address";
			$addresses[] = array('id'=>$widget_id, 'value'=>$widget_title);
		}
		
		return $addresses;
	}
}