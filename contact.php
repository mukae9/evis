

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ROCK/JOINT事務局への質問が完了しました</title>
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77189325-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

  <header>
  <a href="index.php"><img src="images/rockhead.png"  alt=”バンドメンバー募集中の方へ”  width="30%"  class="imgtop-left"></a>
  <h1 id="catchcopy">バンドメンバーを本気で探すならメンバー募集交流会ROCK/JOINTへ！</h1>
  </header>
  <div id="body">
<div id="page">

   <?php
//セキュリティ対策
$name=$_POST['name'];
$mail=$_POST['mail'];
$question=$_POST['question'];
$kaizyou=$_POST['kaizyou'];
$kubun=$_POST['kubun'];
$pp=$_POST['pp'];
$shaname=$_POST['shaname'];
$fee=$_POST['fee'];
$known=$_POST['known'];


$name=htmlspecialchars($name);
$mail=htmlspecialchars($mail);
$question=htmlspecialchars($question);
$kaizyou=htmlspecialchars($kaizyou);
$kubun=htmlspecialchars($kubun);
$pp=htmlspecialchars($pp);
$shaname=htmlspecialchars($shaname);
$fee=htmlspecialchars($fee);
$known=htmlspecialchars($known);


 
 if (strstr($mail, 'href')||strstr($question, 'href')||strstr($question, 'http')) {
  echo "URLに「/shop/item」が含まれています。";
 } else {


 echo "<br>";

if($name==""||$mail==""||$kubun=="")

{
  print "必要事項が入力されていないか、正確な処理が出来ませんでした、再度お申込み下さい。";
  print"<br>";
   print"<br>";
    print"<a href=\"osaka.php\">参加申込画面へ戻る<a>";
}
else
{
try
{


?>

    <?php


$honbun='';
$honbun.=$shaname;
$honbun.="\n";
$honbun.=$name."様\n";
$honbun.="\n";
$honbun.="Studio EVISへお問い合わせ頂き誠にありがとうございます。\n";
$honbun.="３営業日以内を基本にご回答させて頂きますので、少々お待ちください。\n";
$honbun.="\n";
$honbun.="\n";
$honbun.="Studio EVIS\n";
$honbun.="\n";
$honbun.="\n";
$honbun.="＊＊＊＊＊＊＊＊＊＊＊＊";
$honbun.="\n";
$honbun.="以下お問い合わせ内容です。\n";
$honbun.="\n";
$honbun.="社名/屋号\n";
$honbun.=$shaname;
$honbun.="\n";
$honbun.="担当者様\n";
$honbun.=$name;
$honbun.="\n";
$honbun.="メールアドレス\n";
$honbun.=$mail;
$honbun.="\n";
$honbun.="電話番号\n";
$honbun.=$pp;
$honbun.="\n";
$honbun.="ご予算目安\n";
$honbun.=$fee;
$honbun.="\n";
$honbun.="お問い合わせ詳細\n";
$honbun.=$youbou;
$honbun.="\n";


$title='StudioEVISへのお問い合わせが完了しました';
$header ='From: info@studio-evis.net';
$honbun=  html_entity_decode($honbun,ENT_QUOTES,'UTF-8');
mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_send_mail($mail, $title, $honbun,$header);

$title='StuioEVIS お問い合わせの件';
$header ='From:'.$mail;
$honbun=  html_entity_decode($honbun,ENT_QUOTES,'UTF-8');


$honbun.="上記のアドレスからのご質問です。\n";
mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_send_mail('evis.movie@gmail.com,rockjointstaff@gmail.com', $title, $honbun,$header);

}
catch (Exception $e)
{
    print'ただいま障害が発生しております。後ほど再度お試しください';
    exist();
}
} }
 
 ?>
</div>
</div>
</body>

</html>

