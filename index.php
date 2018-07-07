<?php
use kelvin\Normal;

require "vendor/autoload.php";
$customer1 = new Normal('kelvin', 12, 'normal', 'nairobi');
echo $customer1->getType();
echo '<table>
<tr>
<td>Customer_name</td><td>Customer_id</td><td>Customer_type</td><td>Customer_location</td>
<td>'.$customer1->getName().'</td><td>'.$customer1->getId().'</td><td>'.Customer_type.'</td><td>'.Customer_location.'gg</td>
</tr>
</table>';
