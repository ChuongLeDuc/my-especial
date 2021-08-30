<?php 
   ob_start();
   include "config.php";
   if (!$_SESSION['login']){
      header('location:login.php');
      exit();
}else{
   $sql="UPDATE trangthai SET status='Trang 1' WHERE id='1'";
     mysqli_query($conn,$sql);
    }
?>
  <html>
   <head>
       <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
   
    <body>
      <div id='page'>
         <h1>Trang 1</h1>
        <p>
            
        </p>
       <a href='page2.php'>TRANG TIẾP</a>
       </div>
    </body>
</html>
