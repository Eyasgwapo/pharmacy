<?php
include "db_conn.php";
$id = $_GET["Number"];
$sql = "DELETE FROM `pharmacy drug` WHERE Number = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}