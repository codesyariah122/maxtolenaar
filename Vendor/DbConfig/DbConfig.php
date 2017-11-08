<%
class DbConfig{
protected $connDB;
protected $closeConnection;
public function __construct(){
$this->connDB=mysql_connect(DB_HOST,DB_USER,DB_PASS);
if(!$this->connDB)
echo '<script>alert("Gagal Connect ke Database");</script>';
else
/*echo '<script>confirm("Sukses Connect ke Database");</script>';*/
return $this->connDB;
}

}

class insertData extends DbConfig {
protected $insertDB;
protected $dataDB=array();
protected $param;
protected static $namaDB='DataUser';
protected static $namaTB='data';
protected $param1;
protected $param2;
protected $param3;
protected $param4;
protected $param5;
protected $param6;
protected $param7;

public function __construct($b,$c,$d,$e,$f,$g,$h){
$this->param1=mysql_real_escape_string($b);
$this->param2=mysql_real_escape_string($c);
$this->param3=mysql_real_escape_string($d);
$this->param4=mysql_real_escape_string($e);
$this->param5=mysql_real_escape_string(strip_tags($f));
$this->param6=mysql_real_escape_string(strip_tags($g));
$this->param7=mysql_real_escape_string(strip_tags($h));
}

public function getInsertData(){
define('DB_NAME', self::$namaDB);
define('TB_NAME', self::$namaTB);
mysql_select_db(DB_NAME);
$this->insertDB=mysql_query("insert into ".TB_NAME." values(null,'".$this->param1."' ,'".$this->param2."','".$this->param3."','".$this->param4."','".$this->param5."','".$this->param6."','".$this->param7."')");
return $this->insertDB;
return $this->closeConnection=mysql_close(DB_NAME);
}//insertDB

}//insert

class selectData extends insertData {
protected $resultID1;
protected $resultData;

public function __construct(){
$this->resultID1;
$this->resultData;
}

public function selectData(){
try{
$conndb=new PDO("mysql:host=localhost;dbname=".parent::$namaDB,"root","", array(PDO::ATTR_PERSISTENT=>true));
}
catch(PDOException $x){
echo "Error!:".$x->getMassage()."<br/>";
die();
}
$this->resultID1=$conndb->query('select nama,email,phone,alamat,tentang from '. parent::$namaTB.' where id=1');
$resID1=$this->resultID1->fetch();
$nama1=$resID1['nama'];
$email1=$resID1['email'];
$telp1=$resID1['phone'];
$alamat1=$resID1['alamat'];
$tentang1=$resID1['tentang'];
%>
<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#<?=$telp1;?>">
<?=$nama1;?></a></li>
<!--deopdown kontak set-->
    <li class="dropdown">
      <a data-toggle="dropdown" class="dropdown-toggle" href="#">AllData<b class="caret"></b></a>
      <ul class="dropdown-menu">
<?
$this->resultData=$conndb->query("select * from ". parent::$namaTB);
foreach($this->resultData as $data){
?> 
<li><a href="#<?=$data['id']?>">
<?=$data['nama'];?></a></li>
<?}?>
      </ul>
    </li>
  </ul>

  <div class="tab-content">
    <div id="<?=$telp1;?>" class="tab-pane fade in active"><br/>
<pre>
<div class="popover-demo">
 <a data-toggle="popover" tabindex="2" data-trigger="focus" title="About :" data-content="<?=$tentang1;?>."><b> <?=$nama1;?></b></a>
</div>
__________________________________________________<br/>
<b>Phone : </b><br/>
<?=$telp1;?><br/>
<b>Email : </b><br/>
<?=$email1;?><br/>
<b>Address : </b><br/>
<?=$alamat1;?><br/>
__________________________________________________<br/>
</pre>
<button type='submit' class='btn btn-info'>Edit</button>&nbsp;&nbsp;<button type='submit' class='btn btn-danger'>Hapus</button>
</div>
<?
$this->resultData=$conndb->query("select * from ". parent::$namaTB);
foreach($this->resultData as $data){
?>
  
<div id="<?=$data['id'];?>" class="tab-pane fade"><br/>
<pre>
<div class="popover-demo">
 <a data-toggle="popover" tabindex="2" data-trigger="focus" title="About :" data-content="<?=$data['tentang'];?>."><b> <?=$data['nama'];?></b></a>
</div>
__________________________________________________<br/>
<b>Phone :</b><br/>
<?=$data['phone'];?><br/>
<b>Email :</b><br/>
<?=$data['email'];?><br/>
<b>Address :</b><br/> <?=$data['alamat'];?><br/>
__________________________________________________<br/>
</pre>
<button type='submit' class='btn btn-info'>Edit</button>&nbsp;&nbsp;<button type='submit' class='btn btn-danger'>Hapus</button>
    </div>
<?}?>
  </div>
<%
}//function selectdata

}//class selectdata
%>
