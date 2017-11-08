<% 
require_once (dirname(__FILE__)).'/Path/Database.php';
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
/*            °•∆goGo∆•°
   author   : Max Tolenaar
   website	 : naripan01.wordpress.com
   facebook : facebook.com/max_tolenaar
   file     : Database/index.php 
*/
//≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈
# Get Construct all class and aliasi
use \Path\Database\Database as Connection;
use \Path\create_db\Database as Database;
use \Path\create_table\Database as Table;
use \Path\create_table\FastInsertData as GoInsertData;

new Connection;
new Database;
new Table;
new GoInsertData;