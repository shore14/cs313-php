<?php
function getdb() {
    $db = NULL;
try {
    $dbUrl = getenv('DATABASE_URL');
    $dbOpts = parse_url($dbUrl);
    
    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"], '/');
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo 'Error!: ' . $e->getMessage();
    die();
}
return $db;
}
// foreach($db->query('select * from scriptures') as $row) {
//     echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . '<br>';
//     echo $row['content'] . '<br><br>';
// }



?>