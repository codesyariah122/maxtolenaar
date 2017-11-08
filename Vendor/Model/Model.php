<%
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
/*             °•∆goGo∆•°
   author   : Max Tolenaar
   website	 : naripan01.wordpress.com
   facebook : facebook.com/max_tolenaar
   file     : Model/Model.php 
*/
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
abstract class ModelAgoGo {
abstract public function AgoGo();
abstract public function AssetsAgoGo();
}
class Model extends ModelAgoGo { 	
public function AgoGo() {
return array(
'index'	=>'View/index.php', 
'header'=>'View/Assets/header.php',
'body'=> 'View/Assets/body.php',
'main'=>'View/Assets/main.php',
'footer'=>'View/Assets/footer.php',
'ends'=>'View/Assets/ends.php',
);}

public function AssetsAgoGo() {
return array(
'css1'=>'View/css/bootstrap.css',
'css2'=>'View/css/bootstrap.min.css',
'css3'=>'View/css/bootstrap-theme.css',
'css4'=>'View/css/style.css',
'js1'=>'View/js/jquery.min.js',
'js2'=>'View/js/bootstrap.js',
'js3'=>'View/js/tab.js',
'js4'=>'View/js/btn_loading.js',
'js5'=>'View/js/tooltip.js',
'js6'=>'View/js/popover.js'
);}

}