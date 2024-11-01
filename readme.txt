=== Stupid Simple Google Maps ===
Contributors: erik.wiffin
Tags: maps, shortcodes
Requires at least: 3.1.2
Tested up to: 3.3
Stable tag: 1.2

Allows for the simple embeding of Google Maps in posts.

== Description ==

Allows for the simple embeding of Google Maps in posts. This is done using shortcodes.

`[simple-map]1600 Amphitheatre Parkway, Mountain View, CA[/simple-map]` will drop in a map with a marker on Google's California headquarters.

Available attributes:

*	height: The height of the resulting map. Defaults to "512".
*	width: The width of the resulting map. Defaults to "512".
*	color: The color of the marker. Defaults to "red".
*	label: Will accept any single character uppercase letter to use as the symbol in the marker. Defaults to a dot.
*	zoom: The zoom level of the resulting map. Defaults to 15.
*	maptype: Determines the format of the map. Defaults to "roadmap". Will accept "roadmap", "satellite", "terrain", or "hybrid".

== Installation ==

1. Upload `simple-maps.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in Wordpress
1. Place the [simple-map] shortcode where you want your map

== Frequently Asked Questions ==

= Why did you make this plugin if there are already other map plugins with more features? =

I wanted a really simple wrapper plugin for the Google Static Maps API. http://code.google.com/apis/maps/documentation/staticmaps/

= Can I see this plugin in action? =

Yes! I've set up a few samples here: http://simple-maps.wiffin.com/samples/

== Changelog ==

= 1.1 =

+ Corrected a bug that would throw PHP warnings.

= 1.0 =

+ Wrapper for most obvious Static Maps parameters.

== Upgrade Notice ==

= 1.1 =

+ If PHP is set to display errors, 1.0 would show warning messages.

= 1.0 =

+ It's the only available version.
