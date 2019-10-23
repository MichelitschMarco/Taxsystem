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
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="bg-light">
    <div class="container">
        <h1 class="row justify-content-center mt-4 mb-4">Überschrift</h1>

        <div class="row" style="">
            <div class="col-md-6">
                <div class="container">
                    <div class="card" style="width:500px;">
                        <img class="card-img-top" src="./assets/images/murelli.jpeg" alt="Card image" style="width:30%;">
                        <div class="card-body">
                            <h4 class="card-title">ProductName</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                            <div class="price">eine Zahl</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="card" style="width:500px">
                        <div class="card-body">
                            <h4 class="card-title">Kostenrechnung:</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Preis (Brutto): <l>eine Zahl</l>
                                </li>
                                <li class="list-group-item" style="padding: .75rem 0rem; padding-right: 1.25rem;"><i class="fas fa-venus text-success mx-2"></i><button type="button" class="btn btn-info" id="theBut">Umsatzsteuer (20%)</button>
                                    <l class="Umsatzsteuer">eine Zahl</l>
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i> Preis (Netto): <l>eine Zahl</l>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
    <script src="/assets/js/buttonClicker.js"></script>
</body>

</html>