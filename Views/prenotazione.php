<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php'); ?>
    <meta itemprop="name" content="Vip Parking main dashboard page" />
    <meta itemprop="description" content="Vip Parking main dashboard" />
    <meta name="description" content="Vip Parking main dashboard" />
    <script src="..\Scripts\Vendor\js\moment.min.js" type="text/javascript"></script>
    <script src="..\Scripts\Vendor\js\daterangepicker.min.js" type="text/javascript"></script>
    <link href="..\Content\Vendor\css\daterangepicker.css" rel="stylesheet" />
    <link href="..\Content\Public\styles\menu.css" rel="stylesheet" />
    <link href="..\Content\Public\styles\prenotazione.css" rel="stylesheet" />
    <script src="..\Scripts\Public\Service\prenotazioneService.js" type="text/javascript"></script>
    <script src="..\Scripts\Public\Controller\prenotazioneController.js" type="text/javascript"></script>
    <script src="..\Scripts\Vendor\js\checkout.js"></script>

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
        <div class="container" ng-show="selezionaParcheggio">
             <div class="fixed-top chart-fixed">            
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <h5>La tua prenotazione</h5>
                            </div>
                            <div class="row">
                                <div class="col-xs-1">
                                    <h6><strong>Vettura:</strong></h6>
                                </div>
                                <div class="col-xs-1 text-right">
                                    <h6> Auto</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1">
                                    <h6><strong>Periodo:</strong></h6>
                                </div>
                                <div class="col-xs-1 text-right">
                                    <h6> 12/06/2018 10:30<br />15/06/2018 18:30</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1">
                                    <h6><strong>Tipo parcheggio:</strong></h6>
                                </div>
                                <div class="col-xs-1 text-right">
                                    <h6> Coperto</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1">
                                    <h6><strong>TOTALE:</strong></h6>
                                </div>
                                <div class="col-xs-1 text-right">
                                    <h6> &euro;16</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row report-row">
                <h2 class="text-left text-uppercase">la tua prenotazione</h2>
            </div>
            <div class="row report-row">
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
                                <blockquote>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-xs-5">
                                                <h4>Tipologia di vettura*</h4>
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-xs-5">
                                                <h4>Periodo di permanenza*</h4>
                                                <input type="text" name="datetimes" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-xs-5">
                                                <h4>Tipo di Parcheggio*</h4>                                            
                                                <select id="selectTipoParcheggio" class="form-control" >
                                                    <option selected="selected" value="all">Scoperto</option>
                                                    <option value="in">Coperto</option>
                                                    <option value="out">Coperto con Chiavi</option>
                                                </select>
                                        </div>
                                    </div>
                                </blockquote>
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
                                <blockquote>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-2 col-xs-5">
                                                <h4>Cognome*</h4>
                                                <input type="text" class="form-control" />
                                        </div>
                                        <div class="col-md-offset-1 col-md-2 col-xs-5"">
                                                <h4>Nome*</h4>
                                                <input type="text" class="form-control" />
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-2 col-xs-5">
                                                <h4>Passeggeri*</h4>
                                                <input type="number" class="form-control" />
                                        </div>
                                        <div class="col-md-offset-1 col-md-2 col-xs-5"">
                                                <h4>Convenzione**</h4>
                                                <input type="text" class="form-control" />
                                        </div>
                                    </div>     
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-2 col-xs-5">
                                                <h4>e-Mail*</h4>
                                                <input type="email" class="form-control" />
                                        </div>
                                        <div class="col-md-offset-1 col-md-2 col-xs-5"">
                                                <h4>Cellulare*</h4>
                                                <input type="tel" class="form-control" />
                                        </div>
                                    </div>      
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-2 col-xs-5">
                                                <h4>Modello Veicolo</h4>
                                                <input type="text" class="form-control" />
                                        </div>
                                        <div class="col-md-offset-1 col-md-2 col-xs-5"">
                                                <h4>Targa*</h4>
                                                <input type="text" class="form-control" />
                                        </div>
                                    </div>   
                                </blockquote>                       
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Servizi Extra
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-2 col-xs-5">
                                                <h4>Lavaggio</h4>                                        
                                                <select id="selectTipoParcheggio" class="form-control" >
                                                    <option selected="selected" value="all">Nessun Lavaggio</option>
                                                    <option value="in">Lavaggio Completo</option>
                                                    <option value="out">Lavaggio Interni</option>
                                                    <option value="out">Lavaggio Esterno</option>
                                                </select>
                                        </div>
                                        <div class="col-md-offset-1 col-md-2 col-xs-5"">
                                                <h4>Car Valet</h4>                                        
                                                <select id="selectTipoParcheggio" class="form-control" >
                                                    <option selected="selected" value="all">No</option>
                                                    <option value="in">Solo Ingresso</option>
                                                    <option value="out">Ingresso e Uscita</option>
                                                </select>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-2 col-xs-5">
                                                <h4>Sigla Volo Rientro</h4>
                                                <input type="text" class="form-control" />
                                        </div>
                                        <div class="col-md-offset-1 col-md-2 col-xs-5">
                                                <h4>Provenienza Volo</h4>
                                                <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </blockquote>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-8 col-xs-offset-2 col-md-4 col-xs-8">
                    <button class="btn btn-info btn-dimension" ng-click="proseguiAcquisto()">Acquista</button>
                </div>
            </div>
        </div><!-- /container -->
        <div class="container" ng-show="selezionaPagamento">            
            <div class="row report-row">
                <h2 class="text-left text-uppercase">Paga il tuo parcheggio</h2>
            </div>
            <div class="row report-row">
                <div class="col-md-offset-1 col-md-2 col-xs-5">                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="payment-option" id="payPalRadio" value="paypal" checked>
                        <img src="..\Content\Public\img\paypal-mark.jpg" alt="Pay with Paypal" />
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="payment-option" id="creditRadio" value="crediCard">
                        <img height="48" src="..\Content\Public\img\card-mark.png" alt="Accepting Visa, Mastercard, Discover and American Express" />
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="payment-option" id="cashRadio" value="cash">
                        <span class="far fa-money-bill-alt fa-4x green" style="height:48px"></span> 
                      </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-1 col-md-offset-4 col-xs-5 col-md-4">
                    <button class="btn btn-info btn-dimension" ng-click="ritornaSelezione()">Indietro</button>
                </div>
                <div class="col-xs-5 col-md-4">
                    <div id="paypal-button-container"></div>
                    <div id="card-button-container"><button class="btn btn-info btn-dimension">Paga</button></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    <script src="..\Scripts\Public\paypal_local.js"></script>