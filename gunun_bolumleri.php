<?php 
date_default_timezone_set('Europe/Istanbul'); 

$saat = date('H:i');

if( $saat >= "06:00" &&  $saat <= "10:00"){
    echo " gunaydinlar!";
} 
elseif($saat > "10:00" &&  $saat <= "17:00"){
    echo "iyi günler";
}
elseif($saat > "17:00" &&  $saat <= "20:00"){
    echo "iyi aksamlar";
}
elseif($saat > "20:00" && $saat <= "00:00"){
    echo "iyi geceler";
}
elseif($saat > "00:00" && $saat <= "06:00"){
    echo " esenlikler dilerim";
}

//echo date("Y-m-d", strtotime("now"))."\n"; 
?> 