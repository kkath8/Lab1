<?php
// Hardcoded grade value
$grade = 73;

echo "
<style>
    body {
        font-family: Verdana, Arial, sans-serif;
        text-align: center;
        margin-top: 100px;
    }
    h3 {
        font-size: 28px;
        color: #333333;
    }
    h2 {
        font-size: 32px;
    }
</style>
";

echo "<h3>Student Grade: $grade</h3>";

if ($grade >= 90) {
    echo "<h2 style='color: green;'>With Honors</h2>";
} elseif ($grade >= 75) {
    echo "<h2 style='color: blue;'>Passed</h2>";
} else {
    echo "<h2 style='color: red;'>Failed</h2>";
}
?>
