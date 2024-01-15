<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>


<h1>曲を更新</h1>
<a href="index.php">メニューに戻る</a>
<hr>
<br>

<div class="th0">楽曲ID</div>
<div class="th1">曲名</div>
<div class="th1">歌手名</div>
<div class="th1">ジャンル</div>

<?php
    $pdo=new PDO($connect, USER, PASS);

    foreach($pdo->query('select * from Music') as $row){

        echo '<form action="kosin-output.php" method="post">';
        echo '<input type="hidden" name="music_id" value="', $row['music_id'], '">';
        echo '<div class="td0">', $row['music_id'], '</div>';
        echo '<div class="td1">';
        echo '<input type="text" name="music_name" value="', $row['music_name'], '">';
        echo '</div>';
        echo '<div class="td1">';
        echo '<input type="text" name="artist_name" value="', $row['artist_name'], '">';
        echo '</div>';
        echo '<div class="td1">';
        echo '<input type="text" name="genre_id" value="', $row['genre_id'], '">';
        echo '</div>';

        echo '<div class="td2">';
        echo '<input type="submit" value="更新"></div>';
        echo '</form>';
        echo "\n";
    }

?>

<?php require 'footer.php'; ?>