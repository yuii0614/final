<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>

<h1>曲を削除</h1>
<a href="index.php">メニューに戻る</a>
<hr>
<br>

<table>
    <tr><th>楽曲ID</th><th>曲名</th><th>歌手名</th><th>ジャンル</th><th></th></tr>

<?php
    $pdo=new PDO($connect, USER, PASS );
    foreach( $pdo->query('select * from Music') as $row ){
        echo '<form action="delete-output.php">';
        echo '<tr>';
        echo '<td>', $row['music_id'], '</td>';
        echo '<td>', $row['music_name'], '</td>';
        echo '<td>', $row['artist_name'], '</td>';
        echo '<td>', $row['genre_id'], '</td>';
        echo '<td>';
        echo '<input type="submit" id="', $row['music_id'], '" value="更新">';
        echo '</td>';
        echo '</tr>';
        echo "\n";
        echo '</form>';
    }
?>

</table>

<?php require 'footer.php'; ?>