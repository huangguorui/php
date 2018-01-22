<?php
  header("content-type:text/html;charset=utf-8");
  $score = 69;
  $dc = "";
  if ($score>=90) 
    $dc = "卓越";
  elseif ($score>=80)
    $dc = "优秀";
  elseif ($score>=70)
    $dc = "良好";
  elseif ($score>=60)
    $dc = "及格";
  else
    $dc = "不及格";
  echo $dc;
?>