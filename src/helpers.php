<?php

if (!function_exists('shortcodes')) {
	function shortcodes($content = '')
	{
		return new \Osen\Shortcode($content);
	}
}
