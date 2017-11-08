<% 
namespace Path\Database;
include_once 'const_db.php';
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
/*            °•∆goGo∆•°
   author   : Max Tolenaar
   website	 : naripan01.wordpress.com
   facebook : facebook.com/max_tolenaar
   file     : SetUpDatabase/db.php 
*/
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
# Database Connection for CreateDB
class Database {
protected $connDB;
protected $closeConnection;
public function __construct(){
$this->connDB=mysql_connect(DB_HOST,DB_USER,DB_PASS);
if(!$this->connDB)
die('Maaf Database Tidak terhubung'.mysql_error());
else
echo "<script>confirm('OK database server connect');</script>";
}
}
include_once __DIR__.'/create_db.php';

