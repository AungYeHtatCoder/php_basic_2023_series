<?php

// Set the number of rows for the pattern
$num_rows = 5;

// Loop through each row
for ($row = 1; $row <= $num_rows; $row++) {

    // Print the required number of asterisks for the current row
    for ($col = 1; $col <= (2 * $row) - 1; $col++) {
        echo "*";
    }

    // Start a new line for the next row
    echo "\n";
}