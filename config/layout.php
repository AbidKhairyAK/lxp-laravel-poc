<?php

return [

	/**
	 * Config for menu items on sidebar
	 *
	 * - get icon from lucide icon
	 * - already converted to array of object data type for ease of use
	 */
	"menu_items" => json_decode(json_encode([
		[ "title" => "Dashboard", "icon" => "lucide-layout-dashboard", "url" => "home" ],
		[ "title" => "Courses", "icon" => "lucide-monitor-play", "url" => "courses" ],
	])),


	/**
	 * Config for call to action button on sidebar
	 */
	"cta" => [
		"label"	=> "New Course",
		"url" 	=> "/courses/create",
		"icon" 	=> "lucide-plus"
	]

];

?>