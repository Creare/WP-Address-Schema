<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="company">Company Name</label>
        </th>
        <td>
            <input type="text" id="company" name="company" value="<?php echo @get_post_meta($post->ID, 'company', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="address1">Address Line 1</label>
        </th>
        <td>
            <input type="text" id="address1" name="address1" value="<?php echo @get_post_meta($post->ID, 'address1', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="address2">Address Line 2</label>
        </th>
        <td>
            <input type="text" id="address2" name="address2" value="<?php echo @get_post_meta($post->ID, 'address2', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="address3">Address Line 3</label>
        </th>
        <td>
            <input type="text" id="address3" name="address3" value="<?php echo @get_post_meta($post->ID, 'address3', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="city">Town/City</label>
        </th>
        <td>
            <input type="text" id="city" name="city" value="<?php echo @get_post_meta($post->ID, 'city', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="country">State/County</label>
        </th>
        <td>
            <input type="text" id="country" name="country" value="<?php echo @get_post_meta($post->ID, 'county', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="country">Country</label>
        </th>
        <td>
            <input type="text" id="country" name="country" value="<?php echo @get_post_meta($post->ID, 'country', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="postcode">Postal/Zip Code</label>
        </th>
        <td>
            <input type="text" id="postcode" name="postcode" value="<?php echo @get_post_meta($post->ID, 'postcode', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="telephone">Telephone</label>
        </th>
        <td>
            <input type="text" id="telephone" name="telephone" value="<?php echo @get_post_meta($post->ID, 'telephone', true); ?>" />
        </td>
    <tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="fax">Fax</label>
        </th>
        <td>
            <input type="text" id="fax" name="fax" value="<?php echo @get_post_meta($post->ID, 'fax', true); ?>" />
        </td>
    <tr> 
</table>