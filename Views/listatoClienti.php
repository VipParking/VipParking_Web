<div ng-controller="listatoClientiController">
    <div class="row">
        <div class="col-xs-4">
            <label for="myInput">Ricerca</label>
            <input class="form-control search-text" id="myInput" type="text" placeholder="Cognome, Nome, Ragione Sociale, P.IVA, CF" ng-keyup="filterText($event)">
        </div>
        <!--<div class="col-xs-2">
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
        </div>-->
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
            <tr class="info">
                <th></th>
                <th>Cognome</th>
                <th>Nome</th>
                <th>Ragione Sociale</th>
                <th>Codice Fiscale</th>
                <th>Partita IVA</th>
                <th>Telefono</th>
                <th>eMail</th>
                <th>Indirizzo</th>
                <th>Citt&aacute;</th>
                <th>CAP</th>
                <th>Provincia</th>
                <th>Nazione</th>
            </tr>
        </thead>
        <tbody id="listaUtentiTable" ng-repeat="(i,cliente) in listaClienti">
            <tr data-toggle="collapse" data-target="{{'#demo'+i}}" class="accordion-toggle">
                <td><span class="glyphicon glyphicon-chevron-down"></span></td>
                <td>{{cliente.Cognome}}</td>
                <td>{{cliente.Nome}}</td>
                <td>{{cliente.RagioneSociale}}</td>
                <td>{{cliente.CodiceFiscale}}</td>
                <td>{{cliente.PartitaIva}}</td>
                <td>{{cliente.Telefono}}</td>
                <td>{{cliente.Email}}</td>
                <td>{{cliente.Indirizzo}}</td>
                <td>{{cliente.Citta}}</td>
                <td>{{cliente.CAP}}</td>
                <td>{{cliente.Provincia}}</td>
                <td>{{cliente.Nazione}}</td>
            </tr>
            <tr>
                <td colspan="13" class="hiddenRow">
                    <div id="{{'demo'+i}}" class="accordian-body collapse">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="warning">
                                    <th>Prenotazione</th>
                                    <th>Tipo Veicolo</th>
                                    <th>Modello</th>
                                    <th>Targa</th>
                                    <th>Parcheggio</th>
                                    <th>Prezzo</th>
                                    <th>Metodo di Pagamento</th>
                                    <th>Ingresso</th>
                                    <th>Uscita</th>
                                    <th>Destinazione</th>
                                    <th>Chiave</th>
                                </tr>
                            </thead>
                            <tbody id="listaClientiPrenotazioneTable" ng-repeat="(i,prenotazione) in cliente.Prenotazioni">
                                <tr>
                                    <td>{{prenotazione.IdPrenotazione}}</td>
                                    <td>{{prenotazione.Veicolo}}</td>
                                    <td>{{prenotazione.Modello}}</td>
                                    <td>{{prenotazione.Targa}}</td>
                                    <td>{{prenotazione.Parcheggio}}</td>
                                    <td>{{prenotazione.Prezzo}}</td>
                                    <td>{{prenotazione.Pagamento}}</td>
                                    <td>{{prenotazione.Ingresso}}</td>
                                    <td>{{prenotazione.Uscita}}</td>
                                    <td>{{prenotazione.Destinazione}}</td>
                                    <td>{{prenotazione.Chiave}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>