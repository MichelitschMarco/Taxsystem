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
    <div class="container col-3">
        <form style="margin-top: 50px;" action="/product.php" method="GET">
            <div class="form-group">
                <label style="position: relative; left: 50%; transform: translate(-50%, 50%); margin-bottom: 25px">Barcode</label>
                <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Enter barcode">
            </div>
            <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
        </form>

        <footer class="pt-5 text-muted text-center text-small">
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