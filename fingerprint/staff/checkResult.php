<?php
	ob_end_flush();
	$timeflag = True;
	if(filesize("tmp1.txt") >= 3){
		while($timeflag){
			sleep(2);
			if(filesize("tmp.txt") >= 3){
				$timeflag = False;
				$content = file_get_contents("tmp.txt");
				//echo $content;
				$result = explode('||', $content);
				foreach ($result as $value) {
					$tmp = split(':', $value);
					$tag[$tmp[0]] = $tmp[1];
				}
				$response  = json_encode($tag);
				//echo $response;
				//file_put_contents("tmp.txt", "");
				//file_put_contents("tmp1.txt", "");
			}
		}
	}
	else {
		$var = Array("status"=>"No Matching");
		$response = json_encode($var);
	}
	echo $response;
?>