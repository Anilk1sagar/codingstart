<?php
session_start();

if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileNType = $_FILES['file']['type'];

	//Get file extension
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	//Allowing files Extensions
	$allowed = array('jpg', 'jpeg', 'png', 'gif');

	//Check if file extension has allowed extensions
	if (in_array($fileActualExt, $allowed)) {
	 	//check if file has error
	 	if ($fileError === 0) {
	 		//Check file size
	 		if ($fileSize < 1000000) {
 				//Set file destination for uploading
	 			$fileDestination = '../../images/codes/' . $fileName;
	 			//Finally Upload file
	 			move_uploaded_file($fileTmpName, $fileDestination);
	 			echo "Your file upload successfully!";
	 		} else {
	 			echo "Your file is too big!";
	 		}
	 	} else {
	 		echo "There was an error uploading your file! please try again.";
	 	}
	 } else {
	 	echo "You can not upload files of this type!";
	 }
}