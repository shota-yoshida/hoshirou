<?php
// メール送信
mb_internal_encoding("utf-8");

//宛先、Fromを設定
$to = "info@hoshirou.com";
$from = "noreply@hoshirou.com";

//headerを設定
$charset = "UTF-8";
$headers['MIME-Version'] 	= "1.0";
$headers['Content-Type'] 	= "text/plain; charset=".$charset;
$headers['Content-Transfer-Encoding'] 	= "8bit";
$headers['From'] 		= $from;

//headerを編集
foreach ($headers as $key => $val) {
	$arrheader[] = $key . ': ' . $val;
}
$strHeader = implode("\n", $arrheader);

//件名を設定（JISに変換したあと、base64エンコードをしてiso-2022-jpを指定する）
$subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding("HPからのお問い合わせ","JIS","UTF-8"))."?=";

//本文を設定
$body = "
お名前: {$_POST['name']}
電話番号: {$_POST['tel']}
メールアドレス: {$_POST['email']}
内容:
{$_POST['note']}
";

//送ります！
mail(
	$to,
	$subject,
	$body,
	$strHeader
);

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
