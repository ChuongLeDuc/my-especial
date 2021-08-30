<?php 
   ob_start();
   include "config.php";
   if (!$_SESSION['login']){
      header('location:login.php');
      exit;
}else{
   $sql="UPDATE trangthai SET status='Phát video' WHERE id='1'";
     mysqli_query($conn,$sql);
    }
?>
  <html>
   <head>
       <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
   
    <body>
     <div id='page'>
      <video width=auto  autoplay>
  <source src="mov_bbb.mp4" type="video/mp4">
    </video>
       <a href='endpage.php'>TRANG TIẾP</a>
       </div>
    </body>
</html>
