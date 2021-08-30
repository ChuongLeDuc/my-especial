<?php 
   ob_start();
   if (!$_SESSION['login']){
      header('location:login.php');
      exit();
}
if($_GET['ans']==1){
    $sql="UPDATE trangthai SET ans='1' WHERE id='1'";
     mysqli_query($conn,$sql);
}
if($_GET['ans']==2){
    $sql="UPDATE trangthai SET ans='2' WHERE id='1'";
     mysqli_query($conn,$sql);
}
?>
  <html>
   <head>
       <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
   
    <body>
      <div id='page'>
         <h1>VẬY LÀ MÌNH ĐÃ ĐC THOÁT Ế😘😘😘</h1>
       </div>
    </body>
</html>
