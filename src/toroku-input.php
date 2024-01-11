<?php require 'header.php'; ?>

<h1>曲を追加</h1>
<a href="index.php">メニューに戻る</a>
<hr>

<?php
    $m_name=$a_name=$genre='';

    if( isset($_SESSION['Music']) ){
        $m_name=$_SESSION['Music']['music_name'];
        $a_name=$_SESSION['Music']['artist_nme'];
        $genre=$_SESSION['Music']['genre_id'];
    }

    echo '曲名　　　：　<input type="text" value="', $m_name, '">';
    echo '歌手名　　：　<input type="text" value="', $a_name, '">';
    echo 'ジャンル　：　
         <select name="genre_id" id="genre_id" required>
            <option value="" disabled selected>ジャンルを選択してください</option>
            <option value="1">POP</option>
            <option value="2">J-POP</option>
            <option value="3">K-POP</option>
            <option value="4">R&B</option>
            <option value="5">Jazz</option>
            <option value="6">Classical</option>
            <option value="7">Singer/Songwriter</option>
            <option value="8">Rock</option>
            <option value="9">Hip-Hop</option>
         </select>';

    echo '<form action="toroku-output.php">';
    echo '<input type="submit">登録';
    echo '</form>';
?>