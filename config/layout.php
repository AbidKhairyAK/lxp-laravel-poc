<?php

return [

	/**
	 * Config for menu items on sidebar
	 *
	 * - get icon from lucide icon
	 * - already converted to array of object data type for ease of use
	 */
	"menu_items" => json_decode(json_encode([
		[ "title" => "Beranda", "icon" => "lucide-layout-dashboard", "url" => "home" ],
		[ "title" => "Some Page", "icon" => "lucide-users", "url" => "#" ],
		[ "title" => "Some Module", "icon" => "lucide-handshake", "url" => "#" ],
		[ "title" => "Another Menu", "icon" => "lucide-rocket", "url" => "#" ],
	])),


	/**
	 * Config for call to action button on sidebar
	 */
	"cta" => [
		"label"	=> "New Data",
		"url" 	=> "#",
		"icon" 	=> "lucide-plus"
	]

];

?>