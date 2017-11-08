<%
$diskinfo=new DeviceInfo(); 
$meminfo=new DeviceInfo(); 
$dirinfo=new DeviceInfo();
$date=new DeviceInfo();
$cpuprocess=new DeviceInfo();
$netstat=new DeviceInfo();
$fsck=new DeviceInfo();
$serverinfo=new DeviceInfo();

$diskinfo->setUserDevice('diskinfo');
$meminfo->setUserDevice('meminfo');
$dirinfo->setUserDevice('dirinfo');
$date->setUserDevice('dateinfo');
$cpuprocess->setUserDevice('process');
$netstat->setUserDevice('netstat');
$fsck->setUserDevice('checkdisk');
$serverinfo->setUserDevice('serverfullinfo');



