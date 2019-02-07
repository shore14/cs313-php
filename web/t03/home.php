<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    

<?php
try {
    $dbUrl = getenv('DATABASE_URL');
    $dbOpts = parse_url($dbUrl);
    var_dump($dbOpts);

    $dbHost = $dpOpts["host"];
    $dbPort = $dpOpts["port"];
    $dbUser = $dpOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"], '/');
    echo 'db Url is: ' . $dbUrl;
    echo 'db host is: ' . $dbHost;
    echo 'db port is: ' . $dbPort;
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo 'Error!: ' . $e->getMessage();
    die();
}

foreach($db->query('select * from scriptures') as $row) {
    echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . '<br>';
    echo $row['content'] . '<br><br>';
}



?>
</body>
</html>