<%
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
/*             °•∆goGo∆•°
   author   : Max Tolenaar
   website	 : naripan01.wordpress.com
   facebook : facebook.com/max_tolenaar
   file     : Config/Config.php 
*/
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
interface ConfigAgoGo {
public function __construct();
}
interface UserDevice extends ConfigAgoGo{ 
public function setUserDevice($device);
public function UserDevice();
}

class Config implements ConfigAgoGo {
public function __construct() {
$model = new Model();
$data_assets = $model->AssetsAgoGo();
require_once (dirname(__FILE__)).'/../View/View.php'; 	
}

}
