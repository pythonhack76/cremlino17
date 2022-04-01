<?php 

//valori a parametro zero 
 $titolo = "";
 $autore = ['admin','coautore','esterno','unicum'];
 $colori = ['bianco'=>'#fff'];


 function creaTitolo() {

    print("stampo un contenuto");

 }

 function creaDiv() {
     $elemento = "<div id='elemento'><p>Elemento creato con creaDiv</p></div>";
     print($elemento);

 }

 function mostraAutore() {
     global $autore; 
     foreach($autore as $autori) {
         echo $autori . "</br>";
     }
 }



?>