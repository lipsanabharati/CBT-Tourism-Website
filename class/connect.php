<?php
class Database
{

 private $host = 'localhost'; 
 private $dbname = 'hamrogatha';
 private $username = 'root'; 
 private $password = ''; 

function connect(){
$connection= mysqli_connect( $this->host, $this->username, $this->password, $this->dbname);
return $connection;
}
function read($query){
 $conn=$this->connect();
 $result=mysqli_query($conn, $query);

 if (!$result){
    return false;
}
else {
    $data=[];
    while($row=mysqli_fetch_assoc($result))
    {   
        $data[]=$row;
      }
    return $data;
}
}
function save($query){
$conn=$this->connect();
$result=mysqli_query($conn, $query);

if (!$result){
    return false;
}
else {
    return true;
}
}
}

//$DB=new Database();
//$query="select * from users";
//$data=$DB->read($query);
//print_r($data);
