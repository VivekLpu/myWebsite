<?php 

$cars = ["Maruti","Audi","BMW"];
$reverse = array_reverse($cars);

print_r($reverse);
echo"<br>";
echo "Reversing array without function: ";
for($i=sizeof($cars)-1; $i>=0; $i--){
    echo "<br>".$cars[$i];
}


$ages = [23,45,29,34,50,19,67,45,23,34];

$uniqueAges = array_unique($ages);
echo "<br>Unique Array: ";
print_r($uniqueAges);
echo "<br>";

sort($uniqueAges );
echo "Sorted Array in ascending order: ";
print_r($uniqueAges);
echo "<br>";

rsort($uniqueAges );
echo "Sorted Array in descending order: ";
print_r($uniqueAges);
echo "<br>";

$totalElements = count($uniqueAges);
echo "Length of the unique array: ";
print_r($totalElements);

echo "<pre>";
echo "printing array in pre tag: <br>";
print_r($uniqueAges);
echo "</pre>";  

//indexed array
$Numbers = [10,21,32,43,54,65];

//Filter the array to get even numbers
$evenNumbers = array_filter($Numbers,function($num){
    return $num % 2 == 0;
});

echo "Even Numbers: ";
print_r($evenNumbers);
echo "<br>";
echo "Removing last element by pop function: ";
array_pop($Numbers);
print_r($Numbers);
echo "<br>";

echo "Pushing some elements in the array by push function";
array_push($Numbers, 60,41,34);
print_r($Numbers);
echo"<br>";

echo "Shifting an element from beginning by shift function: ";
array_shift($Numbers);
print_r($Numbers);
echo"<br>";

//print by foreach loop
$courses = array("PHP","Laravel","Node js");

foreach($courses as $course){
    echo $course."<br>";
}

//to remove an element an existing item from array => array_splice() function
$cars = array("Volvo","BMW","Toyota");
array_splice($cars,1,1);;
var_dump($cars);
echo "<br>";

$products = array("Laptop" => 1200, "Tablet" => 600, "Smartphone" => 900, "Desktop" => 1500);
//sorting this array in ascending order by Value
asort($products); //it will sort by value in ascending order
arsort($products); //it will sort by value in descending order
ksort($products); //it will sort by keys in ascending order
krsort($products); //it will sort by keys in descending order

foreach ($products as $product => $price) {
    echo "$product: $price\n";
}
echo "<br>";

//array_chunk() function splits an array in chunks
//array_count_values() function counts all the values of an array

$a = array("Block 33","Block 34","Block 34","Block 36","Block 36");
$count = array_count_values($a);
print_r($count);
echo "<br>";
//Combine the array and print the common elements from the both array
$array1 = [1,3,5,7,9];
$array2 = [2,7,11,15];
$mergedArray = array_merge($array1,$array2);
print_r($mergedArray);
echo "<br>";

//return the common elements in both
$intersect = array_intersect($array1,$array2);
print_r($intersect);
echo "<br>";

//difference
$difference = array_diff($array1,$array2);  //remove all those elements from array1 which is also present in array2;
print_r($difference);

//array search
$colors = array("a" => "red", )


?>