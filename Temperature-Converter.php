<?php  

// Define a constant for the conversion factor (Celsius to Fahrenheit)  
define("CONVERSION_FACTOR", 9/5);  

// Function to convert Celsius to Fahrenheit  
function celsiusToFahrenheit(float $celsius): float {  
  return ($celsius * CONVERSION_FACTOR) + 32;  
}  

// Function to convert Fahrenheit to Celsius  
function fahrenheitToCelsius(float $fahrenheit): float {  
  return ($fahrenheit - 32) * (5/9);  
}  

// Prompt the user for input  
echo "Enter the temperature value: ";  
$temperature = readline();  

echo "Enter the temperature unit (C for Celsius, F for Fahrenheit): ";  
$unit = strtoupper(readline()); // Convert input to uppercase for case-insensitivity  

// Use a switch statement to perform the conversion  
switch ($unit) {  
  case 'C':  
    $fahrenheit = celsiusToFahrenheit((float)$temperature);  
    echo "$temperature°C is equal to " . round($fahrenheit, 2) . "°F\n";  
    break;  
  case 'F':  
    $celsius = fahrenheitToCelsius((float)$temperature);  
    echo "$temperature°F is equal to " . round($celsius, 2) . "°C\n";  
    break;  
  default:  
    echo "Invalid unit. Please enter C or F.\n";  
}  

?>  