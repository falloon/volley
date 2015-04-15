

<?php
echo "hello";

# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dd76qbdlfmsh69 host=ec2-54-204-36-244.compute-1.amazonaws.com port=5432 user=wagshuhjlacogd password=0Z_mGmhfa98wjV7ZMEnf4coVj3 sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error."
    exit;
}

// $result = pg_query($db, "SELECT statement goes here");
// include_once("opportunities2.html");
?>


	

