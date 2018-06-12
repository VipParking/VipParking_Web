vipParkingApp.factory('prenotazioneService', ['$http', '$q', function ($http, $q) {
  
    var _setPrenotazione = function (valori) {
        var deferred = $q.defer();

        $http.post('Api/setPrenotazione.php', valori)
            .then(function (result) {
                // Success
                //angular.copy(result.data, _elencoUtenti);
                                
                deferred.resolve();
            },
                function () {
                    // Error
                    deferred.reject();
                })

        return deferred.promise;
    };


    return {
        setPrenotazione: _setPrenotazione
    };
}]);