<?php
require __DIR__ . '/Models/Movie.php';

$memento = new Movie("Memento", "Leonard è affetto da amnesia a breve termine che non gli consente di trattenere i ricordi per lungo tempo. Quando deve cercare l'uomo che ha violentato e ucciso la moglie dovrà fare uso di ogni mezzo per arrivare alla verità.", 4.2, "Guy Pearce");

var_dump($memento);
echo $memento->getMovie();

$thePrestige = new Movie("The Prestige", "Nella Londra dell'età vittoriana, due maghi-illusionisti, Robert Angier e Alfred Borden, un tempo amici e colleghi, si sfidano ogni sera a distanza mettendo in scena spettacoli al limite del possibile. La loro acerimma rivalità si tramuta in una vera e propria ossessione, che li spinge a mettere in gioco la propria vita con numeri strabilianti per provare a se stessi e al mondo intero la rispettiva superiorità...", 4.6, "Christian Bale");

var_dump($thePrestige);
echo $thePrestige->getMovie();
