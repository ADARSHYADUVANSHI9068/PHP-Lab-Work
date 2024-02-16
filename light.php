<?php

// Simulate a traffic light
$trafficLightColor = "Green"; // You can change this to "Yellow" or "Red" to test different states

// Traffic light logic with if-else statements
if ($trafficLightColor === "Green") {
    echo "Green - Go";
} elseif ($trafficLightColor === "Yellow") {
    echo "Yellow - Slow down";
} elseif ($trafficLightColor === "Red") {
    echo "Red - Stop";
} else {
    echo "Invalid traffic light color";
}

?>