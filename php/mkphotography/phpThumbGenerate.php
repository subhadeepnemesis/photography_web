<?php

/**
 * Thumbnail Generator (PHP)
 * @version 1.1
 * @since April 24, 2013
 *
 * This script is originally written by Ronald Nicholls
 * http://www.onextrapixel.com/2011/02/25/creating-dynamic-image-thumbnails-using-php/
 */

function generateThumbnail($source, $dest, $stype, $nw, $nh){

	// Get the dimension of source image
	$size = getimagesize($source);
	$w = $size[0];    
	$h = $size[1]; 

	// Select the right image library for the filetype
	switch ($stype) {
		case 'image/gif':
    	$simg = imagecreatefromgif($source);
    	break;

    	case 'image/jpeg':
    	$simg = imagecreatefromjpeg($source);
    	break;

    	case 'image/png':
    	$simg = imagecreatefrompng($source);
    	break;

        default:
        $simg = imagecreatefromjpeg($source);
        break;
	}

	$dimg = imagecreatetruecolor($nw, $nh);
	$wm = $w/$nw;
	$hm = $h/$nh;
	$h_height = $nh/2;
	$w_height = $nw/2;

	if ($w> $h) {
    	$adjusted_width = $w / $hm;
    	$half_width = $adjusted_width / 2;
    	$int_width = $half_width - $w_height;
    	imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);

    } elseif (($w <$h) || ($w == $h)) {  
    	$adjusted_height = $h / $wm;     
    	$half_height = $adjusted_height / 2;     
    	$int_height = $half_height - $h_height;         
    	imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h); 

    } else {     
    	imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h); 

    }     

    imagejpeg($dimg,$dest,100); 

 	$size = getimagesize($source); 
 	$w = $size[0];    //Images width 
 	$h = $size[1];    //Images height 

 	switch($stype) {     
 		case 'gif':     
 			$simg = imagecreatefromgif($source);     
 			break;     

 		case 'jpg':     
 			$simg = imagecreatefromjpeg($source);     
 			break;     

 		case 'png':     
 			$simg = imagecreatefrompng($source);     
 			break;

        default:
            $simg = imagecreatefromjpeg($source);     
            break;
 	} 

 	$dimg = imagecreatetruecolor($nw, $nh); 
 	$wm = $w/$nw; 
 	$hm = $h/$nh; 
 	$h_height = $nh/2; 
 	$w_height = $nw/2;     

 	if($w> $h) {
    	$adjusted_width = $w / $hm;
    	$half_width = $adjusted_width / 2;
    	$int_width = $half_width - $w_height;
    	imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);

	} elseif(($w <$h) || ($w == $h)) {
    	$adjusted_height = $h / $wm;
    	$half_height = $adjusted_height / 2;
    	$int_height = $half_height - $h_height;

    	imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
	} else {
    	imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);

	}

	imagejpeg($dimg,$dest,100);
}
