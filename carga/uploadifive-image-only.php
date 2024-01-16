<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/

/*
IMPORTANT: This script requires the PHP GD library
*/

// Set the uplaod directory
$uploadDir = '/sis/patente/';

function errorHandler($errno, $errstr, $errfile, $errline) {
	// In this script, the silently suppress any error generated by getimagesize
	// which will throw an error if the "image" isn't an image
	// ie doesn't have a valid width / height

    /* Don't execute PHP internal error handler */
    return true;
}

$old_error_handler = set_error_handler("errorHandler");

// Check if the file has a width and height
function isImage($tempFile) {

	// Get the size of the image
    $size = getimagesize($tempFile);

	if (isset($size) && $size[0] && $size[1] && $size[0] *  $size[1] > 0) {
		return true;
	} else {
		return false;
	}

}

if (!empty($_FILES)) {

	$fileData = $_FILES['Filedata'];

	if ($fileData) {
		$tempFile   = $fileData['tmp_name'];
		$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
		$targetFile = $uploadDir . $fileData['name'];

		// Validate the file type
		$fileTypes = array('pdf', 'png'); // Allowed file extensions
		$fileParts = pathinfo($fileData['name']);

		// Validate the filetype
		if (in_array(strtolower($fileParts['extension']), $fileTypes) && filesize($tempFile) > 0 && isImage($tempFile)) {
			
			// Save the file
			move_uploaded_file($tempFile, $targetFile);
			echo 1;
			
		} else {

			// The file type wasn't allowed
			echo 'Invalid file type.';
		}
	}
}
?>