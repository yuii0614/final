<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS );

    if( empty($sql->fetchALL()) ){
        $sql=$pdo->prepare('insert into customer values(null,?,?,?)');
        $sql->execute([
            $_POST['m_name'], $_POST['a_name'], $_POST['genre']
        ]);
        echo '楽曲を登録しました。';
    }else{
        echo '';
    }
?>

<?php require 'footer.php'; ?>