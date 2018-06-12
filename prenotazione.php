<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php'); ?>
    <meta itemprop="name" content="Vip Parking main dashboard page" />
    <meta itemprop="description" content="Vip Parking main dashboard" />
    <meta name="description" content="Vip Parking main dashboard" />
    <script src="Scripts\Vendor\js\moment.min.js" type="text/javascript"></script>
    <script src="Scripts\Vendor\js\daterangepicker.min.js" type="text/javascript"></script>
    <link href="Content\Vendor\css\daterangepicker.css" rel="stylesheet" />
    <link href="Content\Public\styles\menu.css" rel="stylesheet" />
    <link href="Content\Public\styles\prenotazione.css" rel="stylesheet" />
    <script src="Scripts\Vendor\js\angular.min.js" type="text/javascript"></script>
    <script src="Scripts\Public\appAngular.js" type="text/javascript"></script>
    <script src="Scripts\Public\Service\prenotazioneService.js" type="text/javascript"></script>
    <script src="Scripts\Public\Controller\prenotazioneController.js" type="text/javascript"></script>

    <title>Main Dashboard</title>
</head>
<body ng-app="vipParkingApp">
    <?php
    define("MenuLebel", "1");
    ?>
    <div class="row">
        <?php include('menu.php'); ?>
    </div>
    <div ng-controller="prenotazioneController">
        <div class="container">
            <div class="row report-row">
                <h2 class="text-left">Nuova Prenotazione</h2>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Il tuo parcheggio
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-offset-3 col-xs-5">
                                        <blockquote>
                                            <h3>Tipologia di vettura*</h3>
                                            <button type="button" class="btn btn-success btn-lg btn3d" ng-class="{ 'active':selectedTipoVeicolo == 'auto' ,'':selectedTipoVeicolo != 'auto'}" ng-click="selectTipoVeicolo('auto')">
                                                <span class="fas fa-car"></span>
                                                <br />
                                                <span>Auto</span>
                                            </button>

                                            <!-- Contextual button for informational alert messages -->
                                            <button type="button" class="btn btn-info btn-lg btn3d" ng-class="{ 'active':selectedTipoVeicolo == 'moto' ,'':selectedTipoVeicolo != 'moto'}" ng-click="selectTipoVeicolo('moto')">
                                                <span class="fas fa-motorcycle"></span>
                                                <br />
                                                <span>Moto</span>
                                            </button>

                                            <!-- Indicates caution should be taken with this action -->
                                            <button type="button" class="btn btn-warning btn-lg btn3d" ng-class="{ 'active':selectedTipoVeicolo == 'altro' ,'':selectedTipoVeicolo != 'altro'}" ng-click="selectTipoVeicolo('altro')">
                                                <span class="fas fa-truck"></span>
                                                <br />
                                                <span>Altro</span>
                                            </button>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-offset-3 col-xs-5">
                                        <blockquote>
                                            <h3>Periodo di permanenza*</h3>
                                            <input type="text" name="datetimes" class="form-control" />
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-offset-3 col-xs-5">
                                        <blockquote>
                                            <h3>Tipo di Parcheggio*</h3>                                            
                                            <select id="selectTipoParcheggio" class="form-control" >
                                                <option selected="selected" value="all">Scoperto</option>
                                                <option value="in">Coperto</option>
                                                <option value="out">Coperto con Chiavi</option>
                                            </select>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Dati Conducente
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-offset-3 col-xs-5">
                                        <blockquote>
                                            <h3>Tipologia di vettura*</h3>
                                            <button type="button" class="btn btn-success btn-lg btn3d" ng-class="{ 'active':selectedTipoVeicolo == 'auto' ,'':selectedTipoVeicolo != 'auto'}" ng-click="selectTipoVeicolo('auto')">
                                                <span class="fas fa-car"></span>
                                                <br />
                                                <span>Auto</span>
                                            </button>

                                            <!-- Contextual button for informational alert messages -->
                                            <button type="button" class="btn btn-info btn-lg btn3d" ng-class="{ 'active':selectedTipoVeicolo == 'moto' ,'':selectedTipoVeicolo != 'moto'}" ng-click="selectTipoVeicolo('moto')">
                                                <span class="fas fa-motorcycle"></span>
                                                <br />
                                                <span>Moto</span>
                                            </button>

                                            <!-- Indicates caution should be taken with this action -->
                                            <button type="button" class="btn btn-warning btn-lg btn3d" ng-class="{ 'active':selectedTipoVeicolo == 'altro' ,'':selectedTipoVeicolo != 'altro'}" ng-click="selectTipoVeicolo('altro')">
                                                <span class="fas fa-truck"></span>
                                                <br />
                                                <span>Altro</span>
                                            </button>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-offset-3 col-xs-5">
                                        <blockquote>
                                            <h3>Periodo di permanenza*</h3>
                                            <input type="text" name="datetimes" class="form-control" />
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-offset-3 col-xs-5">
                                        <blockquote>
                                            <h3>Tipo di Parcheggio*</h3>                                            
                                            <select id="selectTipoParcheggio" class="form-control" >
                                                <option selected="selected" value="all">Scoperto</option>
                                                <option value="in">Coperto</option>
                                                <option value="out">Coperto con Chiavi</option>
                                            </select>
                                        </blockquote>
                                    </div>
                                </div>                          
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /container -->
    </div>
</body>
</html>
<!--<script src="Scripts\Public\dashboard.js" type="text/javascript"></sc<ript>-->