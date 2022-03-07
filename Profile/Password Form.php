<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
     // Get the password
          $pw = md5($_POST['abc']);

     // Compare against the stored password
          $valid_pw = md5("abc");

          if($pw != $valid_pw){
               echo "Error! You do not have access to this file";
          }else{
               header("Location:file:///C:/Users/chaud/Desktop/Shikhar/Studies/IB/ITGS/IA/All%20Criteria/Criterion%20E/TIC%20Website/Profile/Company%20Profile%20TIC%20.pdf");
          }
?>
<body>
</body>
</html>