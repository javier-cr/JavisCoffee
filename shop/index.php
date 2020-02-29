<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="description"
        content="Javi's Coffee sources only the highest quality coffees and teas. Learn more about our delicious drinks today." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="../assets/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="apple-touch-icon" sizes="180x180" href="../assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon-16x16.png">
    <link rel="manifest" href="../assets/site.webmanifest">
    <link rel="shortcut icon" href="../assets/favicon.ico">

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../customjc.css">
    <title>Shop | Javi's Coffee</title>

    <!-- Load Stripe.js on your website. -->
    <script src="https://js.stripe.com/v3"></script>
</head>

<body>

    <!--Alert Message-->
    <div class="alert alert-critical text-white border-0 rounded-0 m-0" role="alert">
        <a href="./shop/" class="text-white">Valentine's Day sale happening now! While supplies last. Ends
            2/14 at midnight
            (PT).</a>
    </div>

    <!--Nav Bar-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../">
                <img src="../assets/logo.png" height="55px" alt="Javi's Coffee logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav nav-fill w-75 mx-4 text-uppercase">
                    <a class="nav-item nav-link active" href="../shop/">Shop <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link disabled" href="#">Stores</a>
                    <a class="nav-item nav-link" href="../ourstory/">Our Story</a>
                    <a class="nav-item nav-link" href="../rewards/">Javi's Rewards</a>
                    <a class="nav-item nav-link" href="../contact/">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!--Header Image-->
    <div id="shop_header" class="container-fluid">
        <div class="col px-0">
            <img src="../assets/shop_header_berries.jpg" class="img-fluid" alt="Image of coffee berries">
            <h2 id="our-coffees" class="text-white">Our Coffees</h2>
        </div>
    </div>

    <!--Product Listing by row-->
    <div class="container-fluid bg-white">
        <div id="product-row" class="row">
            <div class="card-deck my-5 mx-auto">

                <div class="card shop-card-product">
                    <img class="card-img-top" src="../assets/shop_products_beans.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Purple Rain</h5>
                        <p class="card-text font-italic">Raspberries, chocolate, cinnamon</p>
                        <p class="card-text font-weight-bold text-danger">16oz | $13</p>
                        <button id="checkout-button-sku_Ex9Mj2e4o7Cjpa" class="btn btn-outline-danger" role="link">
                            Buy Now
                        </button>
                    </div>
                </div>

                <div class="card shop-card-product">
                    <img class="card-img-top" src="../assets/home_shop_cap.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Angel's Ecstasy</h5>
                        <p class="card-text font-italic">Rose petals, serrano, honey</p>
                        <p class="card-text font-weight-light">12oz | $13</p>
                        <button id="checkout-button-sku_FBS4G1aRNUh4dA" class="btn btn-outline-danger" role="link">
                            Buy Now
                        </button>
                    </div>
                </div>

                <div class="card shop-card-product">
                    <img class="card-img-top" src="../assets/shop_products_beans2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Energy Incarnate</h5>
                        <p class="card-text font-italic">Mint, butterscotch, blackberry</p>
                        <p class="card-text font-weight-light">12oz | $13</p>
                        <button id="checkout-button-sku_FBS5NDx8V1UhOi" class="btn btn-outline-danger" role="link">
                            Buy Now
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="page-footer bg-dark font-small text-light p-5">
        <div class="container-fluid text-center text-md-left">
            <div class="row">

                <div class="col-md-6 mt-md-0 mt-3">
                    <h5>JAVI'S COFFEE</h5>
                    <p>At Javi’s Coffee, we work to make sure that each cup of our
                        delicious coffee is served with joy. We carefully select our
                        coffees for their bold, full-bodied flavor and with attention
                        to ethical and sustainable practices. We invite you to indulge
                        in one of our thirteen signature roasts. Come share in our
                        mission to make our community and the world a better place.</p>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">

                <div class="col-md-3 mb-md-0 mb-3">
                    <h5>SHOP</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-light" href="./shop/">Coffee</a>
                        </li>
                        <li>
                            <a class="text-light" href="./shop/">Tea</a>
                        </li>
                        <li>
                            <a class="text-light" href="./shop/">Accessories</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 mb-md-0 mb-3">
                    <h5>ABOUT US</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-light" href="./ourstory/">Our Story</a>
                        </li>
                        <li>
                            <a class="text-light" href="./rewards/">Javi's Rewards</a>
                        </li>
                        <li>
                            <a class="text-light" href="./contact/">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- Footer Links -->
        <div class="footer-copyright text-center pt-4">© 2020 Javi's Coffee · <a class="text-light"
                href="../privacy">Privacy Policy</a> </div>

    </footer>
    <!-- Footer -->

    <!-- Modal order successful -->
    <div class="modal fade" id="orderSuccess" tabindex="-1" role="dialog" aria-labelledby="orderSuccessLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title font-weight-bold px-1" id="orderSuccessLabel">Thank you for your order!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body font-weight-light">
                    A receipt has been emailed to you. Please allow 2-3 business days for shipping. If you have any
                    questions about your order, please contact us at orders@javiscoffee.com.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--STRIPE-->
    <div id="error-message">
        <!-- Modal -->
        <div class="modal fade" id="orderSuccess" tabindex="-1" role="dialog" aria-labelledby="orderSuccessLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title font-weight-bold px-1" id="orderSuccessLabel">Unable to complete you
                            orderSuccessLabel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body font-weight-light">
                        Please try submitting your order again. Thank you!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../jquery-3.4.1.slim.min.js"></script>
    <script src="../popper.min.js"></script>
    <script src="../bootstrap.min.js"></script>
    <script src="../stripe-products.js"></script>
    <script src="../custom.js"></script>
</body>

</html>