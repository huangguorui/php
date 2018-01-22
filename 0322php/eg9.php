<?php
  $year = 2080;
  $month = 12;
  $flag=0;  //假设是平年
  if ($year % 400 == 0)
    $flag=1;
  if (($year % 4 == 0) && ($year % 100 !=0))
    $flag=1;
  switch($month){
    case 1:
    case 3:
    case 4:
    case 7:
    case 8:
    case 10:
    case 12: $days=31;break;
    case 4:
    case 6:
    case 9:
    case 11:$days=30;break;
	case 2: $days=28+$flag; break; 
  }
  echo $days;
?>