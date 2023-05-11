<?php
 //Array/ Vetor/ Matriz/ lista
 /*
 existe dois tipo de localização de elementos de valoers
 no array, atraves de inddce(posiçao numérica)e
 associativo(posição por texto)
 */
 $nome = "emerson";
            //      0         1        2         3
  $nomes = array("Ricardo", "Luis", "Victor", "Carlos" );
echo "<ol>";
           echo "<li>" . $nomes[0] . "</li>";
           echo "<li>" . $nomes[1] . "</li>";
           echo "<li>" . $nomes[2] . "</li>";
           echo "<li>" . $nomes[3] . "</li>";
 echo "</ol>";
 $nomes[4] = "paulo";
 echo "<ol>";
           echo "<li>" . $nomes[0] . "</li>";
           echo "<li>" . $nomes[1] . "</li>";
           echo "<li>" . $nomes[2] . "</li>";
           echo "<li>" . $nomes[3] . "</li>";
           echo "<li>" . $nomes[4] . "</li>";
 echo "</ol>";

 echo "<hr>";

 echo "<p> saber quantos elementos tem array nomes:
 " . count($nomes) ."<p>";
 
 echo "<hr>";
 for($indice = 0 ; $indice <= count($nomes)-1; $indice++){
    echo"<p>" . $nomes[$indice]."</p>";
 }

echo "<hr>";
$indice = 0;
while( $indice <= count($nomes)- 1){
     echo "<p>". $nomes[$indice]."</p>";
     $indice++;
}
echo "<hr>";
foreach ($nomes as $key => $value) {
    echo "<p>" . $value . "</p>";
}
?>