<?php
// Hardcoded grade value
$grade = 95;

echo "Student Grade: $grade<br>";

if ($grade >= 90) {
    echo "With Honors<br>";
} elseif ($grade >= 75) {
    echo "Passed<br>";
} else {
    echo "Failed<br>";
}
?>
