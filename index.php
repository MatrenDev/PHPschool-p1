<?php

//Tworzenie zmiennych z przypisaniem wartości różnego typu:
$variable = 'abc';
$variable2 = 5.4;
$variable3 = 5;

//wszystkie zmienne przyjmą wartość 6:
$value1 = $value2 = $value3 = 6;

//Przykład wyświetlania zmiennych.
echo $variable."<br>".$variable2."<br>".$variable3."<br>";

//Operatory

$a = 10;
$b = 5;

echo $a - $b."<br>";
echo $a + $b."<br>";
echo $a % $b."<br>"; //zwraca resztę z dzielenia. 10 : 5 = 2, r = 0.
echo ($a+=2)."<br>"; //do zmiennej a dodamy 2.
echo ($b-=2)."<br>"; //od zmiennej b odejmiemy 2.


echo $b++."<br>"; //zwiększenie wartości zmiennej b o 1 - inkrementacja
echo $b--."<br>"; //zmniejszenie wartości zmiennej b o 1 - dekrementacja
echo ++$a."<br>"; //zwiększenie zmiennej a o 1 - preinkrementacja
echo --$a."<br>"; //zmniejszenie wartości a o 1 - postinkrementacja

/*Różnica polega na tym, że w przypadku pre i post, najpierw wykona się operacja
zmniejszenia/zwiększenia, a następnie dopiero wartość zostanie zwrócona. 
W przypadku inkrementacji i dekrementacji najpierw zwraca się wartość, a później ją zwiększa.
*/

echo "Wartość b ".$b."<br>";
echo "Wartość b w trakcie dekrementacji ".$b--."<br>";
echo "Wartość po dekrementacji ".$b."<br>";
echo "Jak widać wszystko wykonuje się tak jak napisano, najpierw wyświetla zmienną b, a później ją zmniejsza."."<br><br>";

echo "Wartość a ".$a."<br>";
echo "Wartość a w trakcie postdekrementacji ".--$a."<br>";
echo "Wartość po postdekrementacji ".$a."<br>";
echo "Jak widać wszystko wykonuje się w podanej kolejności, najpierw występuje zmniejszenie, a potem wyświetlenie. Więc widzimy od razu efekt."."<br>";



?>
