<?php
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
<script src="https://www.paypal.com/sdk/js?client-id=AZef0lFFrH6QJywlIqzn-L9KbX2rgNmRf1ZhLN-C__83boVJJLkX_U_O_fdAUkDOAAu4kueT2guGz0QP"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
</script>

<div id="paypal-button-container" style="width: 120px">

<!-- Add the checkout buttons, set up the order and approve the order -->
<script>
    paypal.Buttons({
        style: {
            color: 'blue',
            shape: 'pill',
            size: 'responsive',
            height: 30,
            label: 'pay'
        },

        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '0.01'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container'); // Display payment options on your web page
</script>
</div>
</body>
</html>

