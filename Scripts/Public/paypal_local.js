

// Listen for changes to the radio fields

$('input[name=payment-option]').each(function () {
   $(this).on('change', function (event) {

        // If PayPal is selected, show the PayPal button

        if (event.target.value === 'paypal') {
            $('#card-button-container').hide();
            $('#paypal-button-container').show();
        }

        // If Card is selected, show the standard continue button

        if (event.target.value !== 'paypal') {
            $('#card-button-container').show();
            $('#paypal-button-container').hide();
        }
    });
});

// Hide Non-PayPal button by default

$('#card-button-container').hide();

// Render the PayPal button

paypal.Button.render({

    env: 'sandbox',

    style: {
        label: 'checkout',  // checkout | credit | pay | buynow | generic
        size: 'responsive', // small | medium | large | responsive
        shape: 'rect',   // pill | rect
        color: 'gold'   // gold | blue | silver | black
    },

    client: {
        sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
        production: '<insert production client id>'
    },

    payment: function (data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                        amount: { total: '0.01', currency: 'EUR' }
                    }
                ]
            }
        });
    },

    onAuthorize: function (data, actions) {
        return actions.payment.execute().then(function () {
            window.alert('Payment Complete!');
        });
    }

}, '#paypal-button-container');