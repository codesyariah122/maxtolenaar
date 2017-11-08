<?php 
include_once 'setUserDevice.php';
if(isset($_REQUEST['device'])){
switch($_REQUEST['device']):
?>
<?php case 'DiskInfo':?>
<pre>
<?php $diskinfo->UserDevice();?>
</pre>
<?php break; case 'MemInfo':?>
<pre>
<?php $meminfo->UserDevice();?>
</pre>
<?php break; case 'DirServer':?>
<pre>
<?php $dirinfo->UserDevice();?>
</pre>
<?php break; case 'DateServer':?>
<pre>
<?php $date->UserDevice();?>
</pre> 
<?php break; case 'ProcessInfo':?>
<pre>
<?php $cpuprocess->UserDevice();?>
</pre>
<?php break; case 'NetStat':?>
<pre>
<?php $netstat->UserDevice();?>
</pre>
<?php break; case 'CheckDisk':?>
<pre>
<?php $fsck->UserDevice();?>
</pre>
<?php break; case 'ServerInfo':?>
<pre>
<?php $serverinfo->UserDevice();?>
</pre>
<?php break; endswitch; }?>