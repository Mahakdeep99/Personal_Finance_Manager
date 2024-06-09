<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $income = $_POST["income"];
    $housing = $_POST["housing"];
    $utilities = $_POST["utilities"];
    $groceries = $_POST["groceries"];
    $transportation = $_POST["transportation"];
    $healthcare = $_POST["healthcare"];

    $totalExpenses = $housing + $utilities + $groceries + $transportation + $healthcare;

    $cashFlow = $income - $totalExpenses;
echo("<br>Cashflow= ".$cashflow);
  
} else {
    echo "Invalid request.";
}
?>