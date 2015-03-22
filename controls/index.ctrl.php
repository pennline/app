<?php

	header( 'Content-Type: ' . $Config->content_type . '; charset=' . $Config->charset );

	$WebPage->page = 'index';
	$WebPage->title = $Config->site_name;
	$WebPage->heading = $Config->site_name;
	$WebPage->view = 'html-layout.tpl.php';

	include $WebPage->view;