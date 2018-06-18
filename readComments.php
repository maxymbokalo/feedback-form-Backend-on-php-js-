<?php
require_once 'connection.php';
require_once 'PDOp.php';

$link = new PDO("mysql:host=$db_host;dbname=$db","$db_user","$db_password");
$stmt = $link->prepare('SELECT * FROM comment');
$stmt->execute();

if($stmt->rowCount() > 0){
    while($res = $stmt->fetch(PDO::FETCH_BOTH)){
        echo '<div class="comments">
   <div class="comment dialog">
            <p>', 'Name: ', $res['Name'] , '<p>
            <p>',  'Email: ', $res['Email'] , '<p>
            <p><h4> ',  'Comment: ', $res['Text'] , '</h4><p>
</div>
  </div>';
    }
}
