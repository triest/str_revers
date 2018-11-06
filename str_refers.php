<?

 function StrRevers($str)
{
	$new_ser='';

	for ($i=0; $i<=mb_strlen($str) ; $i++) { 
		$new_ser.=mb_substr($str,mb_strlen($str)-$i,1 );
	}

	return $new_ser;
}



//echo mb_strrev("abs");
echo StrRevers("abc");
 
 
?>