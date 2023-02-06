<?php
/**
 * HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.
 */

// tution fee
$tution_fee = 25000;

// commission in percent
$tweenty_five = ($tution_fee * 25) / 100;
$tweenty = ($tution_fee * 20) / 100;
$fifteen = ($tution_fee * 15) / 100;

// calculation of commission
$commission = $tution_fee >= 20000 ? $tweenty_five : 
(($tution_fee >= 10000 && $tution_fee < 20000) ? $tweenty  : (($tution_fee < 10000 && $tution_fee >= 7000) ? $fifteen : "Invalid" ));

echo $commission;