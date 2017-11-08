<%
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
/*             °•∆goGo∆•°
   author   : Max Tolenaar
   website	 : naripan01.wordpress.com
   facebook : facebook.com/max_tolenaar
   file     : View/View.php 
*/
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
$data = $model->AgoGo();
reset($data);
while(list($index_data,$result_theme)=each($data)){ 
include_once $result_theme;
}
