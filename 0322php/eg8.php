<?php
  $month= 6 ;
  switch($month){
	case 12:
	case 1:  
	case 2:$jj="Winter";break; 	
	case 3:  
	case 4:
	case 5:$jj="Spring";break;  	
	case 6:
	case 7:
	case 8:$jj="Summer";break;	
	case 9:
	case 10:
	case 11:$jj="Autum";break;   
	default:$jj="Error!";  
  }
  echo $jj;
?>