<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<h1>好きな曲一覧</h1>
<a href="index.php">メニューに戻る</a>
<hr>

<?php
    $pdo=new PDO($connect, USER, PASS );

    foreach( $pdo->query('select * from Music inner join Genre 
             where Music.genre_id = Genre.genre_id') as $row ){
        echo '<p>';
        echo $row['music_id'], '   :   ';
        echo $row['music_name'], '   :   ';
        echo $row['artist_name'], '   :   ';
        echo $row['genre_name'];
        echo '</p>';
    }
?>

<?php require 'footer.php'; ?>