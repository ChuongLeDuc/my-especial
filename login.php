<?php 
ob_start();
  if($_POST['username']!="especial" or $_POST['pass']!="030904"){
      $_SESSION['mess']="KIỂM TRA THÔNG TIN";
      
   }else{
      $_SESSION['login']="OK";
      header('location:page1.php');
      
}

?>
<html>
  <body>
   <table>
     <th style="margin:20%  "> THÔNG TIN ĐĂNG NHAP</th>
     <form method="POST">
     <tr>
      <td>Username</td>
      <td><input type="text" name="username" ></td>
     </tr>
    
<tr>
      <td>Pass</td>
      <td><input type="text" name="pass" ></td>

</tr>
   </form>
   <td><a href=login.php style="border: 1px solid black; width:auto; height:50px;
  text-decoration:none; background:grey">ĐĂNG NHẬP</a></td>

</tr>
   </table>
</body>
</html>
