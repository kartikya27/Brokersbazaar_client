<style>.razorpay-payment-button{display:none !important;}</style>
<?php

// Include Requests only if not already defined
if (class_exists('Requests') === false)
{
    require_once __DIR__.'/libs/Requests-1.8.0/library/Requests.php';
}

try
{
    Requests::register_autoloader();

    if (version_compare(Requests::VERSION, '1.6.0') === -1)
    {
        throw new Exception('Requests class found but did not match');
    }
}
catch (\Exception $e)
{
    throw new Exception('Requests class found but did not match');
}

spl_autoload_register(function ($class)
{
    // project-specific namespace prefix
    $prefix = 'Razorpay\Api';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0)
    {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    //
    // replace the namespace prefix with the base directory,
    // replace namespace separators with directory separators
    // in the relative class name, append with .php
    //
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file))
    {
        require $file;
    }
});



$totalamt=$formdata['total'];
 $totalamt=(int)$totalamt*100;
use Razorpay\Api\Api;

$keyId = $rozorpay_key['keyId'];
$keySecret = $rozorpay_key['secretKey'];

$api = new Api($keyId, $keySecret);

$order = $api->order->create(array(
    'receipt'         => rand(1111,99999).'TRF',
    'amount'          => $totalamt,
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
)
);
// $email = $user['email'];



?>

<form action="<?php echo base_url(); ?>Vendor/success" method="post">
<script src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $keyId; ?>" 
        data-amount="<?php echo 1000; ?>" 
        data-currency="INR" 
        data-order_id="<?php echo $order->id; ?>" 
        data-image="https://skywirebroadcast.com/new/img/logo/logo2.png"
        data-name= "BrokerBazaar"
        data-discription = "Broker Bazaar"
       
        data-prefille.name="<?php echo $email; ?>"
        data-prefill.email="<?php echo $email; ?>"
        
        data-theme.color="#993333"
        
>


    </script>
    <!--<input type="hidden" value="<?php echo $address; ?>" name="address">-->
    </form>
    
<script>

// document.querySelector('razorpay-payment-button').click();
$(document).ready(function(){
   
    document.querySelector('.razorpay-payment-button').style.dispay='none';
    // document.querySelector("img").src="https://skywirebroadcast.com/new/img/logo/logo2.png";
 $('form .razorpay-payment-button').submit();
});

</script>
    