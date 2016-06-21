<?php
$url = $_GET['url'];
var_dump($url);
return;
$src = './Uploads/Picture/' . preg_replace('/_(\d+)_(\d+)/', '', $url);
$filename = './Uploads/Picture/' . $url;
if (file_exists($filename)) {
	ob_start();
	header('Content-type:image/jpeg');
	readfile($filename);
	ob_flush();
	flush();
} else {
	if(!preg_match('/_(\d+)_(\d+)/', $url, $wh)){
		defulat();
		exit();
	}
	$width = $wh[1];
	$height = $wh[2];
	thumb(realpath($src), $width, $height, $filename, 'crop', '85');
}

function thumb($src, $width, $height, $filename, $mode = 'scale', $quality = '100') {
	try {
	$imageValue = getimagesize($src);
	$sourceWidth = $imageValue[0]; //原图宽
	$sourceHeight = $imageValue[1]; //原图高
	$thumbWidth = $width; //缩略图宽
	$thumbHeight = $height; //缩略图高
	$_x = 0;
	$_y = 0;
	$w = $sourceWidth;
	$h = $sourceHeight;
	if ($mode == 'scale') {
	if ($sourceWidth <= $thumbWidth && $sourceHeight <= $thumbHeight) {
	$_x = floor(($thumbWidth - $sourceWidth) / 2);
	$_y = floor(($thumbHeight - $sourceHeight) / 2);
	$thumbWidth = $sourceWidth;
	$thumbHeight = $sourceHeight;
	} else {
	if ($thumbHeight * $sourceWidth > $thumbWidth * $sourceHeight) {
	$thumbHeight = floor($sourceHeight * $width / $sourceWidth);
	$_y = floor(($height - $thumbHeight) / 2);
	} else {
	$thumbWidth = floor($sourceWidth * $height / $sourceHeight);
	$_x = floor(($width - $thumbWidth) / 2);
	}
	}
	} else if ($mode == 'crop') {
	if ($sourceHeight < $thumbHeight) { //如果原图尺寸小于当前尺寸 
	$thumbWidth = floor($thumbWidth * $sourceHeight / $thumbHeight);
	$thumbHeight = $sourceHeight;
	}
	if ($sourceWidth < $thumbWidth) {
	$thumbHeight = floor($thumbHeight * $sourceWidth / $thumbWidth);
	$thumbWidth = $sourceWidth;
	}

	$s1 = $sourceWidth / $sourceHeight; //原图比例
	$s2 = $width / $height; //新图比例
	if ($s1 == $s2) {

	} else if ($s1 > $s2) { //全高度 
	$y = 0;
	$ax = floor($sourceWidth * ($thumbHeight / $sourceHeight));
	$x = ($ax - $thumbWidth) / 2;
	$w = $thumbWidth / ($thumbHeight / $sourceHeight);

	} else { //全宽度 
	$x = 0;
	$ay = floor($sourceHeight * ($thumbWidth / $sourceWidth)); //模拟原图比例高度
	$y = ($ay - $thumbHeight) / 2;
	$h = $thumbHeight / ($thumbWidth / $sourceWidth);
	}

	}
	switch ($imageValue[2]) {
	case 2: $source = imagecreatefromjpeg($src);
	break;
	case 1: $source = imagecreatefromgif($src);
	break;
	case 3: $source = imagecreatefrompng($src);
	break;
	case 6: $source = imagecreatefromwbmp($src);
	break;
	default: defulat();
	return;
	}
	header("Content-type: image/jpeg");
	$thumb = imagecreatetruecolor($width, $height);
	imagefill($thumb, 0, 0, imagecolorallocate($thumb, 255, 255, 255));
	imagecopyresampled($thumb, $source, 0, 0, $x, $y, $width, $height, $w, $h);
	imagejpeg($thumb, null, $quality);
	// if ($_SERVER['HTTP_REFERER'] || false !== stripos($_SERVER['HTTP_REFERER'], 'http://' . $_SERVER['SERVER_NAME'])) {
	imagejpeg($thumb, $filename, $quality);
	// }
	imagedestroy($thumb);
	imagedestroy($source);
	} catch (Exception $ex) {
	defulat();
	}
}

function defulat() {
	$default_img = realpath('media/images/nopic.jpg');
	ob_start();
	header('Content-type:image/jpeg');
	readfile($default_img);
	ob_flush();
	flush();
}