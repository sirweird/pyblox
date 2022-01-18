<!DOCTYPE html>
<html lang="en">
<head>
    <title>PyBlox</title>
   
</head>
<body>
    
   <?php
function visitor($record) {
  $db_host = "localhost";
  $db_username = "username"; 
  $db_password = "password";
  $db_name = "database-name";
  $db_table = "table-name";
  $counter_page = "access_page";
  $counter_field = "access_counter";

  $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("Host or database not accessible");

  $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.") VALUES ('".$record."', 1) ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1"; 
  mysqli_query($db, $sql_call) or die("Error while entering");

$sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
$sql_result = mysqli_query($db, $sql_call) or die("SQL request failed ");
$row = mysqli_fetch_assoc($sql_result);
$x = $row[$counter_field];

mysqli_close($db);
return $x;
  }
?>
    
<br>
<center>
<img src="https://cdn.discordapp.com/attachments/910540053749563466/920323650152984616/Screenshot_20211214-124942.jpeg" width="400">
</center>
      <style>
.LinearGradient {
   background: yellow;
   background: -webkit-linear-gradient(10deg, yellow 40%, #40FF00,blue);
   background: -o-linear-gradient(10deg, yellow 40%, #40FF00, blue);
   background: -moz-linear-gradient(10deg 40%, yellow, #40FF00, blue);
   background: linear-gradient(10deg, yellow 40%, #40FF00, blue);
}
</style>
<DIV CLASS="LinearGradient"><center><h1>Welcome to PyBlox!</h1>
<h2>This is where you can download the app.</h2></center></DIV>
    
    < footer>
  <p>
<?php
    echo "You are the", $access_number, " visitor on this site!";
    ?>
</p>
</footer>
    
 <center>   <h4> this is a coding platform for kids!<br> when you create an account you can explore the app make projects out of blocks of code.<br> the simple setup helps kids to learn code and play with it!</h4></center>
<br>
    <br>
    <center>
    <h3>click the picture to download</h3>
    <a href="pyblox_2.zip" download>
    <img src="https://cdn.discordapp.com/attachments/910540053749563466/920681937209802782/Screenshot_20211215-161652.jpeg" width="150">
        
</a>
        
    <br>
    <br>
    <br>
    <br>
    <h5>check out our discord</h5><a href="https://discord.gg/XqZtwNuJ9a">here</a>
    </center>
    </body>
</html>
