<?php
	$id = $_GET['id'];
	$dir = "upload/";
	// Open a directory, and read its contents
	if (is_dir($dir)){
	    if ($dh = opendir($dir)){
	        while (($file = readdir($dh)) !== false){ 
	        		if ($file == "." || $file == ".." ||$file == ".DS_Store") {  
                		continue;
            		} 

	                $tag = unlink($dir.$file);
	                if($tag == true){
	                	continue;
	                }
	                else{
	                	echo "<script>alert('Fail to delete the video');window.location.href='staff.single.php';</script>";
	                } 
	        } 
	        echo "<script>alert('Delete the videos successfully');window.location.href='staff.single.php';</script>";
	    }
	    closedir($dh);
	}
?>