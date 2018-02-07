<?php
	$id = $_GET['id'];
	$dir = "upload/";
	// Open a directory, and read its contents
	if (is_dir($dir)){
	    if ($dh = opendir($dir)){
	        while (($file = readdir($dh)) !== false){
	            if ($file == $id) { 
	            	closedir($dh); 
	                $path = getcwd(). '/upload/'.$file;

	                $path = "./open_cvtest ".$path." 1 > ".getcwd()."/tmp.txt 2>&1 &";
	                file_put_contents("tmp1.txt", "start");
	                //echo $path;
	                system($path,$rest);
	                echo "<script>alert('Matching');window.location.href='staff.single.php';</script>";
	                break;
	            }  
	        } 
	    }
	    closedir($dh);
	}
?>