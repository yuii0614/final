<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<h1>曲を更新</h1>
<a href="index.php">メニューに戻る</a>
<hr>
<br>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('update Music set music_name=?, artist_name=?, genre_id=? where id=?');

    if (empty($_POST['music_name'])) {
        echo '曲名を入力してください。';
        
    }else if(empty($_POST['music_name'])) {
        echo '歌手名を入力してください。';

    }else if( $sql->execute([htmlspecialchars($_POST['music_name']), $_POST['artist_name'], $_POST['genre_id'], $_POST['music_id']]) ){
        echo '更新に成功しました！';

    }else{
        echo '更新に失敗しました・・・';
    }
?>

<hr>
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