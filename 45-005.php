<?php
  function ex($s) {
    echo htmlspecialchars($s, ENT_COMPAT, 'UTF-8');
  }
  session_start();
  $id = $_FILES['id'];
  $tmpfile = $_FILES["imgfile"]["tmp_name"];
  $tofile = $_FILES["imgfile"]["name"];
  if (! is_puloaded_file($tmpfile)) {
    die('ファイルがアップロードされていません。');
  } else if (! move_uploaded_file($tmpfile, "img/$tofile")) {
    die('ファイルをアップロードできません');
  }
  $imgurl = 'img/' .urlencode($tofile);
?><body>
ID:<?php ex($id); ?><br>以下の画像をアップロードしました。<br>
<a href="<?php ex($imgurl); ?>"><img src="<?php ex(imgurl); ?>"></a>
</body>
