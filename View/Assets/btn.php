<?php
$value=array(
"DiskInfo","MemInfo","DirServer","DateServer","ServerInfo","ProcessInfo","NetStat","CheckDisk");
$btn_class=array("btn-info","btn-danger","btn-warning","btn-success","btn-info","btn-default","btn-primary","btn-info");
$i=0;
do{
?>
<td>
<button class="btn <%=$btn_class[$i];%>" data-loading-text="Ok Siap..." type="submit" name="device" value="<%=$value[$i];%>"><%=$value[$i];%></button>
<?$i++;}while($i<=count($value)-1);?>
</td>