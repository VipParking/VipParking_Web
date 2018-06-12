vipParkingApp.controller("prenotazioneController", ['$scope', "prenotazioneService", "$q", "$filter", function ($scope, prenotazioneService, $q, $filter) {
    $scope.selectedTipoVeicolo = '';

    $scope.selectTipoVeicolo = function (tipo) {
        $scope.selectedTipoVeicolo = tipo;
    };

    $(function () {
        $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            showDropdowns: true,
            timePicker24Hour: true,
            locale: {
                format: 'DD/MM/YYYY hh:mm A',
                "applyLabel": "Seleziona",
                "cancelLabel": "Cancella",
                "fromLabel": "Dal",
                "toLabel": "Al",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": [
                    "Do",
                    "Lu",
                    "Ma",
                    "Me",
                    "Gi",
                    "Ve",
                    "Sa"
                ],
                "monthNames": [
                    "Gennaio",
                    "Febbraio",
                    "Marzo",
                    "Aprile",
                    "Maggio",
                    "Giugno",
                    "Luglio",
                    "Agosto",
                    "Settembre",
                    "Ottobre",
                    "Novembre",
                    "Dicembre"
                ],
                "firstDay": 1
            }
        });
    });
   
}]);