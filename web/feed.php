<?php
  require 'db.php';
  $db = getdb();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>See nice things</title>
    <link rel="stylesheet" type="text/css"  href="feed.css"/>
</head>
<body>

       <div class="feedbox">
       <h1>Put nice things here!<h1> 
       <div class="items">
         <?php
            $content = $db->query('SELECT title, body,
            (SELECT t.type FROM types t join cards c ON t.id = c.type_id) 
            FROM cards ORDER BY id DESC LIMIT 10');
            // $content2 = $db->query('SELECT c.title, c.body, t.type
            //                         FROM cards c, types t
            //                         JOIN types')
           // $content->execute();
          // $rows = $content->fetchAll(PDO::FETCH_ASSOC);

          foreach($content as $row)
          {
            echo '<div class="cards">'. $row['type_id'] . strtoupper($row['title']) . '<br>' . $row['body'] . '<br><br></div><br><br>';
          }
        ?>
    

       </div>
       <form action="create.php" method="POST" class="insert-card">
           <input type="text" placeholder="title" name="title">
           <input type="text" placeholder="comment" name="body">
           <input type="radio" name="type" value="goodDeed"> good deed <br>            
            <input type="radio" name="type" value="quote"> quote <br>            
           <button type="submit">Add a nice thing</button>
       </form>
    </div>
</body>
</html>