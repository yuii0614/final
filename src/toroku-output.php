<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into Music values (null, ?, ?, ?)');
    
    if(empty($_POST['mname'])){
        echo '曲名を入力してください';
    }else if(empty($_POST['aname'])){
        echo '歌手名を入力してください';
    }else if(empty($_POST['genre_id'])){
        echo 'ジャンルを選択してください';
    }else if($sql->execute([ $_POST['mname'], $_POST['aname'], $_POST['genre'] ])){
        echo '楽曲を登録しました！';
    }else{
        echo '楽曲の追加に失敗しました・・・';
    }

?>

<?php require 'footer.php'; ?>