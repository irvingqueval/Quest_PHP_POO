<?php
require 'Car.php';
require 'Bicycle.php';

$clio = new Car('red', 'electric', 5);
echo "Clio Actions:<br>";
echo "Start: " . $clio->start() . "<br>";
echo "Forward: " . $clio->forward() . "<br>";
echo "Brake: " . $clio->brake() . "<br>";
echo "Energy Level: " . $clio->getEnergyLevel() . "<br>";

?>
<br>
<?php

$mercedes = new Car('blue', 'electric', 5);
echo "Mercedes Actions:<br>";
echo "Start: " . $mercedes->start() . "<br>";
echo "Forward: " . $mercedes->forward() . "<br>";
echo "Brake: " . $mercedes->brake() . "<br>";
echo "Energy Level: " . $mercedes->getEnergyLevel() . "<br>";

?>
<br>
<?php

$bmx = new Bicycle('blue', 2);
echo "BMX Bicycle Actions:<br>";
echo "Forward: " . $bmx->forward() . "<br>";
echo "Brake: " . $bmx->brake() . "<br>";

?>
<br>
<?php

$vtt = new Bicycle('red', 2);
echo "VTT Bicycle Actions:<br>";
echo "Forward: " . $vtt->forward() . "<br>";
echo "Brake: " . $vtt->brake() . "<br>";

?>
<br>
<?php

$bmw = new Car('blue', 'electric', 5);

echo '<h1>Car</h1>';
echo '<table border="1">';
echo '<tr><th>Attribute</th><th>Value</th></tr>';
echo '<tr><td>Number of Wheels</td><td>' . $bmw->getNbWheels() . '</td></tr>';
echo '<tr><td>Current Speed</td><td>' . $bmw->getCurrentSpeed() . '</td></tr>';
echo '<tr><td>Color</td><td>' . $bmw->getColor() . '</td></tr>';
echo '<tr><td>Number of Seats</td><td>' . $bmw->getNbSeats() . '</td></tr>';
echo '<tr><td>Energy</td><td>' . $bmw->getEnergy() . '</td></tr>';
echo '<tr><td>Energy Level</td><td>' . $bmw->getEnergyLevel() . '</td></tr>';
echo '</table>';

?>
<br>
<?php

$rockRider = new Bicycle ('red', 2);

echo '<h1>Bicycle</h1>';
echo '<table border="1">';
echo '<tr><th>Attribute</th><th>Value</th></tr>';
echo '<tr><td>Number of Wheels</td><td>' . $rockRider->getNbWheels() . '</td></tr>';
echo '<tr><td>Current Speed</td><td>' . $rockRider->getCurrentSpeed() . '</td></tr>';
echo '<tr><td>Color</td><td>' . $rockRider->getColor() . '</td></tr>';
echo '<tr><td>Number of Seats</td><td>' . $rockRider->getNbSeats() . '</td></tr>';
echo '</table>';