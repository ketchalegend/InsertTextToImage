<?php

$text = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamnonusddssdsmy eirmod tempor jshdjhdsj sjhdsjdsh jhsdjsdj jhsdjhds.";

function addTextImage($txt, $color = 0xFF, $abstand=1, $font=4, $width=600) {
    $fontheight = imagefontheight($font);
    $fontweight = imagefontwidth($font);
    $txt = explode("\n", wordwrap($txt, ($width / $fontweight), "\n"));
    $lines = count($txt);
    $im = imagecreate($width, (($fontheight * $lines) + ($lines * $abstand)));
    $bg = imagecolorallocate($im, 255, 255, 255);
    $y = 0;
    foreach ($txt as $text) {
      $x = (($width - ($fontweight * strlen($text))) / 2);
      imagestring($im, $font, $x, $y, $text, $color);
      $y += ($fontheight + $abstand);
    }
    header('Content-type: image/jpeg');
    die(imagejpeg($im));
  }

  $test = addTextImage($text); 