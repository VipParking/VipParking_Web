<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php'); ?>
    <meta itemprop="name" content="Vip Parking main dashboard page" />
    <meta itemprop="description" content="Vip Parking main dashboard" />
    <meta name="description" content="Vip Parking main dashboard" />
    <link href="Content\Public\styles\menu.css" rel="stylesheet" />
    <script src="Scripts\Vendor\js\Chart.bundle.min.js" type="text/javascript"></script>
    <script src="Scripts\Vendor\js\angular.min.js" type="text/javascript"></script>
    <script src="Scripts\Public\appAngular.js" type="text/javascript"></script>
    <script src="Scripts\Public\Service\listatoUtentiService.js" type="text/javascript"></script>
    <script src="Scripts\Public\Controller\listatoUtentiController.js" type="text/javascript"></script>

    <title>Main Dashboard</title>
</head>
<body ng-app="vipParkingApp">
    <?php
    define("MenuLebel", "0");
    ?>
    <div class="menuHeader">
        <?php include('menu.php'); ?>
    </div>
    <div class="container-fluid report-row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="grafici">
                    <?php include('chart.php'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="listato">
                    <?php include('listatoUtenti.php'); ?>
                </div>
            </div>
        </div>
    </div><!-- /container -->
</body>
</html>
<script src="Scripts\Public\dashboard.js" type="text/javascript"></script>