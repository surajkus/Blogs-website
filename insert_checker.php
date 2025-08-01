<?php
include_once("db.php");
$url = $_GET["url"];
$CarName = $_GET["Name"];
$tittle = $_GET["tittle"];
$content = htmlspecialchars($_GET["content"]);
  if($url=="" && $tittle=="" && $content== "" && $CarName==""){
   header("Location: insert.php");

  }
  else{
$sql_url = "SELECT * FROM `info` WHERE `img` ='$url'";
$count_url =mysqli_query($conn,$sql_url);
$result_url = mysqli_num_rows($count_url);
if($result_url==0){

         // INSERT INTO `info`(`Sno`, `img`, `CarName`, `tittle`, `content`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
 $sql = "INSERT INTO `info`(`Sno`, `img`, `CarName`, `tittle`,`content`) VALUES (NULL,'$url','$CarName','$tittle' ,'$content')";
 $result =mysqli_query($conn ,$sql);
 if($result==1){
    header("Location: index.php");
 }
}
else{
   echo "data already exist";
}
  }
 ?>