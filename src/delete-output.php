<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>

<h1>曲を削除</h1>
<a href="index.php">メニューに戻る</a>
<hr>
<br>

<?php
    $pdo=new PDO($connect, USER, PASS );
    $sql=$pdo->prepare('delete from Music where music_id=?');

    if( $sql->execute([$_POST['music_id']]) ){
        echo '楽曲を削除しました！';
    }else{
        ecjp '削除に失敗しました・・・';
    }
?>

<?php require 'footer.php'; ?>