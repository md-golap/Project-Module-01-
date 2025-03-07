<?php  

// Function to calculate the electricity bill  
function calculateElectricityBill($units) {  
  $totalBill = 0;  

  // Slab 1: 1-100 units  
  if ($units <= 100) {  
    $totalBill = $units * 5; // $5 per unit  
  }   
  // Slab 2: 101-200 units  
  elseif ($units <= 200) {  
    $totalBill = (100 * 5) + (($units - 100) * 10); // First 100 units at $5, remaining at $10  
  }   
  // Slab 3: 201 units and above  
  else {  
    $totalBill = (100 * 5) + (100 * 10) + (($units - 200) * 15); // First 100 at $5, next 100 at $10, remaining at $15  
  }  

  return $totalBill;  
}  

// Get the units consumed (you might get this from a form submission)  
$unitsConsumed = 250; // Example: User consumed 250 units  

// Calculate the bill  
$billAmount = calculateElectricityBill($unitsConsumed);  

// Display the result  
echo "Units Consumed: " . $unitsConsumed . "\n";  
echo "Total Electricity Bill: $" . $billAmount . "\n";  

?>  