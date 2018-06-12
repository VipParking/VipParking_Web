<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php'); ?>
    <meta itemprop="name" content="Vip Parking report page" />
    <meta itemprop="description" content="Vip Parking report" />
    <meta name="description" content="Vip Parking report" />
    <link href="Content\Public\styles\menu.css" rel="stylesheet" />
    <script src="Scripts\Vendor\js\Chart.bundle.min.js" type="text/javascript"></script>
    <script src="Scripts\Vendor\js\angular.min.js" type="text/javascript"></script>
    <script src="Scripts\Public\appAngular.js" type="text/javascript"></script>
    <script src="Scripts\Public\Service\listatoUtentiService.js" type="text/javascript"></script>
    <script src="Scripts\Public\Controller\listatoUtentiController.js" type="text/javascript"></script>

    <title>Report</title>
</head>
<body ng-app="vipParkingApp">
    <div class="menuHeader">
        <?php include('menu.php'); ?>
    </div>
    <div class="container-fluid">
        <div class="row report-row">
            <div class="col col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">RIEPILOGO INCASSI</div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-sm">
                            <tbody>						
                                <tr>
                                <td>Totale incassato da inzio anno (YTD)</td>
                                <td>€ 18234</td>
                                </tr>                    
                                <tr>
                                    <td>Totale incassato da inizio mese (MTD)</td>
                                    <td>€ 2504</td>
                                </tr>
                                <tr>
                                    <td>Totale incassato giornata odierna</t>              
                                    <td>€ 220</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>       
            <div class="col col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">INCASSI - mese per mese anno corrente</div>
                    <div class="panel-body">
                        <div class="grafici">
                            <div class="chart-container">
                                <div class="row">
                                    <div class="col-xs-offset-4 col-xs-5">
                                        <canvas id="report" width="60" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div><!-- /riga -->     
    </div><!-- /container -->
</body>
</html>
<script src="Scripts\Public\report.js" type="text/javascript"></script>