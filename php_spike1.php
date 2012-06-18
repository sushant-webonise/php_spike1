


<?php

$string1="PHP parses a file by looking for ".'<br/>'." one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing ".'<br/>'." tag";

$string2="PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.";

$str1 = strstr($string1,'PHP');

$my_string1= strip_tags($string1);

$occ=substr_count($my_string1, 'PHP');

$arr1 = explode(" ", $my_string1);

$arr2 = explode(" ", $string1);

$date1= date("Y-m-d");


$pos=0;
$counter=0;


$date5 = explode("-",$date1);

$count3 = count($arr1);

$cc = strlen($string1)/4;

//echo $cc;
//echo "aaaaaaaaaaa";
///echo chunk_split($string1, $cc)."</br>";

//echo "This is it";

function print_arr($arr,$count2,$count4)
{
	if($count4==$count2)
	return;
	else 
	{		echo $arr[$count4]." ";
			$count4=$count4+1;
			print_arr($arr,$count2,$count4);
		}
	
}
 
$count3 = count($arr1);


$myFile = "my_file.txt";
$fh = fopen($myFile, 'w');
fwrite($fh, $string1); 

?>

<html>
<head>
<style type="text/css">

.head
{
	font-size: 23px;
	text-decoration: underline;
	
	}

</style>

</head>
<body>
<span style="font-size:30px">PHP SPIKE 1</span><br><br>
<br><span class="head">1. Number of occerances of PHP</span>
<br>
<?php echo $occ?>
</br>
</br>
<span class="head">2. Positions where PHP occures in the string 1 </br></span>
<?php 
for($i=0;$i<count($arr1);$i++) 
{
	if($arr1[$i]=="PHP")
	echo $i."<br/>";
}
?>
<br/>
<br/>
<span class="head">3. Create array of words in string 1 & print them using a recursive function</span>
<br/>
<br/>
<?php
		print_arr($arr2,$count3,0);
?>
<br/>
<br/>
<span class="head">4. Capitalise string 1</span>
<br/>
<br/>
<?php 
echo strtoupper($my_string1);
?>
<br/>
<br/>
<span class="head">5. Combine String 1 and 2</span>
<br><br>
<?php
$combine=$string1.$string2;

echo $combine;
?>
<br/>
<br/>
<span class="head">6. Echo string 1 & 2 using heredoc.</span>
<br/>
<br/>
<?php
 echo 'string1'.'string2';
?>
<br>
<br>
<span class="head">7. Print Current Date</span>
<br>
<br>
<?php
 echo  date("Y-m-d");
?>
<br>
<br>
<span class="head">8. Print 12th Jan 2012 </span>
<br>
<br>
<?php
$date5 = mktime(0,0,0,1,12,2012);
echo date('jS F Y',$date5);
?>
<br><br>
<span class="head">9. Add 7 days in current date</span>
<br><br>
<?php
echo Date('Y-m-d', strtotime("+7 days"));
?>
<br><br>
<span class="head">10. Cut the string 1 into 4 parts & print it.</span>
<br><br>
<?php

$ss = str_replace(" ","",$string1);

$cc = strlen($ss)/4;
$ch = str_split($string1,$cc+3);

print_r($ch);
?>
<br><br>
<span class="head">11. Divide the string 1 by occurances of '.'. Combine the array in reverse word sequence</span>
<br><br>
<?php
$split1=explode('.',$string1);

$arr11=explode(' ',$split1[0]);
$arr12=explode(' ',$split1[1]);

$arr11_rev = array_reverse($arr11);
$arr12_rev = array_reverse($arr12);
//echo print_r($arr11_rev);
//echo print_r($arr12_rev);

function print_rev($arr_r)
{
		for($i=0;$i<count($arr_r);$i++)
		echo $arr_r[$i]." ";
}

print_rev($arr11_rev);
print_rev($arr12_rev);

?>
<br>
<br>
<span class="head">12. Remove the HTML characters from string.</span>
<br>
<br>
<?php
$my_string1= strip_tags($string1);
echo $my_string1;
?>
<br><br>
<span class="head">13. Print the 'PHP' word from string 1 by traversing it using string functions</span>
<br><br>
<?php
echo substr($string1, 0,3);
?>
<br><br>
<span class="head">14. Find the length of string 1 & 2</span>
<br><br>
<?php
echo "Length of String 1:".strlen($string1)."<br>";

echo "Length of String 2:".strlen($string2);
?>
<br><br>
<span class="head">15. Create file & write string 1 to that file using PHP functions.</span>
<br><br>
<span class="head">16. Print all Global varibles provided by PHP</span>
<br><br>
<?php phpinfo(INFO_VARIABLES);
?>
<br>
<br>
<span class="head">17. Usage and examples of Header (PHP)</span>
<br><br>
Date in the past
<br>
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
<br><br>
To download pdf
header("Content-type:application/pdf");
<br><br>
It will be called downloaded.pdf
<br>
header("Content-Disposition:attachment;filename='downloaded.pdf'");
<br>
<br>
To download jpg
<br>
header("Content-type:image/jpg");
header("Content-Disposition:attachment;filename='downloaded.jpg'");
<br><br>
<span class="head">18. Redirect page 1 to page 2. </span>
<br><br>

<br>
<span class="head">19. Compare two dates. (12-4-2010 & 12-5-2011). Calculate the days between these two dates.</span> 
<br><br>
<?php
$datetime1 = date_create('12-4-2010');  
$datetime2 = date_create('12-5-2011');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a days');

?>

<br><br>
<span class="head">20. Print date after 20 days from current date</span>
<br><br>
<?php
$newdate1=Date('Y-m-d', strtotime("+20 days"));
echo $newdate1;
?>
<br><br>
<span class="head">21. Print date in array format.</span>
<br><br>
<?php

$date3 = date("Y-m-d");
$date4 = explode("-",$date3);
print_r($date4);

?>

</body>

</html>