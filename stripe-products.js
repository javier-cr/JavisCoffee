//URLs must be full path for Stripe to accept them
var stripe = Stripe('pk_test_zvtGn81kDq4MoVaIoq1yzZH800KJe8Xmcq');

var checkoutButtonPR = document.getElementById('checkout-button-sku_Ex9Mj2e4o7Cjpa');
var checkoutButtonAE = document.getElementById('checkout-button-sku_FBS4G1aRNUh4dA');
var checkoutButtonEI = document.getElementById('checkout-button-sku_FBS5NDx8V1UhOi');

checkoutButtonPR.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
        items: [{ sku: 'sku_Ex9Mj2e4o7Cjpa', quantity: 1 }],

        successUrl: "https:/javiscoffee.com/shop/index.php?order=success",
        cancelUrl: "https://javiscoffee.com/shop/",
    })
        .then(function (result) {
            if (result.error) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, display the localized error message to your customer.
                var displayError = document.getElementById('error-message');
                displayError.textContent = result.error.message;
            }
        });
});

checkoutButtonAE.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
        items: [{ sku: 'sku_FBS4G1aRNUh4dA', quantity: 1 }],

        successUrl: "https:/javiscoffee.com/shop/index.php?order=success",
        cancelUrl: "https://javiscoffee.com/shop/",
    })
        .then(function (result) {
            if (result.error) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, display the localized error message to your customer.
                var displayError = document.getElementById('error-message');
                displayError.textContent = result.error.message;
            }
        });
});

checkoutButtonEI.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
        items: [{ sku: 'sku_FBS5NDx8V1UhOi', quantity: 1 }],

        successUrl: "https:/javiscoffee.com/shop/index.php?order=success",
        cancelUrl: "https://javiscoffee.com/shop/",
    })
        .then(function (result) {
            if (result.error) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, display the localized error message to your customer.
                var displayError = document.getElementById('error-message');
                displayError.textContent = result.error.message;
            }
        });
});
