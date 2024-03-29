<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<h1>曲を追加</h1>
<a href="index.php">メニューに戻る</a>
<hr>
<br>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into Music (music_id, music_name, artist_name, genre_id) values(null, ?, ?, ?)');
    
    if(empty($_POST['music_name'])){
        echo '曲名を入力してください';
    }else if(empty($_POST['artist_name'])){
        echo '歌手名を入力してください';
    }else if(empty($_POST['genre_id'])){
        echo 'ジャンルを選択してください';
    }else if($sql->execute([ $_POST['music_name'], $_POST['artist_name'], $_POST['genre_id'] ])){
        echo '楽曲を登録しました！';
    }else{
        echo '楽曲の追加に失敗しました・・・';
    }

?>

<?php require 'footer.php'; ?>