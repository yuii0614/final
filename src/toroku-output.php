<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into Music values(null, ?, ?, ?)');
    
    if($sql->execute([ $_POST['mname'], $_POST['aname'], $_POST['genre'] ])){
        echo '楽曲を登録しました！';
    }else{
        echo '楽曲の追加に失敗しました・・・';
    }

?>

<?php require 'footer.php'; ?>