<?php
/*
Daltonmedia.be
Dries de Krom
*/
elgg_register_event_handler('init', 'system', 'geocomplete_init'); {

	//Extend the locationfield 
	elgg_extend_view("input/location", "geocomplete/extend");
	//Register and cache the JS
	elgg_register_simplecache_view('js/geocomplete/jquery.geocomplete.min');
	$url = elgg_get_simplecache_url('js', 'geocomplete/jquery.geocomplete.min');
	elgg_register_js('geocomplete', $url);
	//Use the Google places library from googleapis
	elgg_register_js('google_places', 'https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places');

}
