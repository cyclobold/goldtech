<?php 
session_start();

echo "Welcome ". $_SESSION['name'];

echo "<h4><a href='update_name.php'>Update Name</a></h4>";