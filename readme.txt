=== Plugin Name ===
Contributors: foyster, bavington, crearegroup
Donate link: http://example.com/
Tags: address, schema, opening hours, formatting
Requires at least: 3.0.1
Tested up to: 3.8.1
Stable tag: 0.0.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

 A simple plugin for displaying correctly formatted address information, as per the standards set out by http://schema.org/LocalBusiness.

== Description ==

WP Address Schema is a free plugin to allow you to quickly create correctly formatted address information to display on the front end of your Wordpress site. This formatting, as documented on the http://schema.org website, is used by major search providers such as Bing, Google, Yahoo! and Yandex to improve the display of search results.

WP Address Schema will continue to develop, but currently includes the following fields;
* Company Name
* Address Line 1
* Address Line 2
* Address Line 3
* Town/City
* State/County
* Country
* Postal/Zip Code
* Telephone
* Fax
* Opening Hours

You can learn more about [WP Address Schema](http://www.creare.co.uk/services/wp-address-schema) and our [other free Wordpress plugins](http://www.creare.co.uk/services/extensions/wordpress) on our website. You can also track progress and contribute to [WP Address Schema on GitHub](https://github.com/Creare/WP-Address-Schema).

== Installation ==

Installing and using WP Address Schema could not be simpler:

1. Upload `/WP-Address-Schema/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Create Addresses to use by heading to Addresses -> Add Address
4. View your Address by heading to Addresses -> All Addresses
5. You can then move the Address Widget into any Widget Area, or simply use the shortcode to bring the address out anywhere you wish.


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 0.0.4 =

* Changes to the Opening Hour schema to exclude closed days from any formatting
* Fixed class name inconsistencies
* Updated all class comment headers

= 0.0.3 =

* First stable release version