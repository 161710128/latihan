<?php
require_once 'index.php';

$identitas2 = new identitas ("opik","bandung","xirpl-2","jomblo");
$identitas3 = new identitas ("rudi","bandung","xirpl-2","jomblo");
$identitas4 = new identitas ("ulul","bandung","xirpl-2","jomblo");
$identitas5 = new identitas ("irfan","bandung","xirpl-2","jomblo"); 

echo "nama        :".$identitas2->get_nama ()."<br>";
echo "lahir di        :".$identitas2->get_tempatlahir ()."<br>";
echo "kelas ?        :".$identitas2->get_kelas ()."<br>";
echo "status ?        :".$identitas2->get_status ()."<br>"."<br>"."<br>";

echo "nama        :".$identitas3->get_nama ()."<br>";
echo "lahir di        :".$identitas3->get_tempatlahir ()."<br>";
echo "kelas ?        :".$identitas3->get_kelas ()."<br>";
echo "status ?        :".$identitas3->get_status ()."<br>"."<br>"."<br>";

echo "nama        :".$identitas4->get_nama ()."<br>";
echo "lahir di        :".$identitas4->get_tempatlahir ()."<br>";
echo "kelas ?        :".$identitas4->get_kelas ()."<br>";
echo "status ?        :".$identitas4->get_status ()."<br>"."<br>"."<br>";

echo "nama        :".$identitas5->get_nama ()."<br>";
echo "lahir di        :".$identitas5->get_tempatlahir ()."<br>";
echo "kelas ?        :".$identitas5->get_kelas ()."<br>";
echo "status ?        :".$identitas5->get_status ()."<br>"."<br>"."<br>";

?>