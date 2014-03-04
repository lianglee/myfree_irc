<?php

elgg_register_event_handler('init', 'system', 'myfreeirc');
function myfreeirc(){
     elgg_register_page_handler('myfreeirc', 'myfree_page_handler');
	 if(elgg_is_logged_in()){
       elgg_register_menu_item('site', array(
			'name' => 'myfreeirc',
			'href' => 'myfreeirc',
			'text' =>  elgg_echo('myfreeirc'),
      ));
	 }
}

function myfree_page_handler($page){
	$title = elgg_echo('myfreeirc');

	$body = elgg_view('myfreeirc/page');

	$params = array(
		'content' => $body,
		'title' => $title,
	);
	$body = elgg_view_layout(NULL, $params);

	echo elgg_view_page($title, $body);
	return true;
}