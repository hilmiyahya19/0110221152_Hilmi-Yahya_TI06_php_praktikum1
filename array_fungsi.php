<?php
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
echo "<ol>";
foreach($ar_buah as $buah =>$v){
echo "<li> $buah - $v </li>";
}
echo "</ol>";
// fungsi  array sort adalah mengurutkan data array dalam urutan menaik
sort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach($ar_buah as $buah =>$k){
echo "<li> $buah - $k </li>";
}
echo "</ol>";
// fungsi  array arsort adalah mengurutkan data array dalam urutan menurun
arsort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach($ar_buah as $buah =>$k){
echo "<li> $buah - $k </li>";
}
echo "</ol>";
echo "<hr>";
?> 
<?php
// fungsi array pop berguna untuk menghapus nilai terakhir dalam sebuah data array 
$tims = ["erwin","heru","ali","zaki"];
array_pop($tims);
foreach ($tims as $person){
    echo $person . '<br/>';
}
echo '<hr>';
?>
<?php
// fungsi array push berguna untuk menambahkan nilai terakhir dalam sebuah data array 
$tims = ["erwin","heru","ali","zaki"];
array_push($tims, "wati");
foreach ($tims as $person){
    echo $person . '<br/>';
}
echo '<hr>';
?>
<?php
// fungsi array shift berguna untuk menghapus nilai awal dalam sebuah data array 
$tims = ["erwin","heru","ali","zaki"];
array_shift($tims);
foreach ($tims as $person){
    echo $person . '<br/>';
}
echo '<hr>';
?>
<?php
// fungsi array unshift berguna untuk menambahkan satu atau dua lebih nilai awal dalam sebuah data array 
$tims = ["erwin","heru","ali","zaki"];
array_unshift($tims, "joko","wati");
foreach ($tims as $person){
    echo $person . '<br/>';
}
echo '<hr>';
?>
