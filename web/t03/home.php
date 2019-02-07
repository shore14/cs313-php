<?php
try {
    $dbUrl = getenv('DATABASE_URL');
    $dbOpts = parse_url($dbUrl);
    $dbHost = $dpOpts["host"];
    $dbPort = $dpOpts["port"];
    $dbUser = $dpOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName - ltrim($dbOpts["path"], '/');

    $db = new PDO("pgsql:host=$dbHost,port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo 'Error!: ' . $e->getMessage();
    die();
}

foreach($db->query(select * from scriptures) as $row) {
    echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . '<br>';
    echo $row['content'] . '<br><br>';
}



?>