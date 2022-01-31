<?php

use SymPlace\FileViewer\Bootstrap;

$composer_path = '';
if (is_dir(__DIR__ . '/vendor')) {
	$composer_path = __DIR__ . '/';
}

return [
	'bootstrap' => Bootstrap::class,
	'views' => [
		'default' => [
			'prism/' => $composer_path . '/vendor/bower-asset/prism',
			'videojs/' => $composer_path . '/vendor/bower-asset/videojs/dist',
			],
	],
];
