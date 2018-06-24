<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php'); ?>
    <meta itemprop="name" content="Vip Parking Clients page" />
    <meta itemprop="description" content="Vip Parking Clients" />
    <meta name="description" content="Vip Parking Lista Clienti" />
    <link href="..\Content\Public\styles\menu.css" rel="stylesheet" />
    <script src="..\Scripts\Public\Service\listatoClientiService.js" type="text/javascript"></script>
    <script src="..\Scripts\Public\Controller\listatoClientiController.js" type="text/javascript"></script>

    <title>Lista Clienti</title>
</head>
<body ng-app="vipParkingApp">
    <?php
    define("MenuLebel", "2");
    ?>
    <div class="menuHeader">
        <?php include('menu.php'); ?>
    </div>
    <div class="container-fluid report-row">
        <div class="row report-row">
            <div class="col-xs-4">
                <h2 class="text-left text-uppercase">I tuoi clienti</h2>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                    <div class="listato">
                        <?php include('listatoClienti.php'); ?>
                    </div>
            </div>
        </div>
    </div><!-- /container -->
</body>
</html>