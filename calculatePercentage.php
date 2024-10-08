<?php
$marks = [91, 76, 87, 98, 84];

$totalMarks = 0;
for($i=0; $i<5; $i++){
    $totalMarks = $totalMarks + $marks[$i];
}   

$totalPossibleMarks = 500;

$percentage = ($totalMarks / $totalPossibleMarks) * 100;

if ($percentage >= 90 && $percentage <=100) {
    $grade = 'A';
} else if ($percentage >= 80 && $percentage < 90) {
    $grade = 'B';
} else if ($percentage >= 60 && $percentage < 80) {
    $grade = 'C'; 
} else if ($percentage >= 33 && $percentage < 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}
echo "Name of the Student - Vivek<br>";
echo "Total Marks in 5 subjects - $totalMarks";
echo "<br>";
echo "Percentage - $percentage%\n";
echo "<br>";
echo "Grade - $grade\n";
echo "<br>";
echo "You have scored ".$grade." Grade.<br>";
?>
