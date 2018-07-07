<?php
use kelvin\Normal;
use kelvin\Premium;

require "vendor/autoload.php";
$customer1 = new Normal('kelvin', 12, 'Normal', 'Nairobi');
$customer2 = new premium('Allan',15,'Premium','Nakuru');


echo '<h1>Book Store Customer Details<br></h1><table border="1">
<tr>
<td>Customer_name</td><td>Customer_id</td><td>Customer_type</td><td>Customer_location</td>
</tr>
<tr>
<td>'.$customer1->getName().'</td><td>'.$customer1->getId().'</td><td>'.$customer1->getType().'</td><td>'.$customer1->getLocation().'</td>
</tr>
<tr>
<td>'.$customer2->getName().'</td><td>'.$customer2->getId().'</td><td>'.$customer2->getType().'</td><td>'.$customer2->getLocation().'</td>
</tr>
</table>';

