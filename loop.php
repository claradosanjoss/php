<?php
//TRABALHANDO COM LOOP FOR< WHILE, DO {}WHILE

for($i = 0; $i <= 10 ; $i++ ){
    echo "<p> $i </p>";
}
echo "<hr>";
for($i = 10; $i > 0 ; $i-- ){
    echo "<p> $i </p>";
}
echo "<hr>";

//tabuada do 5

for($i = 0 ; $i<=10 ; $i++){
    echo "<p> $i x 5 = ".   $i * 5 .  "</p>";
}
echo "<hr>";

for($ex = 0 ; $ex <= 10 ; $ex++){
    echo"tabuada do ".$ex;
    for ($int = 0 ; $int <= 10; $int++){
        echo"<p> $int x $ex = " . $ex * $int . "</p>";
    }
    echo "<hr style='width=250px'>";
}

echo "<hr>";

$i = 0;

while($i<=5){
    echo "<p> $i </p>";
    $i++;
}

echo "<hr>";
$i = 5;

while($i >=0){
    echo "<p> $i </p>";
    $i--;
}
echo "<hr>";
$i = 0;
while($i <=10){
    echo "<p> $i x 5 = " . $i * 5  . "</p>";
    $i++;
}
echo "<hr>";
$i = 0;
do{
 echo "<p> $i</p>";
 $i++;
}while($i<=10);
?>