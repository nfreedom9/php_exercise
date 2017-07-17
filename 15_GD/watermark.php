<?php
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('text.png');
$im = imagecreatefrompng('original.png');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo
// width to calculate positioning of the stamp.
imagecopy(
			$im,								// 배경이미지 소스
			$stamp,								// 글자이미지 소스
			imagesx($im) - $sx - $marge_right,	// 글자이미지 배치 x축 시작위치
			imagesy($im) - $sy - $marge_bottom,	// 글자이미지 배치 y축 시작위치
			0,									// 글자이미지 리소스 x축 시작위치
			0,									// 글자이미지 리소스 y축 시작위치
			imagesx($stamp),					// 글자이미지 리소스 x축 끝위치
			imagesy($stamp)						// 글자이미지 리소스 y축 끝위치
);

// Output and free memory
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>