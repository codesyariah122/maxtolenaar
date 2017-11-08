<?php
namespace Path\create_db;
# Create Database
class Database {
protected $create_db;
protected static $nama_db="DataUser";

public function __construct(){
define('DB_NAME',self::$nama_db);
$this->create_db=mysql_query('create database '.DB_NAME);
if(!$this->create_db)
die('gagal membuat database'.mysql_error());
else
echo "<script>confirm('database berhasil di buat');</script>";
return $this->create_db;
return $this->closeConnection=mysql_close(DB_NAME);
}
}
include_once __DIR__.'/create_table.php';
