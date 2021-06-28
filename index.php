<?php
if (isset($_POST['btn_submit'])) {
    if (empty($_POST['content'])) {
        echo "Hãy nhập thông tin chi tiết bài viết!";
    } else {
        $content = $_POST['content'];
        echo $content;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text area form</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Thêm bài viết</h1>
        <textarea name="content" cols="30" rows="10"></textarea><br>
        <input type="submit" name="btn_submit" value="Đăng bài viết">
    </form>
</body>

</html>