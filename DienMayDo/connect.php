<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://jmdrhuyxeteupz:59d17582c5cf3f93d4c70701169649492bf1ca1c26e7be4c1fed36ee1c91e358@ec2-34-205-14-168.compute-1.amazonaws.com:5432/d2hk0ut4ifpeo7");
    //$Connect = pg_connect("host=localhost port=5432 dbname=ec2-3-212-168-103.compute-1.amazonaws.com");
	//$Connect = pg_connect("host=localhost port=5432 dbname=ec2-3-212-168-103.compute-1.amazonaws.com user=oshceostldedzh password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>