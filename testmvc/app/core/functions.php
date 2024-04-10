<?php

function show($stuff)
{
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";
}

function esc($str)
{
	return htmlspecialchars($str);
}

function redirect($path)
{
	header("Location: " . ROOT . "/" . $path);
	die;
}

// load image. if not exist, load placeholder

function get_image(mixed $file = '', string $type = 'post'): string
{
	$file = $file ?? '';
	if (file_exists($file)) {
		return ROOT . "/" . $file;
	}

	if ($type == 'user') {
		return ROOT . "/assets/user.jpg";
	} else {
		return ROOT . "/assets/no_image.jpg";
	}
}
