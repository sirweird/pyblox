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

<?php
  $page_name = "Unique page name";
?>

<title><?php echo $page_name; ?></title>


<?php
include "webcounter.php";
$access_number = visitor($page_name);
?>

<footer>
  <p>
<?php
    echo "You are the", $access_number, " visitor on this site!";
    ?>
</p>
</footer>
