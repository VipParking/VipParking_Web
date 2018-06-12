<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php'); ?>
    <meta itemprop="name" content="Vip Parking - tariffario" />
    <meta itemprop="description" content="Vip Parking tariffario" />
    <meta name="description" content="Vip Parking tariffario" />
    <link href="Content\Public\styles\menu.css" rel="stylesheet" />
    <link href="Content\Public\styles\vale.css" rel="stylesheet" />
    <script src="Scripts\Vendor\js\Chart.bundle.min.js" type="text/javascript"></script>
    <script src="Scripts\Vendor\js\angular.min.js" type="text/javascript"></script>
    <script src="Scripts\Public\appAngular.js" type="text/javascript"></script>
    
     <title>Tariffario</title>
</head>
<body ng-app="vipParkingApp">
    <div class="menuHeader">
        <?php include('menu.php'); ?>
    </div>
    <div class="container-fluid">
            <div class="row report-row">
                <div class="container-form">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputState">Tipo parcheggio</label>
                            <select id="inputState" class="form-control form-control-sm">
                            <option selected>Coperto</option>
                            <option>Scoperto</option>
                            <option>Coperto con Chiavi</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">Tipo veicolo</label>
                            <select id="inputState" class="form-control form-control-sm">
                                <option selected>Auto</option>
                                <option>Moto</option>
                                <option>Camper</option>
                            </select>
                        </div>            
                        <div class="form-group col-md-2">
                            <label for="inputState">Convenzione</label>
                            <select id="inputState" class="form-control form-control-sm">
                                <option selected>NESSUNA</option>
                                <option>Hotel</option>
                                <option>Frequent flyer</option>
                                <option>Over 65</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            </br>
                            <button type="button" class="btn btn-success">Salva configurazione</button>
                        </div>
                        <div class="col col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">PERIODI STAGIONE</div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-sm">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>Data inizio</th>
                                            <th>Data fine</th>
                                            <th>Tipo stagione</th>
                                        </tr>
                                        </thead>  
                                        <tbody>						
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" />
                                                    </div>
                                                </td>
                                                <td> 
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select id="inputState" class="form-control form-control-sm">
                                                            <option selected>Media</option>
                                                            <option>Alta</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" />
                                                    </div>
                                                </td>
                                                <td> 
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select id="inputState" class="form-control form-control-sm">
                                                            <option>Media</option>
                                                            <option selected>Alta</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div> 

        <div class="row">
            <div class="col col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">TARIFFE - BASSA STAGIONE</div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Giorni</th>
                                <th>Paypal</th>
                                <th>Web</th>
                                <th>Ufficio</th>               
                            </tr>
                        </thead>
                            <tbody>						
                                <tr>
                                    <td>
                                        <label>1</label>
                                    </td>
                                    <td>
                                        <input type="text" value="11" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="10" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="12" class="form-control" id="u3"></input>
                                    </td>
                                </tr>                   
                                						
                                <tr>
                                    <td>
                                        <label>2</label>
                                    </td>
                                    <td>
                                        <input type="text" value="16" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="15" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="17" class="form-control" id="u3"></input>
                                    </td>
                                </tr>  						
                                <tr>
                                    <td>
                                        <label>3</label>
                                    </td>
                                    <td>
                                        <input type="text" value="19" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="18" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="20" class="form-control" id="u3"></input>
                                    </td>
                                </tr>                    
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- /colonna BASSA STAGIONE -->    
            <div class="col col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">TARIFFE - MEDIA STAGIONE</div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Giorni</th>
                                <th>Paypal</th>
                                <th>Web</th>
                                <th>Ufficio</th>               
                            </tr>
                        </thead>
                            <tbody>						
                                <tr>
                                    <td>
                                        <label>1</label>
                                    </td>
                                    <td>
                                        <input type="text" value="13" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="12" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="14" class="form-control" id="u3"></input>
                                    </td>
                                </tr>                   
                                						
                                <tr>
                                    <td>
                                        <label>2</label>
                                    </td>
                                    <td>
                                        <input type="text" value="18" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="17" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="19" class="form-control" id="u3"></input>
                                    </td>
                                </tr>  						
                                <tr>
                                    <td>
                                        <label>3</label>
                                    </td>
                                    <td>
                                        <input type="text" value="21" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="20" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="22" class="form-control" id="u3"></input>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- /colonna MEDIA STAGIONE-->
            <div class="col col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">TARIFFE - ALTA STAGIONE</div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Giorni</th>
                                <th>Paypal</th>
                                <th>Web</th>
                                <th>Ufficio</th>               
                            </tr>
                        </thead>
                            <tbody>						
                                <tr>
                                    <td>
                                        <label>1</label>
                                    </td>
                                    <td>
                                        <input type="text" value="15" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="14" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="16" class="form-control" id="u3"></input>
                                    </td>
                                </tr>                   
                                						
                                <tr>
                                    <td>
                                        <label>2</label>
                                    </td>
                                    <td>
                                        <input type="text" value="20" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="19" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="21" class="form-control" id="u3"></input>
                                    </td>
                                </tr>  						
                                <tr>
                                    <td>
                                        <label>3</label>
                                    </td>
                                    <td>
                                        <input type="text" value="23" class="form-control" id="u1"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="22" class="form-control" id="u2"></input>
                                    </td>
                                    <td>
                                        <input type="text" value="24" class="form-control" id="u3"></input>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- /colonna ALTA STAGIONE-->
            
            <!--<div class="col col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">PERIODI STAGIONE</div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Data inizio</th>
                                <th>Data fine</th>
                                <th>Tipo stagione</th>
                            </tr>
                            </thead>  
                            <tbody>						
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="date" class="form-control" />
                                        </div>
                                    </td>
                                    <td> 
                                        <div class="form-group">
                                            <input type="date" class="form-control" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select id="inputState" class="form-control form-control-sm">
                                                <option selected>Media</option>
                                                <option>Alta</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>-->
        </div><!-- /riga -->     
    </div><!-- /container -->
</body>
</html>
<script src="Scripts\Public\report.js" type="text/javascript"></script>