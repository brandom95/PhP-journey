<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

$products= [
    ["side" => "pizza","quantity" => 20,"slices" => true],
    ["side" => "wings","quantity" => 10,"coke" => false],
    ["side" => "vegetables","quantity" => 5,"slices" => false]
];



foreach($products as $product){
    echo $product["side"]."have ".$product['quantity'];
};
$number = array('juanita', 'maria', 'jose');

//print_r($number);

echo $number[0] . "<br>";
echo "<br>";  


// Associative Array Below

$names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz' );

//print_r($names);

echo $names['first_name'] . " " . $names['Last_Name'];
    
    
?>

</body>
</html>