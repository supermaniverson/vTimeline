<?php
	
	// Error message while uploading
	$error = "";
	$msg = "";

	$fileElementName = "photo";
	$allowFileType = array(".jpg", ".png", ".gif" );

	$numer = strrpos($_FILES['photo']['name'], '.');

	// Get the file type
	$fileSuffixName = substr($_FILES['photo']['name'], $numer);
	$fileSuffixName = strtolower($fileSuffixName);

	// The path that store the file after upload
	$upFilePath = '';

	if (!empty($_FILES[$fileElementName]['error'])) {
		switch ($_FILES[$fileElementName]['error']) {
			case '1':
				$error = "The uploaded file has exceed the max length that allowed.";
				break;

			case '2';
				$error = "The size of uploaded file exceed the MAX_FILE_SIZE in html form";
				break;

			case '3';
				$error = "Partly uploaded";
				break;

			default:
				$error = "Unkown Error";
		}
	}else if (!(in_array($fileSuffixName, $allowFileType))) {
		$error = "Invalid file type";
	}else {
		$ok = @move_uploaded_file($_FILES['fileToUpload']['tmp_name'], upFilePath);
		if($ok == false)
			$error = "Fail upload";
	}
	
?>