<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ostap Filipenko, Samuel Kuchler, Marco Michelitsch, Mike Nußbaumer">
    <title>Taxsystem :: Tag der offenen Tür</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container">

        <p>Barcode: <?php echo $_GET['barcode']; ?></p>
        <div class="row mt-5">
            <div class="col-md-8 ml-4 mt-5">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-5">Produkt</h3>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-md-3 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text mx-auto">Kosten</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Produktionskosten</h6>
                        </div>
                        <span class="text-muted">8,87€</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Transportkosten</h6>
                        </div>
                        <span class="text-muted">+2,73€</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Lagerkosten</h6>
                        </div>
                        <span class="text-muted">+0,34€</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Umssatzkosten</h6>
                        </div>
                        <span class="text-muted">+1,34€</span>
                    </li>


                    <li class="list-group-item d-flex justify-content-between" style='background-color: #2ba6cb;'>
                        <strong><span>Gesamtpreis</span></strong>
                        <strong>xxx</strong>
                    </li>
                </ul>

            </div>

        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">2019 &copy; MaSaMiOstap</p>
        </footer>
    </div>

    <script src="/assets/js/jquery.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="/assets/js/jquery.slim.min.js"><\/script>')
    </script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>