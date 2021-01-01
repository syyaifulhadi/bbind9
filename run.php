<?php 
######################################
## Nama : Syaiful Hadi 				##
## Jurusan: TKJ						##
## Sch.id : SMKN 1 Bojonegoro		##
## Tool: Auto Create DNS Server 	##
##									##
## GUnakan Dengan Bijak ya teman 	##
## jangan males belajar SEMANGAT!!	##
######################################
//tak bersih kan dulu
system("clear");
//memanggil
include "/etc/bbind9/banner.php";
system("cat /etc/bbind9/menu.txt");
include "/etc/bbind9/pertanyaa.php";
include "/etc/bbind9/filter.php";
require "/etc/bbind9/data.php";
require "/etc/bbind9/create.php";

//mengunakan
// create("/etc/bind/reverse.".$domain, 'w', $reverse);
create("/etc/bind/forward.".$domain, 'w', $forwoard);
create("/etc/bind/named.conf.options", 'w', $options);
create("/etc/bind/named.conf.local", 'a', $conf_local);
create("/etc/resolv.conf", 'w', $resolv);sleep(2);
system("systemctl restart bind9");
echo "\n Domain $domain Successfully Installed\n";

 ?>