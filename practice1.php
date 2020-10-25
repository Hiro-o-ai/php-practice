<!-- 道場編 -->
<?php
echo "Hello, PHP";
echo "<br>";
echo "10 + 7";
?>

<?php
$name = 'Tom';
echo '変数$nameの値: '.$name;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo "My name is ".$name;
?>
<?php
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$output =  $price + $price * $taxRate;
echo "税込価格は".$output."円です"
?>

paiza無料口座
<?php
// Here your code !
echo "hello world";
?>
<?php
// Here your code !
echo "paiza php講座";

?>
<?php
// Here your code !
echo "勇者はレベルアップした";

?>

<?php
echo "paizaでプログラミングをマスター！";
?>
<?php
// echo "1行目：勇者は村を出て荒野を歩いていると、";
echo "2行目：魔物があらわれた。";
?>
<?php
echo "1行目：フォントには、セリフ体というものと";
// echo "2行目：サンセリフ体というものがあります。";
echo "3行目：例えば、上の図でいいますと、上の";
echo "4行目：フォント（MS明朝）がセリフ体、";
// echo "5行目：下のフォント（MSゴシック）がサンセリフ体";
// echo "6行目：ということになります。セリフ体の場合は、";
// echo "7行目：各文字の線の先にはみ出した飾り部分が";
echo "8行目：あるのに対し、サンセリフ体はそれがありません。";
?>
<?php
echo "スライムに12のダメージを与えた。";

?>
<b>クリティカルヒット！</b>
<?php
echo '<b>私は霧島京子です！</b>';
?>
<?php
$text1 = "勇者は";
$text2 = "レベルアップした！！";
// $text1と$text2を結合して出力するプログラムを書いてください。
echo $text1.$text2;
?>
<?php
$text1 = "魔物が";
$text2 = "あらわれた！！";
echo $text1.$text2;
?>
<?php
$name ="霧島京子";
echo "私は".$name."です。";  //この行に文字列を足す
?>
<?php
$damage = 12;
echo "スライムの攻撃。".$damage."のダメージを受けた！";
?>
<?php
// Here your code !
$damege = rand(50,99);
echo "スライムに".$damege."のダメージを与えた。";
?>
<?php
// 1234 かける 5678 割る 2 を計算して出力してみましょう。
echo 1234 * 5678 / 2
?>
<?php
$x = 30;
// ここに単項演算子を書きましょう
$x--;
echo $x;
?>
<?php
$x = 13;
$y = 21;
// 以下に $x と $y のかけ算結果を出力してください
echo $x * $y;
?>
<?php
$x = 50; // この行は触らない
$y = 23; // この行は触らない
$x++;
$y--;
echo "xの値は".$x."です
"; // この行は触らない
echo "yの値は".$y."です
"; // この行は触らない
echo $x * $y;
?>
<?php
$money = 13300;
$person = 7;
echo "賞金は".$money."円です
";
echo "賞金を分け合う人数は".$person."人です
";
// この下に計算式を書いてください。
$a = $money / $person;
echo "賞金を分け合うと一人当たり".$a."円になります。";
?>
