<table>
	<tr valign="top">
        <td class="metabox_label_column">
			<strong><?php echo __("Monday"); ?></strong>
        </td>
        <td>
        <input type="radio" name="monday" value="Open" id="monday_open" <?php echo ((@get_post_meta($post->ID, 'monday', true)=='Open')?'checked="checked" ':''); ?>/>&nbsp;<label for="monday_open">Open</label>&nbsp;&nbsp;<input type="radio" name="monday" value="Closed" id="monday_closed" <?php echo ((@get_post_meta($post->ID, 'monday', true)=='Closed')?'checked="checked" ':''); ?>/>&nbsp;<label for="monday_closed">Closed</label>
		</td>
	</tr>
	<tr valign="top">
   		<td></td>
        <td>
            <p><input type="text" id="monday_from" name="monday_from" class="text" placeholder="09:00" value="<?php echo @get_post_meta($post->ID, 'monday_from', true); ?>"/>&nbsp;&mdash;&nbsp;<input type="text" id="monday_to" name="monday_to" class="text" placeholder="17:30" value="<?php echo @get_post_meta($post->ID, 'monday_to', true); ?>" /> (in 24 hour format, ie 00:00 - 23:59)</p>
        </td>
	</tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr valign="top">
        <td class="metabox_label_column">
			<strong><?php echo __("Tuesday"); ?></strong>
        </td>
		<td>
        <input type="radio" name="tuesday" value="Open" id="tuesday_open" <?php echo ((@get_post_meta($post->ID, 'tuesday', true)=='Open')?'checked="checked" ':''); ?>/>&nbsp;<label for="tuesday_open">Open</label>&nbsp;&nbsp;<input type="radio" name="tuesday" value="Closed" id="tuesday_closed" <?php echo ((@get_post_meta($post->ID, 'tuesday', true)=='Closed')?'checked="checked" ':''); ?>/>&nbsp;<label for="tuesday_closed">Closed</label>
		</td>
	</tr>
	<tr valign="top">
   		<td></td>
        <td>
            <p><input type="text" id="tuesday_from" name="tuesday_from" class="text" placeholder="09:00" value="<?php echo @get_post_meta($post->ID, 'tuesday_from', true); ?>" />&nbsp;&mdash;&nbsp;<input type="text" id="tuesday_to" name="tuesday_to" class="text" placeholder="17:30" value="<?php echo @get_post_meta($post->ID, 'tuesday_to', true); ?>" /> (in 24 hour format, ie 00:00 - 23:59)</p>
        </td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr valign="top">
        <td class="metabox_label_column">
			<strong><?php echo __("Wednesday"); ?></strong>
        </td>
         <td>
        <input type="radio" name="wednesday" value="Open" id="wednesday_open" <?php echo ((@get_post_meta($post->ID, 'wednesday', true)=='Open')?'checked="checked" ':''); ?>/>&nbsp;<label for="wednesday_open">Open</label>&nbsp;&nbsp;<input type="radio" name="wednesday" value="Closed" id="wednesday_closed" <?php echo ((@get_post_meta($post->ID, 'wednesday', true)=='Closed')?'checked="checked" ':''); ?>/>&nbsp;<label for="wednesday_closed">Closed</label>
		</td>
	</tr>
	<tr valign="top">
   		<td></td>
        <td>
            <p><input type="text" id="wednesday_from" name="wednesday_from" class="text" placeholder="09:00" value="<?php echo @get_post_meta($post->ID, 'wednesday_from', true); ?>" />&nbsp;&mdash;&nbsp;<input type="text" id="wednesday_to" name="wednesday_to" class="text" placeholder="17:30" value="<?php echo @get_post_meta($post->ID, 'wednesday_to', true); ?>" /> (in 24 hour format, ie 00:00 - 23:59)</p>
        </td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr valign="top">
        <td class="metabox_label_column">
			<strong><?php echo __("Thursday"); ?></strong>
        </td>
         <td>
        <input type="radio" name="thursday" value="Open" id="thursday_open" <?php echo ((@get_post_meta($post->ID, 'thursday', true)=='Open')?'checked="checked" ':''); ?>/>&nbsp;<label for="thursday_open">Open</label>&nbsp;&nbsp;<input type="radio" name="thursday" value="Closed" id="thursday_closed" <?php echo ((@get_post_meta($post->ID, 'thursday', true)=='Closed')?'checked="checked" ':''); ?>/>&nbsp;<label for="thursday_closed">Closed</label>
		</td>
	</tr>
	<tr valign="top">
   		<td></td>
        <td>
           <p><input type="text" id="thursday_from" name="thursday_from" class="text" placeholder="09:00" value="<?php echo @get_post_meta($post->ID, 'thursday_from', true); ?>" />&nbsp;&mdash;&nbsp;<input type="text" id="thursday_to" name="thursday_to" class="text" placeholder="17:30" value="<?php echo @get_post_meta($post->ID, 'thursday_to', true); ?>" /> (in 24 hour format, ie 00:00 - 23:59)</p>
        </td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr valign="top">
        <td class="metabox_label_column">
			<strong><?php echo __("Friday"); ?></strong>
        </td>
         <td>
        <input type="radio" name="friday" value="Open" id="friday_open" <?php echo ((@get_post_meta($post->ID, 'friday', true)=='Open')?'checked="checked" ':''); ?>/>&nbsp;<label for="friday_open">Open</label>&nbsp;&nbsp;<input type="radio" name="friday" value="Closed" id="friday_closed" <?php echo ((@get_post_meta($post->ID, 'friday', true)=='Closed')?'checked="checked" ':''); ?>/>&nbsp;<label for="friday_closed">Closed</label>
		</td>
	</tr>
	<tr valign="top">
   		<td></td>
        <td>
            <p><input type="text" id="friday_from" name="friday_from" class="text" placeholder="09:00" value="<?php echo @get_post_meta($post->ID, 'friday_from', true); ?>" />&nbsp;&mdash;&nbsp;<input type="text" id="friday_to" name="friday_to" class="text" placeholder="17:30" value="<?php echo @get_post_meta($post->ID, 'friday_to', true); ?>" /> (in 24 hour format, ie 00:00 - 23:59)</p>
        </td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr valign="top">
        <td class="metabox_label_column">
			<strong><?php echo __("Saturday"); ?></strong>
        </td>
         <td>
        <input type="radio" name="saturday" value="Open" id="saturday_open" <?php echo ((@get_post_meta($post->ID, 'saturday', true)=='Open')?'checked="checked" ':''); ?>/>&nbsp;<label for="saturday_open">Open</label>&nbsp;&nbsp;<input type="radio" name="saturday" value="Closed" id="saturday_closed" <?php echo ((@get_post_meta($post->ID, 'saturday', true)=='Closed')?'checked="checked" ':''); ?>/>&nbsp;<label for="saturday_closed">Closed</label>
		</td>
	</tr>
	<tr valign="top">
   		<td></td>
        <td>
            <p><input type="text" id="saturday_from" name="saturday_from" class="text" placeholder="09:00" value="<?php echo @get_post_meta($post->ID, 'saturday_from', true); ?>" />&nbsp;&mdash;&nbsp;<input type="text" id="saturday_to" name="saturday_to" class="text" placeholder="17:30" value="<?php echo @get_post_meta($post->ID, 'saturday_to', true); ?>" /> (in 24 hour format, ie 00:00 - 23:59)</p>
        </td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr valign="top">
        <td class="metabox_label_column">
			<strong><?php echo __("Sunday"); ?></strong>
        </td>
         <td>
        <input type="radio" name="sunday" value="Open" id="sunday_open" <?php echo ((@get_post_meta($post->ID, 'sunday', true)=='Open')?'checked="checked" ':''); ?>/>&nbsp;<label for="sunday_open">Open</label>&nbsp;&nbsp;<input type="radio" name="sunday" value="Closed" id="sunday_closed" <?php echo ((@get_post_meta($post->ID, 'sunday', true)=='Closed')?'checked="checked" ':''); ?>/>&nbsp;<label for="sunday_closed">Closed</label>
		</td>
	</tr>
	<tr valign="top">
   		<td></td>
        <td>
            <p><input type="text" id="sunday_from" name="sunday_from" class="text" placeholder="09:00" value="<?php echo @get_post_meta($post->ID, 'sunday_from', true); ?>" />&nbsp;&mdash;&nbsp;<input type="text" id="sunday_to" name="sunday_to" class="text" placeholder="17:30" value="<?php echo @get_post_meta($post->ID, 'sunday_to', true); ?>" /> (in 24 hour format, ie 00:00 - 23:59)</p>
        </td>
    </tr>      
</table>