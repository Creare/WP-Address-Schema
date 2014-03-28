<table> 
    <tr>
    	<th class="metabox_label_column">
        	Seperate lines by
        </th>
        <td>
        	<input type="radio" id="seperate_li" name="seperate" value="<li>" <?php echo ((@get_post_meta($post->ID, 'seperate', true)=='<li>')?'checked="checked" ':''); ?>/><label for="seperate_li">List</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" id="seperate_p" name="seperate" value="<p>" <?php echo ((@get_post_meta($post->ID, 'seperate', true)=='<p>')?'checked="checked" ':''); ?>/><label for="seperate_p">Paragraphs</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" id="seperate_br" name="seperate" value="<br />" <?php echo ((@get_post_meta($post->ID, 'seperate', true)=='<br />')?'checked="checked" ':''); ?>/><label for="seperate_br">Line Breaks</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" id="seperate_comma" name="seperate" value=", " <?php echo ((@get_post_meta($post->ID, 'seperate', true)==', ')?'checked="checked" ':''); ?>/><label for="seperate_comma">Commas</label>&nbsp;&nbsp;&nbsp;
        </td>
	</tr>         
</table>