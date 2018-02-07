<?php
	$id = $_GET['id'];
	$dir = "upload/";
	// Open a directory, and read its contents
	if (is_dir($dir)){
	    if ($dh = opendir($dir)){
	        while (($file = readdir($dh)) !== false){
	            if ($file == $id) {  
	                $tag = unlink($dir.$file);
	                if($tag == true){
	                	echo "<script>alert('Delete the video successfully');window.location.href='staff.single.php';</script>";
	                }
	                else{
	                	echo "<script>alert('Fail to delete the video');window.location.href='staff.single.php';</script>";
	                }
	            }  
	        } 
	    }
	    closedir($dh);
	}
?>