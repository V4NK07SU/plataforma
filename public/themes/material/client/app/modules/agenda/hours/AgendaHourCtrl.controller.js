/**
 *
 */
(function() {
    'use strict';

    angular.module('app.modules.agenda.hours')
        .controller('AgendaHourCtrl', ['$scope', '$window', AgendaHourCtrl])
        .controller('AgendaHourIndexCtrl', [
            '$scope', '$window', '$state', 'AgendaHourSrv', 'ToastService', 'DialogService','$http', 'moment',
            AgendaHourIndexCtrl])
        .controller('AgendaHourShowCtrl', ['$scope', '$window', AgendaHourShowCtrl])
        .controller('AgendaHourCreateCtrl', ['$scope', '$window', 'moment', 'AgendaHourSrv','ToastService','$state', AgendaHourCreateCtrl])
        .controller('AgendaHourEditCtrl', [
            '$scope', '$window', '$stateParams', 'moment', 'AgendaHourSrv', 'ToastService', '$state', 'hours',
            AgendaHourEditCtrl])
        .controller('AgendaHourFormCtrl', ['$scope', '$window', AgendaHourFormCtrl]);

    /**
     *
     * @param $scope
     * @param $window
     * @constructor
     */
    function AgendaHourCtrl($scope, $window) {

    }

    /**
     *
     * @param $scope
     * @param $window
     * @constructor
     */
    function AgendaHourIndexCtrl($scope, $window, $state, AgendaHourSrv, ToastService, DialogService, $http, moment) {


        var vm = this;
        vm.data = {};        
        $scope.data = {};
        $scope.hour={};
   
        //Index
        $scope.data = AgendaHourSrv.get(
            
            
            function (response) {
                ToastService.info('Se obtuvieron las horas!');
                /*
                angular.forEach(response.data, function(v, i) {
                    $scope.hours[i] = v;
                });
                */
                $scope.data = response;
            },
            function (response) {
                ToastService.error('Ocurrio un error cargando las horas!');
            });

        //edit
        $scope.editHour = function (id) {
            $state.go('agenda/hour/edit', { id: id });
        };

        
        //create
       $scope.new = function () {
            $state.go('agenda/hour/create');
        };

        //Paginate
        
        $scope.loadPage = function(url) {
            $http.get(url).success(function (res) {                
                $scope.data = res;
            }).error(function(res) {
                alert('error');
            });
        };

        $scope.search = function (keyword) {
            
         if (keyword == null || keyword ==""){
                 $scope.data= AgendaHourSrv.get();
                 console.log("keyword");
                 $scope.keyword="";
             }
             if (keyword){
            
            $http.get ( SITE_URL + '/api/agendas/horas/search/' + keyword).success(function (res){

                $scope.data=res;
                $scope.keyword="";
            
            }).error(function(res){
                alert('error');
            });
        }
    };

    
   


            
        


        //ELIMINAR HOUR

       $scope.deleteHour = function (hour) {

           //console.log(authorId);
            DialogService.confirm('Eliminar Hora', 'Desea continuar?')
            .then(() => {
                AgendaHourSrv.delete({ id: hour.id }, function (response) {
                    $scope.data.data.splice($scope.data.data.indexOf(hour), 1);
                    ToastService.success(response.message);
                }, function (error) {
                    ToastService.error(error.data.message);
                }).$promise;
            });


        };

            

    }

    /**
     *
     * @param $scope
     * @param $window
     * @constructor
     */
    function AgendaHourShowCtrl($scope, $window) {

    }

    /**
     *
     * @param $scope
     * @param $window
     * @constructor
     */
    function AgendaHourCreateCtrl($scope, $window, moment, AgendaHourSrv, ToastService, $state) {
        $scope.formUrl = THEME_URL + '/app/modules/agenda/hours/views/hour-form.html';

        $scope.hours = {};

        console.log($scope.hours);

        $scope.save = function() {  
            $scope.hours.start_at = moment($scope.hours.start_at).format('YYYY-MM-DD');// dateFilter($scope.start_at, 'yyyy-mm-dd');
            $scope.hours.ends_at = moment($scope.hours.ends_at).format('YYYY-MM-DD'),//dateFilter($scope.ends_at, 'yyyy-mm-dd');
            console.log($scope.hours);
            AgendaHourSrv.save($scope.hours,
                function(response) {
                    console.log(response);
                    ToastService.success(response.message);
                    $state.go('agenda/hour');
                }, function(response) {
                    console.log(response);
                    angular.forEach(response.data.errors, function(v, i) {
                        ToastService.error(v[0]);
                    });
                });
        }

        //CANCEL CREATE
       $scope.cancel = function (id) {
            $state.go('agenda/hour');
        };

    
    }

    /**
     *
     * @param $scope
     * @param $window
     * @constructor
     */
    function AgendaHourEditCtrl($scope, $window, $stateParams, moment, AgendaHourSrv, ToastService, $state, hours) {
        $scope.formUrl = THEME_URL + '/app/modules/agenda/hours/views/hour-form.html';
        //console.log($stateParams.id);
        $scope.hours = {};
        $scope.hours = hours;

        $scope.hours.start_at = new Date($scope.hours.start_at);
        $scope.hours.ends_at = new Date($scope.hours.ends_at);

        console.log($scope.hours);

        $scope.save = function() {            
            console.log($scope.hours);                      
            $scope.hours.start_at = moment($scope.hours.start_at).format('YYYY-MM-DD');// dateFilter($scope.start_at, 'yyyy-mm-dd');
            $scope.hours.ends_at = moment($scope.hours.ends_at).format('YYYY-MM-DD'),//dateFilter($scope.ends_at, 'yyyy-mm-dd');
            AgendaHourSrv.save($scope.hours,
                function(response) {
                    console.log(response);
                    ToastService.success(response.message);
                    $state.go('agenda/hour');

                },
                function(response) {
                    console.log(response);
                    angular.forEach(response.data.errors, function(v, i) {
                        ToastService.error(v[0]);
                    });
                });
        }

         $scope.cancel = function (id) {
            $state.go('agenda/hour');
        };


 
    }

    /**
     *
     * @param $scope
     * @param $window
     * @constructor
     */
    function AgendaHourFormCtrl($scope, $window) {

    }

})();