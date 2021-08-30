<<?php 
   ob_start();
   include "config.php";
   if (!$_SESSION['login']){
      header('location:login.php');
      exit;
}else{
   $sql="UPDATE trangthai SET status='ph�t audio' WHERE id='1'";
     mysqli_query($conn,$sql);
    }
?>
  <html>
   <head>
       <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
   
    <body>
      <div id='page'>
         <h1>Click vào đây nè</h1>
         <audio controls>
           <source="">
         </audio>
        <p2>QUYT NH I N�</p2>
        <a href="end.php?ans=1">OK OK, YÊU NHÌU NHÌU</a>
        <a href="end.php?ans=2">CHẤP NHẬN,LOVE DU</a>
       </div>
    </body>
</html>
