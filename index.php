<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブックマーク</title>
</head>
<body>
<header>

</header> 

<main>
    <form method="POST" action="insert.php">
        <fieldset class="input_area">
            <legend>フリーアンケート</legend>
            <label>本の名前：<input type="text" name="name"></label>
            <label>URL：<input type="text" name="url"></label>
            <label>コメント：<textArea name="comment" rows="4" cols="40"></textArea></label>
            <input type="submit" value="送信">
        </fieldset>
    </form>
</main>


</body>
</html>