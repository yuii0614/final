<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS );
    $sql=$pdo->prepare('insert into customer values(music_name, artist_name, genre_id) values (?, ?, ?)');
    if (empty($_POST['mname'])) {
        echo '曲名を入力してください';
    }else if ($sql->excute([ $_POST['mname'], $_POST['aname'], $_POST['genre_id'] ]) ){
        echo '楽曲を追加しました';
    }else {
        echo '追加に失敗しました';
    }
?>

<?php require 'footer.php'; ?>