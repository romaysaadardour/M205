<?php
declare(strict_types=1);
function additionner(float $a,float $b):float
{
    return $a + $b;
}
function soustraire(float $a,float $b):float
{
    return $a - $b;
}
function multiplier(float $a,float $b):float
{
    return $a * $b;
}
function diviser (float $a,float $b):float
{
    if ($b==0){
        throw new InvalidArgumentException("Division par zéro impossible");
    }
    return $a/$b;
}
function estPair(int $n): bool
{
    return $n % 2 === 0;
}
function estPositif(float $n): bool
{
    return $n > 0;
}
function maximum(float $a, float $b, float $c): float
{
    $max = $a;
    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }
    return $max;
}
function maximum2(float $a, float $b, float $c): float
{
    return max($a, $b, $c);
}
 
function estPremier(int $n): bool
{
    if ($n < 2) {
        return false;
    }
    $limite = (int) floor(sqrt($n));
    for ($i = 2; $i <= $limite; $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}
function calculerTTC(float $ht, float $tva = 20.0): float
{
    return $ht * (1 + $tva / 100);
}function calculerRemise(float $prix, float $pourcentage): float
{
    return round($prix * (1 - $pourcentage / 100), 2);
}
function calculerFacture(float $prixUnitaire, int $quantite, float $remise = 0, float $tva = 20.0): float
{
    $totalHt = $prixUnitaire * $quantite;
    $apresRemise = calculerRemise($totalHt, $remise);   
    return calculerTTC($apresRemise, $tva);           
}
function formater(float $montant): string
{
    return number_format($montant, 2, ",", " ") . " MAD";
}
function moyenne(float ...$notes): float
{
    if (count($notes) === 0) {
        return 0.0;
    }
    return array_sum($notes) / count($notes);
}
function aireCercle(float $rayon): float
{
    return round(M_PI * $rayon ** 2, 2);
}
function perimetreCercle(float $rayon): float
{
    return round(2 * M_PI * $rayon, 2);
}
function celsiusVersFahrenheit(float $c): float
{
    return $c * 9 / 5 + 32;
}
function fahrenheitVersCelsius(float $f): float
{
    return ($f - 32) * 5 / 9;
}
function convertirDevise(float $montant, float $taux): float
{
    return $montant * $taux;
}
function factorielle(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException("La factorielle n'est pas définie pour un nombre négatif");
    }
    $resultat = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultat *= $i;
    }
    return $resultat;
}
function fibonacci(int $n): array
{
    $s = [];
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        $s[] = $a;
        [$a, $b] = [$b, $a + $b];
    }
    return $s;
}
 
function pgcd(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];   // algorithme d'Euclide
    }
    return $a;
}
function puissance(float $x, int $n): float
{
    $resultat = 1.0;
    for ($i = 0; $i < abs($n); $i++) {
        $resultat *= $x;
    }
    return $n < 0 ? 1 / $resultat : $resultat;
}
function puissanceRecursive(float $x, int $n): float
{
    if ($n < 0) {
        return 1 / puissanceRecursive($x, -$n);
    }
    if ($n === 0) {
        return 1.0;
    }
    return $x * puissanceRecursive($x, $n - 1);
}
