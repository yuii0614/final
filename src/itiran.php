<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS );

    foreach( $sql as $row ){
        echo '<p>';
        echo $row['music_id'], ' : ';
        echo $row['music_name'], ' : ';
        echo $row['artist_name'], ' : ';
        echo $row['genre_id'];
        echo '</p>';
    }
?>

<?php require 'footer.php'; ?>