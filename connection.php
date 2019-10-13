<?php

$username = "";
$password = "";
$hostname = "";
$database_name = "";
$table_name = "";

$db = new PDO("mysql:host=;dbname=",$username,$password);

$sql = "SELECT * FROM ";

$rs = $db->query($sql);

if(!$rs){

    echo "An SQL error occured.\n";

    exit;

}

$rows =array();

while($r = $rs->fetch(PDO::FETCH_ASSOC)){

    $rows[] = $r;
    
}

print json_encode($rows);

$db = NULL;
?>