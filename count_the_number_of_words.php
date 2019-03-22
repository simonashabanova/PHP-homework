<?php 

$size = filesize('procitaj_txt.txt');
echo "$size<br/>";
$fh = fopen('procitaj_txt.txt', 'r'); 
$data = fread($fh, $size);
echo $data;
fclose($fh);

echo "<hr/>";

$file = "procitaj_txt.txt";

$str = file_get_contents($file);
echo $str ."<br>";

$array = file($file);

echo "Counted " . count($array) ." lines. <br>";

$numWords = str_word_count($str);
echo "Counted " . $numWords . " words.<br>";

echo "<hr/>";


$names=file('procitaj_txt.txt');

echo count($names).'<br>';
foreach($names as $name)
{
   echo $name.'<br>';
}

echo "<hr/>";

$niza=file('procitaj_txt.txt');
$pomali = 0; 
$pomegju = 0;
$pogolemi = 0;


for($i = 0; $i < count($niza); $i++) {
    if(strlen($niza[$i]) <= 4) {
        $pomali++;
    }
    if(strlen($niza[$i]) > 4 && strlen($niza[$i]) < 7) {
        $pomegju++;
    }
    if(strlen($niza[$i]) >= 7) {
        $pogolemi++;
    }
    
}
echo "<p>Pomali od 4: $pomali  </p>";
echo "<p>Pomegju 4 i 7: $pomegju </p>";
echo "<p>Pogolemi od 7: $pogolemi </p>";

?>






