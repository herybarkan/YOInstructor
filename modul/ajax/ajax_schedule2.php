<?php require_once('../../Connections/con.php'); ?>

 <script src="https://www.paypal.com/sdk/js?client-id=AYXbxKX2zyMA_E6S9IiM7H5JmNbSL_lXkqE4HbvrR_usiUDqmfkKxY25bq03z5hGN_n5Bz0Vm2IOTagB&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
<?php
echo "console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));";
			?>
            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';
			
			

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>     

<?php
//echo "Show Schedule";
//echo "<br>";
//echo $_GET['get_sched'];
$tgl=$_GET['get_sched'];
$date=date_create($tgl);
//echo "<br>";
echo "<h4>Your Selected Date is <br>".date_format($date,"l d/m/Y"."</h4>");
$xtgl=date_format($date,"Y-m-d");
$nm_hari=date_format($date,"l");
?>
<br><br>
<input type="hidden" name="hf_tgl" value="<?php echo $xtgl; ?>" id="hf_tgl">
<input name="bnp" type="submit" value="Book &amp; Pay" class="btn" style="background-color:#FFE45F;"/><br>

<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  
<span style="font-size:12px;">currently we only support payment by paypal</span>