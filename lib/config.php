<?php
include('func.php');
include('igfunc.php');
date_default_timezone_set('Europe/Belgrade');
error_reporting(0);
/*
Jika akun terkena feedback_required tenang, tinggal tunggu 24 jam ntar pulih lagi
@theaxe.id
*/

//UBAH BAGIAN INI
$countTarget    = '20'; //Broj naloga po cilju.
$sleep_1        = '2'; //Pauziraj po priči
$sleep_2        = '5'; //Jeda per view story 1 akun user
//SAMPAI SINI AJA

$answerFile		= 'storyAnswer.txt'; // FIle komentar mu
$saveFile 		= 'logData.txt'; // File log
$cookieFile 	= 'cookieData.txt'; // File cookie
$targetFile 	= 'targetData.txt'; // File target
$date 			= date("Y-m-d");
$time 			= date("H:i:s");
?>
