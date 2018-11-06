<?

 function StrRevers($str)
{
	$new_ser='';

	for ($i=0; $i<=mb_strlen($str) ; $i++) { 
		$new_ser.=mb_substr($str,mb_strlen($str)-$i,1 );
	}

	return $new_ser;
}



//simple
//echo StrRevers("abc");
$str="abc";
 
 $str256=str_repeat($str, 85); //85*3=255
 $str256="a".$str256; //255+1 char
 //echo $str256;
 echo StrRevers($str256);
?>