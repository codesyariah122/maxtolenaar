<%
class Form extends Model {
protected $action;
private $method;
private $typeinput;
protected $nameinput;
protected $idinput;
protected $valueinput;
var $forlabel;
var $namelabel;
var $row;
var $cols;
var $classes;
var $role;
private $datainput;

function setform($x,$y,$z){
$this->action=$x;
$this->method=$y;
$this->role=$z;
}
function getform(){
echo "<form action='".$this->action."' method='".$this->method."' role='".$this->role."'>";
}
function closeform(){
echo "</form>";
}
function setlabel($x,$y,$z){
$this->forlabel=$x;
$this->classes=$y;
$this->valuelabel=$z;
}
function getlabel(){
echo "<label for='".$this->forlabel."' class='".$this->classes."'>".$this->valuelabel."<br/>";
}
function setinput($w,$x,$y,$z){
$this->typeinput=$w;
$this->nameinput=$x;
$this->idinput=$y;
$this->classes=$z;
}
function getinput(){
echo "<input type='".$this->typeinput."' name='".$this->nameinput."' id='".$this->idinput."' class='".$this->classes."'>&nbsp;&nbsp;";
}
function settextarea($u,$v,$w,$x,$y){
$this->idinput=$u;
$this->nameinput=$v;
$this->row=$w;
$this->cols=$x;
$this->classes=$y;
}
function gettextarea(){
echo "<textarea id='".$this->idinput."' name='".$this->nameinput."' cols='".$this->cols."' row='".$this->row."' class='".$this->classes."'>"."</textarea>";
}
function setbutton($v,$w,$x,$y,$z){
$this->datainput=$v;
$this->typeinput=$w;
$this->nameinput=$x;
$this->classes=$y;
$this->valueinput=$z;
}
function getbutton(){
echo "<button data-loading-text='".$this->datainput."' type='".$this->typeinput."' name='".$this->nameinput."' class='".$this->classes."'>".$this->valueinput."</button>";
}
}

