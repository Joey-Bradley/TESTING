  <?php

$con = mysql_connect("webdb","root");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("webdb", $con);

 

$sql="INSERT INTO contact (firstname, lastname, email, subject, message)

VALUES

('$_POST[firstname]','$_POST[lastname]' , ,'$_POST[email]', ,'$_POST[subject]', ,'$_POST[message]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

<!-- echo "1 record added"; -->

 

mysql_close($con)

?>