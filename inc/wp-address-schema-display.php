<?php

if(!class_exists('WP_Adress_Schema_Display')) {
	
	class WP_Address_Schema_Display extends Wp_Address_Schema
	{
		/**
         * Define Constants
         */
		 
		/**
         * Construct the plugin object
         */
        public function __construct()
        {
		

        } 
		
		// PHP 4 Support
		public function WP_Address_Schema_Display() {
			$this->__construct();
		}
		
	
		public function parseAddress($id) {
			
			$company = @get_post_meta($id, 'company', true);
			$add1 = @get_post_meta($id, 'address1', true);
			$add2 = @get_post_meta($id, 'address2', true);
			$add3 = @get_post_meta($id, 'address3', true);
			$city = @get_post_meta($id, 'city', true);
			$county = @get_post_meta($id, 'county', true);
			$country = @get_post_meta($id, 'country', true);
			$pcode = @get_post_meta($id, 'postcode', true);
			$tel = @get_post_meta($id, 'telephone', true);
			$fax = @get_post_meta($id, 'fax', true);
			$seperate = @get_post_meta($id, 'seperate', true);
			$schema_classification = @get_post_meta($id, 'schema_classification', true);
			$display_closed = @get_post_meta($id, 'display_closed', true);
			
			$string = '<'.(($seperate=='<li>')?'ul':'div').' itemscope itemtype="http://schema.org/'.$schema_classification.'">';
			if(isset($company) && $company != '') $string .= $this->parseLine('<span itemprop="legalName">'.$company.'</span>', $seperate, 'company');
			if(isset($description) && $description != '') $string .= $this->parseLine('<span itemprop="description">'.$description.'</span>', $seperate, 'description');
			
			if((isset($add1) && $add1 != '') || (isset($add2) && $add2 != '') 
				|| (isset($add3) && $add3 != '') || (isset($town) && $town != '') 
				|| (isset($city) && $city != '') || (isset($country) && $country != '') 
				|| (isset($pcode) && $pcode != '')) 
			{
				$string .= '<'.(($seperate=='<li>')?'li><ul':'div').' itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">';
				$street_addr = array();
				if(isset($add1) && $add1 != '') $street_addr[] = $add1;
				if(isset($add2) && $add2 != '') $street_addr[] = $add2;
				if(isset($add3) && $add3 != '') $street_addr[] = $add3;
				$street_address = implode(', ', $street_addr);
				if(!empty($street_addr)) $string .= $this->parseLine('<span itemprop="streetAddress">'.$street_address.'</span>', $seperate, 'street_address');
				if(isset($city) && $city != '') $string .= $this->parseLine('<span itemprop="addressLocality">'.$city.'</span>', $seperate, 'address_locality');
				if(isset($county) && $county != '') $string .= $this->parseLine('<span itemprop="addressRegion">'.$county.'</span>', $seperate, 'address_region');
				if(isset($pcode) && $pcode != '') $string .= $this->parseLine('<span itemprop="postalCode">'.$pcode.'</span>', $seperate, 'postal_code');
				
				$string .= '</'.(($seperate=='<li>')?'ul></li':'div').'>';
			}
			
			if(isset($tel) && $tel != '')$string .= $this->parseLine('Phone: <a href="tel:'.$tel.'"><span itemprop="telephone">'.$tel.'</span></a>', $seperate, 'telephone');
			if(isset($fax) && $fax != '')$string .= $this->parseLine('Fax: <span itemprop="faxNumber">'.$fax.'</span>', $seperate, 'fax');
			// Trim of last break or comma, if applicable
			if($seperate == 'br' || $seperate == 'comma') {
				$count = strlen($seperate);
				$string = substr($string, 0, (0-$count));
			}
			
			$string .= $this->parseOpeningHours($this->getOpeningHours($id), $seperate, $display_closed);
			
			$string .= '</'.(($seperate=='<li>')?'ul':'div').'>';
			
			return $string;
			
		}
		
		private function parseOpeningHours($hours = array(), $seperate, $display = 0) {
			$string = '';
			foreach($hours as $time) {
				
				$time_array = explode(' ', $time);
				$day_array = explode('-', $time_array[0]);
				if($time_array[1] != 'Closed') {
					$html = '<time itemprop="openingHours" datetime="'.$time.'">';	
					if(count($day_array) > 1) {
						$html .= $this->getDayName($day_array[0]).' to '.$this->getDayName($day_array[1]);					
					} else {
						$html .= $this->getDayName($day_array[0]);
					}
				
					$html .= " &mdash; ".$time_array[1];
					$html .= '</time>';
					$string .= $this->parseLine($html, $seperate, 'opening-hours');
				} elseif($display == 1) {
					$html = '';	
					if(count($day_array) > 1) {
						$html .= $this->getDayName($day_array[0]).' to '.$this->getDayName($day_array[1]);					
					} else {
						$html .= $this->getDayName($day_array[0]);
					}
					$html .= " &mdash; ".$time_array[1];
					$string .= $this->parseLine($html, $seperate, 'opening-hours');
				}
			}
			
			return $string;
			
		}
		
		private function getDayName($day) {
			switch($day){
				case "mo":
					return "Monday";
				case "tu":
					return "Tuesday";
				case "we":
					return "Wednesday";
				case "th":
					return "Thursday";
				case "fr":
					return "Friday";
				case "sa":
					return "Saturday";
				case "su":
					return "Sunday";
			}
			
		}
		
		private function getOpeningHours($post_id) {
			// Get days, open/closed and times...
			$monday = @get_post_meta($post_id, 'monday', true);
			$monday_to = @get_post_meta($post_id, 'monday_to', true);
			$monday_from = @get_post_meta($post_id, 'monday_from', true);
			
			$tuesday = @get_post_meta($post_id, 'tuesday', true);
			$tuesday_to = @get_post_meta($post_id, 'tuesday_to', true);
			$tuesday_from = @get_post_meta($post_id, 'tuesday_from', true);
			
			$wednesday = @get_post_meta($post_id, 'wednesday', true);
			$wednesday_to = @get_post_meta($post_id, 'wednesday_to', true);
			$wednesday_from = @get_post_meta($post_id, 'wednesday_from', true);
			
			$thursday = @get_post_meta($post_id, 'thursday', true);
			$thursday_to = @get_post_meta($post_id, 'thursday_to', true);
			$thursday_from = @get_post_meta($post_id, 'thursday_from', true);
			
			$friday = @get_post_meta($post_id, 'friday', true);
			$friday_to = @get_post_meta($post_id, 'friday_to', true);
			$friday_from = @get_post_meta($post_id, 'friday_from', true);
			
			$saturday = @get_post_meta($post_id, 'saturday', true);
			$saturday_to = @get_post_meta($post_id, 'saturday_to', true);
			$saturday_from = @get_post_meta($post_id, 'saturday_from', true);
			
			$sunday = @get_post_meta($post_id, 'sunday', true);
			$sunday_to = @get_post_meta($post_id, 'sunday_to', true);
			$sunday_from = @get_post_meta($post_id, 'sunday_from', true);
			
			// Sort these values in a useable format
			if(isset($monday_from)&&$monday_from!=''&&isset($monday_to)&&$monday_to!='') $Mo = array('from'=>$monday_from, 'to'=>$monday_to);
			if(isset($tuesday_from)&&$tuesday_from!=''&&isset($tuesday_to)&&$tuesday_to!='') $Tu = array('from'=>$tuesday_from, 'to'=>$tuesday_to);
			if(isset($wednesday_from)&&$wednesday_from!=''&&isset($wednesday_to)&&$wednesday_to!='') $We = array('from'=>$wednesday_from, 'to'=>$wednesday_to);
			if(isset($thursday_from)&&$thursday_from!=''&&isset($thursday_to)&&$thursday_to!='') $Th = array('from'=>$thursday_from, 'to'=>$thursday_to);
			if(isset($friday_from)&&$friday_from!=''&&isset($friday_to)&&$friday_to!='') $Fr = array('from'=>$friday_from, 'to'=>$friday_to);
			if(isset($saturday_from)&&$saturday_from!=''&&isset($saturday_to)&&$saturday_to!='') $Sa = array('from'=>$saturday_from, 'to'=>$saturday_to);
			if(isset($sunday_from)&&$sunday_from!=''&&isset($sunday_to)&&$sunday_to!='') $Su = array('from'=>$sunday_from, 'to'=>$sunday_to);
			
			// Set values to x if the day is marked as closed
			if($monday == "Closed") $Mo = array('from'=>'x','to'=>'x');	
			if($tuesday == "Closed") $Tu = array('from'=>'x','to'=>'x');	
			if($wednesday == "Closed") $We = array('from'=>'x','to'=>'x');	
			if($thursday == "Closed") $Th = array('from'=>'x','to'=>'x');	
			if($friday == "Closed") $Fr = array('from'=>'x','to'=>'x');	
			if($saturday == "Closed") $Sa = array('from'=>'x','to'=>'x');
			if($sunday == "Closed") $Su = array('from'=>'x','to'=>'x');
			
			// Now we should have variables like $mo, $tu, $we, $th, $fr, $sa and $su	
			$days = array();
			if(isset($Mo)) $days[] = array('day'=>'mo', 'time'=>$Mo);
			if(isset($Tu)) $days[] = array('day'=>'tu', 'time'=>$Tu);
			if(isset($We)) $days[] = array('day'=>'we', 'time'=>$We);
			if(isset($Th)) $days[] = array('day'=>'th', 'time'=>$Th);
			if(isset($Fr)) $days[] = array('day'=>'fr', 'time'=>$Fr);
			if(isset($Sa)) $days[] = array('day'=>'sa', 'time'=>$Sa);
			if(isset($Su)) $days[] = array('day'=>'su', 'time'=>$Su);
			
			
			$i=0;
			$curr_day = '';
			$next_day = '';
			$from = '';
			$to = '';
			$count = count($days);
			$strings = array();
			
			foreach($days as $day) {
				// So lets see if the opening time is different to tomorrow
				if(($day['time']['from'] != $days[$i+1]['time']['from'] || $day['time']['to'] != $days[$i+1]['time']['to']) || (!isset($days[$i+1]['time']['from']) && !isset($days[$i+1]['time']['to']))) {
					// if it is, we'll show it
					if((!isset($days[$i-1]) || $day['time']['from'] != $days[$i-1]['time']['from']) || (!isset($days[$i-1]) || $day['time']['to'] != $days[$i-1]['time']['to'])) {
						// if the opening times are different to yesterday
						// Show single day
						if($day['time']['from'] == 'x' && $day['time']['to'] == 'x') {
							$strings[] = $day['day']."	 Closed";
						} else {
							$strings[] = $day['day']." ".$day['time']['from']."-".$day['time']['to'];
						}
					} else {
						// else 
						//show multiple day
						if($day['time']['from'] == 'x' && $day['time']['to'] == 'x') {
							$strings[] = $curr_day."-".$day['day']." Closed";
						} else {
							$strings[] = $curr_day."-".$day['day']." ".$day['time']['from']."-".$day['time']['to'];
						}
					}
					// Iterate count
					$i++;
				} else {
					// else
					if((!isset($days[$i-1]) || $day['time']['from'] != $days[$i-1]['time']['from']) || (!isset($days[$i-1]) || $day['time']['to'] != $days[$i-1]['time']['to'])) {
						// if the opening times are different to yesterday
						// Set curr_day var to today
						$curr_day = $day['day'];
					}
					// Iterate count
					$i++;
					// continue to the next day
					// continue;
				}
			}
			return $strings;	
			
			
		}
		
		private function parseLine($html, $seperator, $class) {
			switch($seperator) {
				case '<li>':
					return '<li class="'.$class.'">'.$html.'</li>';
					break;
				case '<p>':
					return '<p class="'.$class.'">'.$html.'</p>';
					break;
				case '<br />':
					return $html.'<br />';
				case ', ':
					return $html.', ';
				default:
					return $html;
			}
		
		}
			
	}
	
}
?>