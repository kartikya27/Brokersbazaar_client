<div class="uk-container">
<div class="uk-card uk-card-default ">
<table class="uk-table uk-table-middle uk-table-hover  uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">Transaction ID</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Selected Package </th>
            <th>Payment status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody >
        <?php 
 $x = 1;
foreach($history as $payHistory){
   
    ?>
    <tr onclick="showHideRow('hidden_row1<?php echo $x; ?>');">
        <td class="uk-text-truncate"><?php echo $payHistory->order_id; ?></td>
        <td><?php echo $payHistory->payment_date;?></td>
        <td><?php echo $payHistory->amount;?></td>
         <td>
         <?php if($payHistory->package_id == 1)
     {
         $packName = 'Free';
     }else{
         $packName = 'Paid';
     }
     echo $packName;
     ?>
         </td>
          <td><?php echo $payHistory->status." Success";?></td>
         <td ><button class="uk-button">View Details </button></td>
        
    </tr>
    <tr style="display:none"  id="hidden_row1<?php echo $x; ?>">
        <td class="uk-table-expand ">
     <?php
    //  if($payHistory->package_id == 1)
    //  {
    //      $packName = 'Free';
    //  }else{
    //      $packName = 'Paid';
    //  }
     ?>
     Your Selected Plan is <?php echo $payHistory->pack_name; ?>
        </td>
        <!--<td class="uk-table-expand ">Description:<?php echo $payHistory->pack_discription; ?> </td>-->
        <td >
     <button class="uk-button uk-button-primary">Upgrade Plan</button>
        </td>
    </tr>
     
 
    <?php 
    $x++;
}

?>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        function showHideRow(row) {
            $("#" + row).toggle();
        }
    </script>    
    </tbody>
</table>
</div>
</div>


