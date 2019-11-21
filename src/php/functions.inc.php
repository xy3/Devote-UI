<?php 

const VIEWS = 'src/views/';
const PAGE = 'src/views/page.php';

function show($page)
{
	$page = VIEWS . $page;
	require_once PAGE;
}