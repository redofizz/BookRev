<section id="sidebar">
  <a href="registProduct.php">レビュー本を登録する</a>
  <a href="profEdit.php">プロフィール編集</a>
  <a href="passEdit.php">パスワード変更</a>
  <?php
  if($_SESSION['user_id'] == 22){

  }else{?>
    <a href="withdraw.php">退会</a>
  <?php
  }
  ?>
</section>