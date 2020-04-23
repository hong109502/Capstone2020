<?php
$uploads_dir = 'upload/';
if (is_uploaded_file($_FILES['image']['tmp_name'])) {
	$tmp_name = $_FILES['image']['tmp_name'];
	$pic_name = $_FILES['image']['name'];
	$file_name = $uploads_dir.$pic_name;
	move_uploaded_file($tmp_name, $file_name);
	$str = "{\"timestamp\" :".(string)time().", \"path\": \"".$file_name."\"}";
	file_put_contents("info.json", $str);
}
else{
	echo "File not uploaded successfully.";
}
?>
