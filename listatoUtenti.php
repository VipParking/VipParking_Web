<div ng-controller="listatoUtentiController">
    <!--<form class="form-inline">
        <div class="form-group">
            <input class="form-control" id="myInput" type="text" placeholder="Search.." ng-keyup="filterText($event)">
        </div>
        <div class="form-group">
            <input type="date" id="dateSearch" class="form-control" ng-change="filterDate($event)" />
        </div>
        <div class="form-group">
            <button class="btn btn-default dropdown-toggle" type="button" id="statoDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Stato
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#" ng-click="filterStato('in')">In arrivo</a></li>
                <li><a href="#" ng-click="filterStato('out')">In partenza</a></li>
            </ul>
        </div>
    </form>-->
    <div class="row">
        <div class="col-xs-4">
            <label for="myInput">Ricerca</label>
            <input class="form-control search-text" id="myInput" type="text" placeholder="Cognome, Nome, Targa" ng-keyup="filterText($event)">
        </div>
        <div class="col-xs-2">
            <label for="dateSearch">Data Ingresso/Uscita</label>
            <input type="date" id="dateSearch" class="form-control" ng-change="filterDate()" ng-model="dataSelezionata" />
        </div>
        <div class="col-xs-2">
            <label for="selectStato">Entranti/Uscenti</label>
            <select id="selectStato" class="form-control" ng-change="filterStato()" ng-model="statoSelezionato">
                <option selected="selected" value="all">Tutti</option>
                <option value="in">Entranti</option>
                <option value="out">Uscenti</option>
            </select>
        </div>
        <div class="col-xs-offset-2 col-xs-1">
            <button class="btn btn-default margin-top-25">
                <span class="glyphicon glyphicon-remove red"></span>&nbsp;Reset
            </button>
        </div>
        <div class="col-xs-1">
            <button class="btn btn-default margin-top-25">
                <span class="glyphicon glyphicon-floppy-save darkcyan"></span>&nbsp;Stampa Lista
            </button>
        </div>
    </div>
    <br>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Codice</th>
                <th>Cognome</th>
                <th>Nome</th>
                <th>Targa</th>
                <!--<th>Modello</th>-->
                <th>Arrivo</th>
                <th>Partenza</th>
                <!--<th>Destinazione</th>
                <th>Passeggeri</th>-->
                <th>Terminal</th>
                <th>Parcheggio</th>
                <th>Settore</th>
                <th>Chiave</th>
                <!--<th>Prezzo</th>
                <th>Pagamento</th>
                <th>Lavaggio</th>
                <th>Servizi</th>-->
                <th>Entrata/Uscita</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody id="listaUtentiTable" ng-repeat="(i,utente) in listaUtenti">
            <tr data-toggle="collapse" data-target="{{'#demo'+i}}" class="accordion-toggle">
                <td>{{utente.Codice}}</td>
                <td>{{utente.Cognome}}</td>
                <td>{{utente.Nome}}</td>
                <td>{{utente.Targa}}</td>
                <td>{{utente.Arrivo}}</td>
                <td>{{utente.Partenza}}</td>
                <td>{{utente.Terminal}}</td>
                <td>{{utente.Parcheggio}}</td>
                <td>{{utente.Settore}}</td>
                <td>{{utente.Chiave}}</td>

                <td><span ng-class="{'green glyphicon glyphicon-import': utente.Stato == 'in', 'red glyphicon glyphicon-export': utente.Stato == 'out'}" aria-hidden="true"></span></td>
                <td>
                    <span class="glyphicon glyphicon-pencil"></span>
                    &nbsp;
                    <span class="glyphicon glyphicon-remove red"></span>
                </td>
            </tr>
            <tr>
                <td colspan="13" class="hiddenRow">
                    <div id="{{'demo'+i}}" class="accordian-body collapse">
                        <div class="row margin-top-25">
                            <div class="col-xs-offset-2 col-xs-2">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Modello:</b> {{utente.Modello}}</li>
                                    <li class="list-group-item"><b>Destinazione:</b> {{utente.Destinazione}}</li>
                                </ul>
                            </div>
                            <div class="col-xs-2">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Pagamento:</b> {{utente.Pagamento}}</li>
                                    <li class="list-group-item"><b>Prezzo:</b> {{utente.Prezzo}}</li>
                                </ul>
                            </div>
                            <div class="col-xs-2">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Passeggeri:</b> {{utente.Passeggeri}}</li>
                                    <li class="list-group-item"><b>Lavaggio:</b> {{utente.Lavaggio}}</li>
                                </ul>
                            </div>
                            <div class="col-xs-2">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Servizi:</b> {{utente.Servizi}}</li>
                                    <li class="list-group-item"><b>Note:</b> {{utente.Note}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-offset-4 col-xs-6 col-md-6">
                                    <a href="#" class="btn btn-success btn-lg" role="button"><span class="fas fa-key"></span> <br />Genera</a>
                                    <a href="#" class="btn btn-danger btn-lg" role="button"><span class="fas fa-key fa-level-up-alt"></span> <br />Rilascia</a>
                                    <a href="#" class="btn btn-info btn-lg" role="button"><span class="fas fa-euro-sign"></span> <br />Paga</a>
                                    <a href="#" class="btn btn-warning btn-lg" role="button"><span class="fas fa-file-pdf"></span> <br />Stampa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>