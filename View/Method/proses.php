<?
new DbConfig;
if(isset($_POST['add'])){
$tgl=date('y/m/d H:i:s-a');
$ip=md5($_SERVER['REMOTE_ADDR']);
$nama=trim(ucwords($_POST['nama']));
$email=trim($_POST['email']);
$telp=trim($_POST['phone']);
$alamat=strip_tags(nl2br($_POST['alamat']));
$tentang=strip_tags(nl2br($_POST['tentang']));

$filter=array("brengsek","goblog","anjing","setan","kontol","vagina","goblok","goblog","fuck","bangsat","bajingan");

if((empty($nama))||(empty($email))||(empty($telp))||(empty($alamat))||(empty($tentang))):

echo "<script>alert('Anda Belum mengisi form dengan benar form masih kosong');document.location='?id=data/kosong/';</script>";

else:

if(!eregi('^[a-zA-Z0-9_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9_\-\.]+$', $email))
echo "
<script>
alert('Email Tidak valid');
</script>";

if(strlen($alamat)<8){
echo "
<script>
alert('Masukan alamat yang lengkap dan sesuai dengan alamat ktp');
document.location='?id=alamat/salah/';
</script>";
}elseif(strlen($tentang)<5){
echo "
<script>
alert('Form input Tentang Anda harus lebih dari 5 karakter');
document.location='?id=karakter/kurang/';
</script>";
}else{
foreach($filter as $kata){
$tentang=str_replace($kata, '!#@$%', $tentang);
}
$kirim=new insertData($tgl,$ip,$nama,$email,$telp,$alamat,$tentang);

$kirim->getInsertData(); 

echo "<script>alert('sip lah...'); document.location='?id=data/sukses/'; </script>";

exit;
}//else strlen 
endif;
}