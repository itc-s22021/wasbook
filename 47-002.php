<?php
  $id = filter_input(INPUT_POST, 'id');
  $pwd = filter_input(INPUT_POST, 'pwd');
  $url = filter_input(INPUT_POST, 'url');
  // ログインはIDとパスワードが入力されていれば成功する
  if (! empty($id) && ! empty($pwd)) {
    // 指定したURLにリダイレクト
    header('Location: ' . $url);
    exit();
}
// 以下はログイン失敗の場合
?><body>
IDまたはパスワードが違います
<a href="47-001.php">再ログイン</a>
</body>
