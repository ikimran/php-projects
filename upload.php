<?php

// Getting user uploaded file
	
$file = $_FILES["file"];

// Saving file in uploads folder

move_uploaded_file($file["tem.name"], "uploads/" . $file["name"]);

// Redirecting back to home

header("Location: index.php");