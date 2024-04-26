<?php

function numberToWords($number) {
    // Arrays for converting numbers to words
    $ones = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
    $teens = array('ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');
    $tens = array('', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety');
    
    // Convert the number to words
    $words = '';
    if ($number < 10) {
        $words = $ones[$number];
    } elseif ($number < 20) {
        $words = $teens[$number - 10];
    } elseif ($number < 100) {
        $words = $tens[(int)($number / 10)] . '-' . $ones[$number % 10];
    } elseif ($number < 1000) {
        $words = $ones[(int)($number / 100)] . ' hundred';
        $remainder = $number % 100;
        if ($remainder != 0) {
            $words .= ' and ' . numberToWords($remainder);
        }
    } elseif ($number < 10000) {
        $words = numberToWords((int)($number / 1000)) . ' thousand';
        $remainder = $number % 1000;
        if ($remainder != 0) {
            $words .= $remainder < 100 ? ' and ' : ', ';
            $words .= numberToWords($remainder);
        }
    }
    
    return $words;
}

// Get the command line argument
if ($argc != 2 || !is_numeric($argv[1]) || $argv[1] < 0 || $argv[1] >= 10000) {
    echo "Error: Please provide a single integer argument between 0 and 9999.\n";
    exit(1);
}

$number = intval($argv[1]);

// Convert the number to words
$result = numberToWords($number);

echo "$result\n";
?>
