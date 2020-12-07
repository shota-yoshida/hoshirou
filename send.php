<?php
// メール送信
$to = "yoshida.shota@growfit.co.jp";
$subject = "HPからのお問合せ";
$message = "
お名前: {$_POST['name']}
電話番号: {$_POST['tel']}
メールアドレス: {$_POST['email']}
内容:
{$_POST['note']}
";
$headers = "From: noreply@hoshirou.com";
mail($to, $subject, $message, $headers);
?>

<?php $page = 'CONTACT'; ?>
<!doctype html>
<html lang="ja">
<?php include('./common/head.php'); ?>
<body>
    <?php include('./common/nav.php'); ?>

    <div class="container mt-100" style="min-height: calc(100vh - 200px);">
      <main>
        <p class="f-12 fls-015rem mt-10 line-h-25">
            この度はお問合せいただき、ありがとうございます。<br />
            ご回答までに数日必要な場合がございます。ご了承ください。
        </p>
      </main>
    </div>

    <?php include('./common/footer.php'); ?>
    <?php include('./common/javascript.php'); ?>

  </body>
</html>
