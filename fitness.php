<?php
// Function to determine fitness level based on the number of steps
function determineFitnessLevel($steps) {
    if ($steps < 5000) {
        return 'Beginner';
    } elseif ($steps >= 5000 && $steps <= 10000) {
        return 'Intermediate';
    } else {
        return 'Advanced';
    }
}

$number_of_steps=7500;
$fitness_level=determineFitnesslevel($number_of_steps);
echo $fitness_level;
