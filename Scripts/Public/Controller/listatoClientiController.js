vipParkingApp.controller("listatoClientiController", ['$scope', "listatoClientiService", "$q", "$filter", function ($scope, listatoClientiService, $q, $filter) {

    $scope.listaClienti = [];
    $scope.listaClientiBck = [];
    $scope.dataSelezionata = '';
    $scope.statoSelezionato = 'all';

    $q.all([listatoClientiService.getElencoClienti()]).then(function (result) {

        $scope.listaClienti = listatoClientiService.elencoClienti;
        $scope.listaClientiBck = $scope.listaClienti;
    },
        function (e, m) {
            alert(e);
        });

    $scope.filterText = function (event) {
        var insertText = event.target.value.toLowerCase();

        $scope.listaClienti = $scope.listaClientiBck;

        var found_names = $.grep($scope.listaClienti, function (v) {
            return ((v.Cognome != null && v.Cognome.toLowerCase().startsWith(insertText))
                || (v.Nome != null && v.Nome.toLowerCase().startsWith(insertText))
                || (v.RagioneSociale != null && v.RagioneSociale.toLowerCase().startsWith(insertText))
                || (v.PartitaIva != null && v.PartitaIva.toLowerCase().startsWith(insertText))
                || (v.CodiceFiscale != null && v.CodiceFiscale.toLowerCase().startsWith(insertText)));
        });

        $scope.listaClienti = found_names;

 
    };

    $scope.filterDate = function () {
        var insertDate = $filter('date')($scope.dataSelezionata, 'dd/MM/yyyy');
        $scope.listaClienti = $scope.listaClientiBck;

        if (insertDate == null)
            return;

        var found_names = $.grep($scope.listaClienti, function (v) {
            return (v.Arrivo != null && v.Arrivo == insertDate)
                || (v.Partenza != null && v.Partenza == insertDate);
        });

        $scope.listaClienti = found_names;

    };

    $scope.filterStato = function (selectdStato) {

        var selectedStato = $scope.statoSelezionato;
        $scope.listaClienti = $scope.listaClientiBck;

        if (selectedStato == 'all') 
            return;

        var found_names = $.grep($scope.listaClienti, function (v) {
            return (v.Stato != null && v.Stato == selectedStato);
        });

        $scope.listaClienti = found_names;

    };

}]);