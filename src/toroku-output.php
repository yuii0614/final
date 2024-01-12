<?php require 'db-connect.php'; ?>

<?php

    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into Music values(null,?,?,?)');
    $sql->execute(
        [ $_POST['music_name'], $_POST['artist_name'], $_POST['genre_id'] ]
    );  
    echo '楽曲を登録しました';
        
?>

<?php require 'footer.php'; ?>