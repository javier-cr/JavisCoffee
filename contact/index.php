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
    <link
        href="https://fonts.googleapis.com/css?family=Crete+Round:400i|IBM+Plex+Sans|Roboto|Roboto:300|Roboto+Condensed&display=swap"
        rel="stylesheet">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../customjc.css">
    <title> Contact Us | Javi's Coffee</title>
</head>

<body>

    <!--Alert Message-->
    <div class="alert alert-critical text-white border-0 rounded-0 m-0" role="alert">
        <a href="./shop/" class="text-white">Our Purple Rain roast is on sale! While supplies last. Ends
            9/30 at midnight
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
                    <a class="nav-item nav-link" href="../shop/">Shop</a>
                    <a class="nav-item nav-link disabled" href="#">Stores</a>
                    <a class="nav-item nav-link" href="../ourstory/">Our Story
                        <a class="nav-item nav-link" href="../rewards/">Javi's Rewards</a>
                        <a class="nav-item nav-link active" href="../contact/">Contact<span
                                class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>

    <!--Contact Form-->
    <div class="jumbotron jumbotron-fluid text-left pb-5 mb-0">
        <div class="container">
            <h1 class="display-4">Let's talk.</h1>
            <p class="lead">We'd love to hear from you! Reach us via the contact form below or at (408) 555-4441.</p>

            <form action="" method="post" class="needs-validation" novalidate>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputComment">What can we help with?</label>
                        <input type="text" name="comment" class="form-control" id="inputComment"
                            placeholder="I'd like to..." maxlength="250" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputReason">Reason</label>
                        <select id="inputReason" name="reason" class="form-control" maxlength="20">
                            <option>Choose...</option>
                            <option>Order</option>
                            <option>Your Website</option>
                            <option>Store</option>
                            <option>Product Question</option>
                            <option>General</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputFirstName">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="inputFirstName"
                            placeholder="First Name" maxlength="70" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="InputLastName">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="InputLastName"
                            placeholder="Last Name" maxlength="70" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail"
                            placeholder="example@domain.com" maxlength="70" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputPhone">Phone Number</label>
                        <input type="text" name="phonenumber" class="form-control" id="inputPhone"
                            placeholder="0000000000" maxlength="10" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-danger">
                    </div>
                </div>
            </form>
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
        <div class="footer-copyright text-center pt-4">© 2019 Javi's Coffee · <a class="text-light"
                href="../privacy">Privacy Policy</a> </div>

    </footer>
    <!-- Footer -->

    <script src="../jquery-3.4.1.slim.min.js"></script>
    <script src="../popper.min.js"></script>
    <script src="../bootstrap.min.js"></script>
    <script src="../custom.js"></script>
</body>

</html>