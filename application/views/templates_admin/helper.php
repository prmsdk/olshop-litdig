<?php

function read_more($string)
{
  $string = strip_tags($string);
  if (strlen($string) > 60) {

      // truncate string
      $stringCut = substr($string, 0, 60);
      $endPoint = strrpos($stringCut, ' ');

      //if the string doesn't contain any space then it will cut without word basis.
      $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
      $string .= '... <a href="detail">Read More</a>';
  }
  echo $string;
}