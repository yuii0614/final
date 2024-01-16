<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>

<h1>曲を削除</h1>
<a href="index.php">メニューに戻る</a>
<hr>
<br>

<?php
    $pdo=new PDO($connect, USER, PASS );
    $sql=$pdo->prepare('delete from Music where music_id=?');

    if( $sql->execute([$_GET['id']]) ){
        echo '楽曲を削除しました！';
    }else{
        echo '削除に失敗しました・・・';
    }
?>

<br>
<br>

<table>
<tr><th>楽曲ID</th><th>曲名</th><th>歌手名</th><th>ジャンル</th></tr>

<?php
    foreach ($pdo->query('select * from Music') as $row) {
        echo '<tr>';
        echo '<td>', $row['music_id'], '</td>';
        echo '<td>', $row['music_name'], '</td>';
        echo '<td>', $row['artist_name'], '</td>';
        echo '<td>', $row['genre_id'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?>

</table>

<?php require 'footer.php'; ?>