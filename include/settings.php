<?php
# MySQL settings
 #Main settings
	$cfg['db']['server'] = 'localhost'; // Nazwa serwera bazy danych (najczęściej localhost)
#	$cfg['db']['user'] = 'root'; // Nazwa użytkownika bazy danych
		$cfg['db']['user'] = 'dev_zimniak_rg'; // Nazwa użytkownika bazy danych
#	$cfg['db']['pass'] = 'adoa2223abz'; // Hasło do bazy danych
		$cfg['db']['pass'] = 'jabil123'; // Hasło do bazy danych
#	$cfg['db']['name'] = 'jtab'; // Nazwa bazy danych
		$cfg['db']['name'] = 'dev_zimniak_org'; // Nazwa bazy danych
	$cfg['db']['prefix'] = 'jtab.'; // Prefix tabel w bazie (np. skrypt_)
 
# Logger settings
date_default_timezone_set('UTC');
$cfg['logger']['datetime_format'] = 'd.m.Y H:i'; // Format dla daty i czasu zapisywanych w logach. Postać jak dla funkcji date. Znaczniki formatujące na php.net/date
$cfg['logger']['logs_dir'] = $_SERVER['DOCUMENT_ROOT'].'/jtab/logs'; // Nazwa katalogu w którym będą przechowywane logi zdarzeń (bez końcowego ukośnika!)
#	$cfg['logger']['logs_dir'] = $_SERVER['DOCUMENT_ROOT'].'/logs'; // Nazwa katalogu w którym będą przechowywane logi zdarzeń (bez końcowego ukośnika!)


#do wywalenia :)
#$picpath="/jtab/";
$picpath="";
?>