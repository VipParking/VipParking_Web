vipParkingApp.controller("listatoUtentiController", ['$scope', "listatoUtentiService", "$q", "$filter", function ($scope, listatoUtentiService, $q, $filter) {

    $scope.listaUtenti = [];
    $scope.listaUtentiBck = [];
    $scope.dataSelezionata = '';
    $scope.statoSelezionato = 'all';
    $scope.generatedKey = null;

    $q.all([listatoUtentiService.getElencoUtenti()]).then(function (result) {

        $scope.listaUtenti = listatoUtentiService.elencoUtenti;
        $scope.listaUtentiBck = $scope.listaUtenti;
    },
        function (e, m) {
            alert(e);
        });

    $scope.filterText = function (event) {
        var insertText = event.target.value.toLowerCase();

        $scope.listaUtenti = $scope.listaUtentiBck;

        var found_names = $.grep($scope.listaUtenti, function (v) {
            return (v.Codice != null && v.Codice.toLowerCase().indexOf(insertText) >= 0)
                || (v.Cognome != null && v.Cognome.toLowerCase().startsWith(insertText))
                || (v.Nome != null && v.Nome.toLowerCase().startsWith(insertText))
                || (v.Targa != null && v.Targa.toLowerCase().startsWith(insertText))
                || (v.Chiave != null && v.Chiave.toLowerCase().indexOf(insertText) >= 0);
        });

        $scope.listaUtenti = found_names;

        //$("#listaUtentiTable tr").filter(function () {
        //    $(this).toggle($(this).text().toLowerCase().indexOf(event.target.value.toLowerCase()) > -1)
        //});
    };

    $scope.filterDate = function () {
        var insertDate = $filter('date')($scope.dataSelezionata, 'dd/MM/yyyy');
        $scope.listaUtenti = $scope.listaUtentiBck;

        if (insertDate == null)
            return;

        var found_names = $.grep($scope.listaUtenti, function (v) {
            return (v.Arrivo != null && v.Arrivo == insertDate)
                || (v.Partenza != null && v.Partenza == insertDate);
        });

        $scope.listaUtenti = found_names;

    };

    $scope.filterStato = function (selectdStato) {

        var selectedStato = $scope.statoSelezionato;
        $scope.listaUtenti = $scope.listaUtentiBck;

        if (selectedStato == 'all') 
            return;

        var found_names = $.grep($scope.listaUtenti, function (v) {
            return (v.Stato != null && v.Stato == selectedStato);
        });

        $scope.listaUtenti = found_names;

    };

    $scope.generateRandomKey = function () {
        $scope.generatedKey = 1 + Math.floor(Math.random() * 50);
    };

}]);