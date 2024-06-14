<?php

// get icon from lucide icon

function getMenuItems ()
{
	$menuitems = [
		[ "title" => "Beranda", "icon" => "lucide-layout-dashboard", "url" => "home" ],
		[ "title" => "Some Page", "icon" => "lucide-users", "url" => "#" ],
		[ "title" => "Some Module", "icon" => "lucide-handshake", "url" => "#" ],
		[ "title" => "Another Menu", "icon" => "lucide-rocket", "url" => "#" ],
	];

	return json_decode(json_encode($menuitems));
}

function getAppTitle ()
{
	return "Skeleton";
}

function getCTAConfig () {
	$cta = [
		"label" => "New Data",
		"url"	=> "#"
	];

	return $cta;
}