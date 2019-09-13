echo "# teat" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/Jeenjee/teat.git
git push -u origin master

<?php 

final class Item {//1
    private $id;
    private $name='name2';
    private $status=2,$changed=1;
    private $dbHost,$dbUser,$dbPassword,$dbName;

    function __construct($id){//2
      $this->id=$id;
      $this->dbHost="localhost";
      $this->dbUser="root";
      $this->dbPassword="";
      $this->dbName="objects";
      $mysqli=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
    }
    private function init($name,$status){//3
      if ($init){
      $db_referal = $mysqli -> query("SELECT `name`,`status` from objects");//5
      $row = $db_referal -> fetch_array();	
      $this->status=$row["status"];
      $this->name=$row["name"];
      $init=0;
      }
    }
    public function __get($imya){ //6
      //if(isset($this->$imya)){
      if(property_exists($this, $imya)){
        return $this->$imya;
      }
    }
    public function __set($var,$value){
      if(isset($this->$var)){
       $bool=(($this->$var=$this->name && is_string($this->$var)) || ($this->$var=$this->status && is_int($this->$var)) ||($this->$var=$this->changed && is_bool($this->$var)));
      if(property_exists($this, $var) && $bool){//7
        $this->$var=$value;
      }
    }
    public function save($var1,$var2){//8
      $status1=$this->status;//10'
      $changed1=$this->changed;
      $this->status=$var1;
      $this->changed=$var2;
      return(array($status1,$changed1));
    }
}

$item=new Item(10);


3)
/* Если надо, чтобы они продолжали работать после alert'а
  */

document.onkeydown = checkKey;
$aUp=1;
$aDown=1;
$aLeft=1;
$aRight=1;
function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '38' && $aUp) {
        alert(event.code);
        $aUp=0;
    }
    else if (e.keyCode == '40'  && $aDown) {
        alert(event.code);
        $aDown=0;
    }
    else if (e.keyCode == '37' && $aLeft) {
        alert(event.code);
        $aLeft=0;
    }
    else if (e.keyCode == '39' && $aRight) {
        alert(event.code);
        $aRight=0;
    }

}

/* OR */
document.addEventListener('keydown', function(event) {
  if (event.key == 'ArrowLeft' || event.key == 'ArrowRight' || event.key=='ArrowUp' || event.key=='ArrowDown') {
    alert(event.code);
  }
});
