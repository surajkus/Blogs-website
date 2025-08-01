<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
*{
    margin: 0;
}
body{
    width: 100%;
}

.blogs{
        width: 21%;
    height: 505px;
    border : 1px solid  black;
    margin: 25px;
    padding: 8px;
    transition: all 0.2s ease-in-out;
    background:azure ;
}
.blogs:hover{
    
    transform: scale(1.01);
    background: #dbe8f7ff;
   }
 

   .Blogs_cOntaIner{
    width: 100%;
    display:flex !important;
    flex-wrap:wrap;
    
   }
.img{
    width: 100%;
    height: 140px;

}
p{
    width: 102%;
    height: 130px;
    font-size:1.3rem;
    overflow: hidden;
}


.page,.btns{
     text-decoration: none;
     position:relative;
     top: 0px;
}
#sOrrE{
    position:absolute;
    right: 2px;
}
#sOrrE a, .navbar-header a{
    font-size:2rem;
    font-weight:bold;
    color: white !important;
}
.navbar{
    background:blue ;
    position:sticky;
    top:0;
    z-index: 999;
}
.navbar li a:hover{
    color: black !important;
    text-decoration: underline !important;

}
.tittle{
  font-weight: bold;
    font-size:1.7rem;
}

.h4{
    font-size:2rem;
    font-weight:bold;
}

    </style>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BLOGS</a>
    </div>
    <ul class="nav navbar-nav" id="sOrrE">
      
      <li><a href="#">Home</a></li>
      <li><a href="#">Blogs</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Discription</a></li>
    </ul>
  </div>
</nav>
<div class='Blogs_cOntaIner'>
<?php
 include_once("db.php");
 $sql = "SELECT * FROM `info`";
 $reslut = mysqli_query($conn,$sql);
while($row =$reslut->fetch_assoc()){
   
echo "
    <div class = 'blogs'>
        <img  class ='img' src=".$row["img"].">
       <h3 class ='tittle'>".$row["tittle"]."</h3><br>
       <strong> <h4>".$row["CarName"]."</h4><br></strong>
          <p>".$row["content"]."</p> 
      <a class ='page'  href ='blog.php?sno=".$row["Sno"]."'><button class ='btns' style='background: red; text-decoration:none !important; color:white;'>View more... </button></a>
    
    </div>";
}



?>
</div>







   
</body>

</html>