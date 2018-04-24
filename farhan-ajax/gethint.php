<?php
// array with names
$a[] = "Balmond" ;
$a[] = "Lesley";
$a[] = "Argus";
$a[] = "Saber";
$a[] = "Lord";

//get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array $q is different from ""
if($q !== ""){
	$q= strtolower($q);
	$len=strlen($q);
	foreach($a as $name){
	if(stristr($q, substr($name, 0, $len))){
	if($hint === ""){
	$hint = $name;
	} else{
	$hint .= ", $name";
	}
	}
	}
	}
// output " no suggestion" if no hint was found or output correct values
echo $hint === ""? "Gak ada boss!": $hint;
?>
