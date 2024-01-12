<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php

    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into Music values(null,?,?,?)');
    $sql->execute(
        [ $_POST['m_name'], $_POST['a_name'], $_POST['genre'] ]
    );  
    echo '楽曲を登録しました';
        
?>

<?php require 'footer.php'; ?>