<?php
date_default_timezone_set('Europe/Istanbul'); //Burda Hangi Bölgenin Zaman Dilimini Kullanıyorsak Apache Sunucusuna Belirtiyoruz.


$saat = date('H:i'); // Burda "H" Örnek Olarak 12:30'daki 12'yi Yani Saat'i, "i" İse 30'u Temsil Ediyor.

if ($saat < "20:00")  //Saat 20:00 Dan Küçük İse.
{

 echo "İyi Günler"; //Ekrana İyi Günler Yazdır.

} 

Else //Değil İse.
{
echo "İyi Akşamlar"; //Ekrana İyi Akşamlar Yazdır.
}
?>