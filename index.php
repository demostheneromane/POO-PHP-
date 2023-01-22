<?php 

require_once('./MyClass/Paypal/Payment.php');
require_once('./MyClass/Stripe/Payment.php');
require_once('./MyClass/User/User.php');

use MyClass\Paypal\Payment as PaypalPayment;
use MyClass\Stripe\Payment; 

$paymentPaypal  = new PaypalPayment();
$paymentStripe = new Payment(); 

var_dump($paymentStripe);

?>