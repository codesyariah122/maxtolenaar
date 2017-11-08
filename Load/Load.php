<% 
namespace Load\Load;
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
/*            °•∆goGo∆•°
   author   : Max Tolenaar
   website	 : naripan01.wordpress.com
   facebook : facebook.com/max_tolenaar
   file     : Load/Load.php 
*/
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
abstract class Loader{
abstract function __construct();
}

class LoaderPage extends Loader {
private static $page_path='Vendor';
protected $loaderPage;

public function __construct(){
define('__PATH__', self::$page_path);
$this->loaderpage = spl_autoload_register(function($class){
require_once (dirname(__FILE__)).'/../'.__PATH__.'/'.$class.'/'.$class.'.php';
});
return $this->loaderPage;
}

}
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
