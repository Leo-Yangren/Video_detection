<?php
	echo "string";
	$re = "时间:9.82348 found||movie name:实习生TheIntern2015HD1080PX264AACEnglishCHS-ENGMp4Ba||at:4276.310000:seconds";
	$result = explode('||', $re);
	$tmp;
	foreach ($result as $value) {
		$tmp = split(':', $value);
		$tag[$tmp[0]] = $tmp[1];
	}
	//var_dump( $tag);
	$tag1 = json_encode($tag);
	echo $tag1;
?>