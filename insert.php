<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;

    }
    form{
        margin: 20px;
    }
    input{
        width: 60%;
        height: 2rem;
        padding-left: 10px ;
    }
    span{
        font-family: Arial;
    }
    button{
        width: 60%;
        height: 2rem;
        background:blue;
        color:white;
    }
</style>
<body>
    
    <form action="insert_checker.php" method="get">
        <span>Url Enter:-</span><br>
        <label for="url"></label>
        <input type="text" placeholder ="Enter your Url" id ="url" name="url"><br><br>
       
        <span>CarName Enter:-</span><br>
        <label for="Car_name"></label>
        <input type="text" placeholder ="Enter your carName" id ="Car_name" name="Name"><br><br>
        
        <span>Tittle Enter:-</span><br>
        <label for="tittle"></label>
        <input type="text" placeholder ="Enter your tittle" id ="tittle" name="tittle"><br><br>
        
        <span>Content Enter:-</span><br>
        <label for="content"></label>
        <input type="text" placeholder ="Enter your content" id ="content" name="content"><br><br>
         
         <button>SUBMIT</button>
 </form>
</body>
</html>