vipParkingApp.factory('listatoUtentiService', ['$http', '$q', function ($http, $q) {
    var _elencoUtenti = [];

    var _getElencoUtenti = function (filtri) {
        var deferred = $q.defer();

        $http.post('Api/getElencoUtenti.php', filtri)
            .then(function (result) {
                // Success
                angular.copy(result.data, _elencoUtenti);

                $.each(_elencoUtenti, function (i, val) {
                    _elencoUtenti[i] = JSON.parse(val);
                });
                deferred.resolve();
            },
                function () {
                    // Error
                    deferred.reject();
                })

        return deferred.promise;
    };


    return {
        getElencoUtenti: _getElencoUtenti,
        elencoUtenti: _elencoUtenti
    };
}]);