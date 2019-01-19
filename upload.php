
<?php
$local = getcwd();
$target_dir = '\uploads\\';
for($i=0;$i<count(array_filter($_FILES["fileToUpload"]["name"]));$i++){
	$target_file = $local. $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image

	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"][$i] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "doc" && $imageFileType != "docx") {
	    echo "Sorry, only .doc and .docx files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}


}
die();


?>
