<?php
include_once("db.php");
$sno = $_GET["sno"];
 $sql = "SELECT * FROM  `info` where `Sno`='$sno'";
 $result = mysqli_query($conn, $sql);
 $rows= $result->fetch_assoc();
 $img =$rows["img"];
 $carN =$rows["CarName"];
 $tittle=$rows["tittle"];
  $content =$rows["content"];

?>
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
        background:#e5d9db;
    }
    .conatiner{
        width: 100%;
        height: 100%;
       background-color: #6582a5ff;
    }
   .img_box {
    width: 40%;
    height: 300px;
    margin: 30px;
       box-shadow: 9px 13px 88px -4px grey;
    border-radius: 5px;
    transition: all 0.3s ease-in-out; 
}

.img_box:hover {
    transform: scale(1.05); 
    box-shadow: 0px 16px 35px 25px rgba(0, 0, 0, 0.3); 
    cursor: pointer; 
}




h3{
    width: 80%;
        height: 30px;
        /* transition: width 0.2s ease-in-out; */
       margin-left: 60px;
        font-size:40px;
        word-spacing:10px;
        color: black;
        font-weight:bold;
        transition: all 0.3s ease-in-out;
        
    }
    h3:hover{
        transform: scale(1.06); 
        text-shadow: 1px 1px gainsboro;
        cursor: pointer; 
        /* font-size:42px; */
    }
    body::-webkit-scrollbar {
        display: none;
    }
    
    p{
        font-size: 20px;
        padding: 40px;
        margin: 20px;
        margin-top: 20px;
        word-spacing: 15px;
    color: #350303;
   line-height: 31px;
   
}
.carNs{
    width: 500px;
    height: 200px;
    transition: all 0.2s ease-in-out;
    margin-left: 60px;
    font-size: 40px;
    word-spacing: 10px;
    color: darkblue;
    font-weight: bold;
    position: relative;
    top: 116px;
    left: 169px;
    
    
}
.carNs:hover{
    transform: scale(1.06); 
    cursor: pointer; 
    cursor: pointer; 
}
    #sOrrE{
    position:absolute;
    right: 2px;
}
#sOrrE a, .navbar-header a{
    font-size:18px;
    font-weight:bold;
    color: white !important;
}
.navbar{
    background:blue;
    height: 20px !important;
    position: sticky;
    top: 0;
    overflow: hidden;
    z-index: 1000;

}

.navbar li a:hover{
    color: black !important;
    text-decoration: underline !important;

}
.in_cont{
    width:100%;
    display:flex;
    justify-content: space-between;
}
.marquee {
    color:black;
   /* color: #204b8f; */
   position: relative;
   top:-5px;
   z-index: 999;
  font-size:17.22px;
   
    -webkit-animation: left 3s linear;
}



    </style>
<body>

     <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">BLOGS</a>
    </div>
    <ul class="nav navbar-nav" id="sOrrE">
      
      <li><a href="#">Home</a></li>
      <li><a href="#">Blogs</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Discription</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
  </div>
</nav>
  <div class="wrapper">
<marquee behavior="alternate"><span class="marquee">"Discover expert car reviews, latest launches, and automotive news. Explore electric vehicles, budget-friendly models, 
    buying guides, and comparisons. Stay updated with trends in technology, safety, and performance. "</span></marquee>
</div>
    <?php
     echo"
      <div class ='conatiner'>
      <div class ='in_cont'>
      <span class ='carNs'>".$carN."</span><br><br><br>
     <img class ='img_box' src=".$img." alt=''>
     </div>
     <h3>".$tittle."</h3><br><br><br>
     <p>".$content."</p>
     </div>
     ";

     ?>



</body>
</html>