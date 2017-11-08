<%
$form=new Form();
$form->setform($_SERVER['PHP_SELF'],"post","role");

$labelfullname=new Form();
$labelfullname->setlabel("namalengkap","control-label","Nama Lengkap");

$fullname=new Form();
$fullname->setinput("text","nama","namalengkap","form-control");
/*$labelshortname=new Form();
$labelshortname->setlabel("namapendek","control-label","Nama Pendek");

$shortname=new Form();
$shortname->setinput("text","shortname","namapendek","form-control");*/
$labelemail=new Form();
$labelemail->setlabel("email","control-label","Email Aktif");

$inputemail=new Form();
$inputemail->setinput("email","email","email","form-control");

$labelphone=new Form();
$labelphone->setlabel("telp","control-label","No.Telp");

$inputphone=new Form();
$inputphone->setinput("number","phone","telp","form-control");

$labeladdress=new Form();
$labeladdress->setlabel("address","control-label","Alamat Tinggal");

$contactaddress=new Form();
$contactaddress->settextarea("address","alamat",5,21,"form-control");

$labelabout=new Form();
$labelabout->setlabel("about","control-label","Tentang");

$contactabout=new Form();
$contactabout->settextarea("about","tentang",8,21,"form-control");

$submit=new Form();
$submit->setbutton("Siap diproses...","submit","add","btn btn-primary","Add Contact");


