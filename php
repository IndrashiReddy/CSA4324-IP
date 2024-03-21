<?php
// Sample array of medicines (you would typically fetch this from a database)
$medicines = array(
    array("name" => "Aspirin", "quantity" => 100, "price" => 5.99),
    array("name" => "Paracetamol", "quantity" => 150, "price" => 3.49),
    array("name" => "Amoxicillin", "quantity" => 80, "price" => 9.99),
    array("name" => "Ibuprofen", "quantity" => 120, "price" => 6.49),
    array("name" => "Loratadine", "quantity" => 90, "price" => 7.99)
);

// Function to display medicines
function displayMedicines($medicines) {
    echo "<table class='table'>";
    echo "<tr><th>Name</th><th>Quantity</th><th>Price</th></tr>";
    foreach ($medicines as $medicine) {
        echo "<tr>";
        echo "<td>" . $medicine['name'] . "</td>";
        echo "<td>" . $medicine['quantity'] . "</td>";
        echo "<td>$" . $medicine['price'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Display medicines
displayMedicines($medicines);
?>
