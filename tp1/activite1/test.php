<?php
declare(strict_types=1);
 
require_once __DIR__ . '/fonction.php';
 
echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;
echo "12 x 8 = " . multiplier(12, 8) . PHP_EOL;
echo "12 / 8 = " . diviser(12, 8) . PHP_EOL;
try {
    echo diviser(10, 0);
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}
 
echo "7 est pair ? " . (estPair(7) ? "oui" : "non") . PHP_EOL;
echo "8 est pair ? " . (estPair(8) ? "oui" : "non") . PHP_EOL;
echo "-3 est positif ? " . (estPositif(-3) ? "oui" : "non") . PHP_EOL;
echo "Maximum(4, 9, 6) = " . maximum(4, 9, 6) . PHP_EOL;
echo "Maximum(4, 9, 6) avec max() = " . maximum2(4, 9, 6) . PHP_EOL;
foreach ([1, 2, 17, 21, 97] as $n) {
    echo "$n est premier ? " . (estPremier($n) ? "oui" : "non") . PHP_EOL;
}
 
echo "TTC de 100 HT (20 %) : " . calculerTTC(100) . PHP_EOL;
echo "TTC de 100 HT (10 %) : " . calculerTTC(100, 10) . PHP_EOL;
echo "100 avec 15 % de remise : " . calculerRemise(100, 15) . PHP_EOL;
echo "Facture : " . formater(calculerFacture(100, 10, 10, 20)) . PHP_EOL;
 
echo "Moyenne (12, 15, 9) = " . round(moyenne(12, 15, 9), 2) . PHP_EOL;
echo "Moyenne sans note = " . moyenne() . PHP_EOL;
echo "Aire du cercle (r=5) = " . aireCercle(5) . PHP_EOL;
echo "Périmètre du cercle (r=5) = " . perimetreCercle(5) . PHP_EOL;
echo "100 °C = " . celsiusVersFahrenheit(100) . " °F" . PHP_EOL;
echo "212 °F = " . fahrenheitVersCelsius(212) . " °C" . PHP_EOL;
echo "1000 MAD = " . convertirDevise(1000, 0.080) . " EUR" . PHP_EOL;
 
echo "2! = " . factorielle(2) . PHP_EOL;
try {
    factorielle(-1);
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}
echo "Fibonacci(6) : " . implode(", ", fibonacci(6)) . PHP_EOL;
echo "PGCD(48, 20) = " . pgcd(48, 20) . PHP_EOL;
echo "3^10 (boucle) = " . puissance(3, 10) . " | (récursive) = " . puissanceRecursive(3, 10) . PHP_EOL;