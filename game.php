<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful Number Table</title>
</head>
<body>

<!-- Form to input the number of columns -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="columns">Number of Columns:</label>
    <input type="number" name="columns">
    <input type="submit" value="Generate Table"><br>
</form>

<?php
// Function to generate a colorful number table with fixed rows and dynamic columns
$cols=$_POST["columns"];
    echo "<table border='1'>";

    for ($i = 1; $i <= 10; $i++) {//rows
        echo "<tr height='50px'>";
        for ($j = 1; $j <= $cols; $j++) {//columns
            // Generate random background color for each cell
            //$color = sprintf("#%06X", mt_rand(0, 0xFFFFFF));
            echo "<td width='50px'>" . 
            ($i * $j) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

?>
</body>
</html>