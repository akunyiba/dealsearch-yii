'use strict';
adApp_ad.factory("services", ['$http','$location','$route','toasty',
    function($http,$location,$route,toasty) {

        var successHandler = function(result){
            $location.path('/ad/main');
        };

        var getAds = function(){
            return $http.get(serviceBase + 'ads');
        };
        var createAd = function (ad) {
            return $http.post(serviceBase + 'ads', ad)
                .then(successHandler)
                .catch(errorHandler);

            function errorHandler(result){
                alert("Error data");
                $location.path('/ad/create');
            }
        };
        var getAd= function(adID){
            return $http.get(serviceBase + 'ads/' + adID);
        };

        var getCityOptions = function(){
            return $http.get(serviceBase + 'city/');
        };

        var getCategoryOptions = function(){
            return $http.get(serviceBase + 'category/');
        };

        var updateAd = function (ad) {
            return $http.put(serviceBase + 'ads/' + ad.id, ad )
                .then(successHandler)
                .catch(errorHandler);
            function errorHandler(result){
                alert("Error data");
                $location.path('/ad/update/' + ad.id)
            }
        };
        var deleteAd = function (adID) {
            return $http.delete(serviceBase + 'ads/' + adID)
                .then(successHandler)
                .catch(errorHandler);
            function successHandler(result) {
                $route.reload();
            }
            function errorHandler(result){
                alert("Error data");
                $route.reload();
            }
        };
        var showNotification = function(type,message) {
            toasty[type]({msg:message});
        };
        return {
            getAds:getAds,
            createAd:createAd,
            getAd: getAd,
            getCityOptions: getCityOptions,
            getCategoryOptions: getCategoryOptions,
            updateAd: updateAd,
            deleteAd: deleteAd,
            showNotification: showNotification
        }
    }]);