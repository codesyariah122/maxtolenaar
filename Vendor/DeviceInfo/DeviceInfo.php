<?php
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
/*             °•∆goGo∆•°
   author   : Max Tolenaar
   website	 : naripan01.wordpress.com
   facebook : facebook.com/max_tolenaar
   file     : DeviceInfo/DeviceInfo.php 
*/
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
class DeviceInfo implements UserDevice {
public $userdevice;
public function __construct(){}
public function setUserDevice($device){
$this->userdevice=$device;
}
//last new add oct 2017
public function UserDevice(){
if($this->userdevice=='diskinfo'){
$this->userdevice=shell_exec('df');
echo $this->userdevice;
}elseif($this->userdevice=='meminfo'){
$this->userdevice=shell_exec('free -m');
echo $this->userdevice;
}elseif($this->userdevice=='dirinfo'){
$this->userdevice=shell_exec('ls -n');
echo $this->userdevice;
}elseif($this->userdevice=='dateinfo'){
$this->userdevice=shell_exec('date');
$calender=shell_exec('cal');
echo $this->userdevice."<br/>";
echo $calender;
}elseif($this->userdevice=='rootdir'){
$this->userdevice=$_SERVER['SCRIPT_NAME'];
echo $this->userdevice;
}elseif($this->userdevice=='process'){
$this->userdevice=shell_exec('ps m');
echo $this->userdevice;
}elseif($this->userdevice=='netstat'){
$this->userdevice=shell_exec('netstat');
echo $this->userdevice;
}elseif($this->userdevice=='checkdisk'){
$this->userdevice=shell_exec('fsck');
echo $this->userdevice;
}elseif($this->userdevice=='serverfullinfo'){
$name=shell_exec("uname -a | awk '{print $1,$3,$13,$14}'");
echo "<b>Device Name</b><br/>".$name;
$soft=$_SERVER['SERVER_SOFTWARE'];
echo "<b>Server Software</b><br/>".$soft."<br/>";
$browser=$_SERVER['HTTP_USER_AGENT'];
echo "<b>User Agent</b><br/>".$browser."<br/>";
$root=$_SERVER['SCRIPT_NAME'];
echo "<b>Root Direktori</b><br/>".$root."<br/>";
$protocol=$_SERVER['SERVER_PROTOCOL'];
echo "<b>Server Protocol</b><br/>".$protocol."<br/>";
$reqtime=$_SERVER['REQUEST_TIME'];
echo "<b>Request Time</b><br/>".$reqtime."<br/>";
$method=$_SERVER['REQUEST_METHOD'];
echo "<b>Request Method</b><br/>".$method."<br/>";
$requri=$_SERVER['REQUEST_URI'];
echo "<b>Request URI</b><br/>".$requri."<br/>";
$httphost=$_SERVER['HTTP_HOST'];
echo "<b>HTTP Host</b><br/>".$httphost."<br/>";
$httpaccept=$_SERVER['HTTP_ACCEPT'];
echo "<b>HTTP Accept</b><br/>".$httpaccept."<br/>";
$gateway=shell_exec('id');
echo "<b>UserGroup id</b><br/>".$gateway."<br/>";
}
}

}
