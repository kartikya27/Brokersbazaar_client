<?php
date_default_timezone_set('Asia/Kolkata');
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




use Razorpay\Api\Api;

$keyId = $rozorpay_key['keyId'];
$keySecret = $rozorpay_key['secretKey'];

$api = new Api($keyId, $keySecret);

    $razorpay_payment_id = $response['razorpay_payment_id'];
    $razorpay_order_id = $response['razorpay_order_id'];
    $razorpay_signature = $response['razorpay_signature'];

    $payment = $api->payment->fetch($razorpay_payment_id);
    
//echo "<pre>";
//print_r($payment);
//print_r ($response['address']);
//die;


if($payment['status'] == 'captured'){
     
     $paymentLasser = [
         
         'id'=>0,
         'amount' => $payment['amount']/100,
         'orderID' => $payment['order_id'],
          'email' => $payment['email'],
        //  'contact' => $payment['contact'],
        //  'address' => $response['address'],
          'date' => date('Y-m-d'),
         'order_time'=>date('h:i:s'),
         
     ];
    //  insertPaymentLasser2($paymentLasser);
     
 if($payment['status'] == 'captured'){
     
     $paymentLasser = [
         
         'payment_id' => $payment['id'],
         'amount' => $payment['amount']/100,
         'status' => $payment['status'],
        //  'bank_name' => $payment['bank'],
        //  'reponse_msg' => $payment['description'],
        //  'signature_hash' => $razorpay_signature,
         'order_id' => $payment['order_id'],
          'email' => $payment['email'],
         'contact' => $payment['contact'],
        //  'address' => $response['address']
         
         
     ];
     insertPaymentLasser($paymentLasser);
     
     
     
     /*if(isset($payment['order_id'])){
  $orderId = $payment['order_id'];

  $username = $payment['email'];
  
  // $sql="INSERT INTO orders ( pid, quantity ) SELECT  (pid, quantity) FROM carttable WHERE username = '$username'";
  // $result=$con->query($sql);
    $sql="Select pid,quantity from carttable where username='$username'";
    $result=$con->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
     
    //  $x = 1;
  
    while($row=$result->fetch_assoc()){
      $quantity=$row['quantity'];
      $pid=$row['pid'];
      $orderFill = "INSERT INTO orders (id,order_id,pid,quantity) VALUES ('0','$orderId', '$pid','$quantity')";
      $orderFillResult=$con->query($orderFill);
  }
}

    $date =  date('d/m/y');
    $amount = $payment['amount']/100;
    $email =$payment['email'];
$orderUpdate = "INSERT INTO recevicedorder (id,orderID,email,date,amount,address) VALUES ('0','$orderId','$email','$date','$amount','$shipping_address')";  
    
     if($con->query($orderUpdate)===TRUE){
        // echo '<script>alert("Successfully Updated ")</script>';
         
 

mysqli_query($con, "DELETE FROM carttable WHERE username='" .$payment['email']. "'");
    // echo "deleted";
  
         
       
    }
}
 */ 

     
     
     redirect('Vendor/PaymentSuccess');
     
 } else{
     
      $paymentLasser = [
         
         'payment_id' => $payment['id'],
         'amount' => $payment['amount']/100,
         'status' => $payment['status'],
         'bank_name' => $payment['bank'],
         'reponse_msg' => $payment['discription'],
         'signature_hash' => $razorpay_signature,
         'order_id' => $payment['order_id'],
          'email' => $payment['email'],
         'contact' => $payment['contact'],
         'address' => $response['address'],
         'payment_date'=>date('Y-m-d h:i:s')
         
     ];
     //access the data from the cart table 
     insertPaymentLasser($paymentLasser);
     redirect('paymentfailed');
 }
     

   
 }























