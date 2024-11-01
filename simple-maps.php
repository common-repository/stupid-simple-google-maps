<?php
/*
Plugin Name: Stupid Simple Google Maps
Plugin URI: http://simple-maps.wiffin.com
Description: Allows for the simple embeding of Google Maps in posts.
Version: 1.2
Author: Erik Wiffin
Author URI: http://erik.wiffin.com
License: GPL2
*/
/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class SimpleMaps {

	static public function init() {

		add_shortcode('simple-map', 'SimpleMaps::shortcode');
	}

	static public function shortcode($atts, $content=null) {

		// establish some sane defaults
		$defaults = array(
			 'height'	=> 512
			,'width'	=> 512
			,'color'	=> 'red'
			,'label'	=> '.'
			,'zoom'		=> 15
			,'maptype'	=> 'roadmap'
		);
		$atts = shortcode_atts($defaults, $atts);

		// google static map api url
		$url = 'http://maps.google.com/maps/api/staticmap';

		// build query to be sent to google
		$query = http_build_query(array(
			 'center'	=> $content
			,'size'		=> sprintf('%dx%d', $atts['width'], $atts['height'])
			,'sensor'	=> 'false'
			,'markers'	=> sprintf('color:%s|label:%s|%s', $atts['color'], $atts['label'], $content)
			,'zoom'		=> $atts['zoom']
			,'maptype'	=> $atts['maptype']
		));

		// return image tag
		return sprintf('<img src="%s" width="%d" height="%d" />',
			$url .'?'. $query
			, $atts['width']
			, $atts['height']
		);
	}
}

add_action('init', 'SimpleMaps::init');
