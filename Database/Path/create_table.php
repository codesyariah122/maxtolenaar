<?php
namespace Path\create_table;
# Create Table
class Database {
protected $createTB;
protected $selectDB;
protected $fastinsert;
protected static $nama_tb="data";

public function __construct(){
define('TB_NAME',self::$nama_tb);
$this->selectDB=mysql_select_db(DB_NAME);

$this->createTB= mysql_query("create table `".TB_NAME."`(
`id` int(10) not null auto_increment,
`date` datetime not null,
`ip` varchar(50) not null,
`nama` varchar(100) not null,
`email` varchar(100) not null,
`phone` varchar(100) not null,
`alamat` longtext not null,
`tentang` longtext not null,
primary key(`id`))");

if(!$this->createTB)
die('gagal membuat table database'.mysql_error());
else
echo "<script>confirm('table berhasil dibuat');document.location='../';
</script>";
return $this->createTB;
}

}

class FastInsertData extends Database{

public function __construct(){
$this->fastinsert=mysql_query("INSERT INTO `".TB_NAME."` (`id`, `date`, `ip`, `nama`, `email`, `phone`, `alamat`, `tentang`) VALUES
(1, '2017-11-05 23:12:38', 'f528764d624db129b32c21fbca0cb8d6', 'Zoey Killer', 'zoey@dataakses.com', '087855456661', 'Jl. Ambigu tabu gang anomali Blok kemenyan No.333', 'Dendam nyi pelet!!! \r\nAwasi imaji'),
(2, '2017-11-05 23:16:48', 'f528764d624db129b32c21fbca0cb8d6', 'Max Tolenaar', 'max_tolenaar@dataakses.com', '08886000299', 'Jl. Javascript No.755  komplek. Citraresmi', 'Kemuning cinta paripurna citraresmi'),
(3, '2017-11-07 09:05:05', 'f528764d624db129b32c21fbca0cb8d6', 'Deden Sombreros', 'sombreros@dataakses.com', '087854546551', 'Jl. Boeing komplek Melong Green Garden', 'Kenapa istri harus bisa masak?\r\nIni kan rumah tangga bukan rumah makan?'),
(4, '2017-11-07 09:06:48', 'f528764d624db129b32c21fbca0cb8d6', 'Sukaesih Codingground', 'coding_ground@dataakses.com', '089764512558', 'Jl. Ports of lima komplek. Tajur bumi', 'Selamatkan bumi dari pemanasan global'),
(5, '2017-11-07 09:08:03', 'f528764d624db129b32c21fbca0cb8d6', 'Dadang Muslihat', 'muslihat@dataakses.com', '088854556555', 'Jl. Bale endah No.65', 'Sekedar suka sama suka ini atuh beb.') ");

if(!$this->fastinsert)
echo "<script>confirm('gagal insert data ke database mysql_error()');</script>";
else
echo "<script>confirm('data berhasil di input');</script>";
return $this->fastinsert;
return $this->closeConnection=mysql_close(DB_NAME);
}

}
