<?php require 'header.php'; ?>

<h1>曲を追加</h1>
<a href="index.php">メニューに戻る</a>
<hr>

<form action="toroku-output.php">
    曲名　　　:  <input type="text" name="mname"><br>
    歌手名　　:  <input type="text" name="aname"><br>
    ジャンル　:  
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
    <input type="submit" value="登録">
</form>

<?php require 'footer.php'; ?>