vipParkingApp.factory('listatoClientiService', ['$http', '$q', function ($http, $q) {
    var _elencoClienti = [];

    var _getElencoClienti = function (filtri) {
        var deferred = $q.defer();

        $http.post('../Api/getElencoClienti.php', filtri)
            .then(function (result) {
                // Success
                angular.copy(result.data, _elencoClienti);

                $.each(_elencoClienti, function (i, val) {
                    _elencoClienti[i] = JSON.parse(val);
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
        getElencoClienti: _getElencoClienti,
        elencoClienti: _elencoClienti
    };
}]);