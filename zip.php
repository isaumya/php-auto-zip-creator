<?php
/*
 * PHP Auto Zip Creator v1.0
 * https://github.com/isaumya/php-auto-zip-creator
 *
 * Copyright 2013, Saumya Majumder
 * http://www8.isaumya.com
 *
 * Licensed under the GPL license v3:
 * http://www.gnu.org/licenses/gpl.html
 */
	
		$directory = base64_decode($_REQUEST['dr']);
		$directory2 = '/home/isaumya/public_html/downloads/';
		$filename = base64_decode($_REQUEST['fn']).'.zip';
		$df = $directory2.$filename;
		
		$zip = new ZipArchive();
		if(file_exists($df))
		{
			unlink($df);
		}
		$zip->open($filename, ZipArchive::CREATE);
		$files = scandir($directory);
		unset($files[0], $files[1]);
		
		foreach($files as $file) {
			$zip->addFile("{$directory}/{$file}","/{$file}"); 
		}
		$zip->close();
		header('Location: http://downloads.isaumya.com/'.$filename);
		exit();
	
?>
