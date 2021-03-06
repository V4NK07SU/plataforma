(function () {
    'use strict';

    angular
        .module('app.modules.agendas.devexpress.scheduler')
        .controller('AgendasDevxSchedulerCtrl', ControllerCtrl)

    ControllerCtrl.$inject = ['$scope', '$window'];
    /** @ngInject */
    function ControllerCtrl($scope, $window) {
        /*
        console.log(navigator.language || navigator.browserLanguage);
        $.when(
            $.getJSON("vendors/globalize/main/es-CO/ca-gregorian.json"),
            $.getJSON("vendors/globalize/main/es-CO/numbers.json"),
            $.getJSON("vendors/globalize/main/es-CO/currencies.json"),
            $.getJSON("vendors/globalize/supplemental/likelySubtags.json"),
            $.getJSON("vendors/globalize/supplemental/timeData.json"),
            $.getJSON("vendors/globalize/supplemental/weekData.json"),
            $.getJSON("vendors/globalize/supplemental/currencyData.json"),
            $.getJSON("vendors/globalize/supplemental/numberingSystems.json")
        ).then(function () {
            //The following code converts the got results into an array
            return [].slice.apply(arguments, [0]).map(function (result) {
                return result[0];
            });
        }).then(
            Globalize.load //loads data held in each array item to Globalize
            ).then(function () {
                //initialize your application here
                $.get("vendors/devexpress/localization/dx.messages.es.json");
                //Globalize.locale('es');
                DevExpress.localization.locale("es");
            });
            */
        /*$.when(
            $.get("vendors/devexpress/localization/dx.messages.es.json")
        ).then(function (data) {
            Globalize.loadMessages(data);
        });*/

        //DevExpress.localization.locale("es");
        var vm = this;

        function showToast(event, value, type) {
            DevExpress.ui.notify(event + " \"" + value + "\"" + " task", type, 800);
        }

        $scope.options = {
            dataSource: data,
            views: ["month", "week", "workWeek", "day"],
            currentView: "workWeek",
            currentDate: new Date(2015, 4, 25),
            firstDayOfWeek: 0,
            startDayHour: 8,
            endDayHour: 19,
            onAppointmentAdded: function (e) {
                showToast("Added", e.appointmentData.text, "success");
            },
            onAppointmentUpdated: function (e) {
                showToast("Updated", e.appointmentData.text, "info");
            },
            onAppointmentDeleted: function (e) {
                showToast("Deleted", e.appointmentData.text, "warning");
            },
            /*groups: ["priorityId"],*/
            resources: [{
                fieldExpr: "priorityId",
                allowMultiple: false,
                dataSource: priorityData,
                label: "Priority"
            }, {
                fieldExpr: "typeId",
                allowMultiple: false,
                dataSource: typeData,
                label: "Type"
            }],
            width: "100%",
            height: 600
        };
    }

    init();

    function init() {

    }

    var data = [{
        text: "Walking a dog",
        priorityId: 1,
        typeId: 1,
        startDate: new Date(2015, 4, 25, 8, 0),
        endDate: new Date(2015, 4, 25, 8, 30),
        recurrenceRule: "FREQ=DAILY;BYDAY=MO,TU,WE,TH,FR;UNTIL=20150530"
    },
    {
        text: "Website Re-Design Plan",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 25, 9, 0),
        endDate: new Date(2015, 4, 25, 11, 30)
    }, {
        text: "Book Flights to San Fran for Sales Trip",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 25, 12, 0),
        endDate: new Date(2015, 4, 25, 13, 0)
    }, {
        text: "Install New Router in Dev Room",
        priorityId: 1,
        typeId: 2,
        startDate: new Date(2015, 4, 25, 14, 30),
        endDate: new Date(2015, 4, 25, 15, 30)
    }, {
        text: "Go Grocery Shopping",
        priorityId: 1,
        typeId: 1,
        startDate: new Date(2015, 4, 25, 18, 30),
        endDate: new Date(2015, 4, 25, 19, 30),
        recurrenceRule: "FREQ=DAILY;BYDAY=MO,WE,FR;UNTIL=20150530"
    }, {
        text: "Approve Personal Computer Upgrade Plan",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 26, 10, 0),
        endDate: new Date(2015, 4, 26, 11, 0)
    }, {
        text: "Final Budget Review",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 26, 12, 0),
        endDate: new Date(2015, 4, 26, 13, 35)
    }, {
        text: "New Brochures",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 26, 14, 30),
        endDate: new Date(2015, 4, 26, 15, 45)
    }, {
        text: "Install New Database",
        priorityId: 1,
        typeId: 2,
        startDate: new Date(2015, 4, 27, 9, 45),
        endDate: new Date(2015, 4, 27, 11, 15)
    }, {
        text: "Approve New Online Marketing Strategy",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 27, 12, 0),
        endDate: new Date(2015, 4, 27, 14, 0)
    }, {
        text: "Upgrade Personal Computers",
        priorityId: 1,
        typeId: 2,
        startDate: new Date(2015, 4, 27, 15, 15),
        endDate: new Date(2015, 4, 27, 16, 30)
    }, {
        text: "Prepare 2015 Marketing Plan",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 28, 11, 0),
        endDate: new Date(2015, 4, 28, 13, 30)
    }, {
        text: "Brochure Design Review",
        priorityId: 1,
        typeId: 2,
        startDate: new Date(2015, 4, 28, 14, 0),
        endDate: new Date(2015, 4, 28, 15, 30)
    }, {
        text: "Create Icons for Website",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 29, 10, 0),
        endDate: new Date(2015, 4, 29, 11, 30)
    }, {
        text: "Upgrade Server Hardware",
        priorityId: 1,
        typeId: 2,
        startDate: new Date(2015, 4, 29, 14, 30),
        endDate: new Date(2015, 4, 29, 16, 0)
    }, {
        text: "Submit New Website Design",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 29, 16, 30),
        endDate: new Date(2015, 4, 29, 18, 0)
    }, {
        text: "Launch New Website",
        priorityId: 2,
        typeId: 2,
        startDate: new Date(2015, 4, 29, 12, 20),
        endDate: new Date(2015, 4, 29, 14, 0)
    }, {
        text: "Visiting a Doctor",
        priorityId: 2,
        typeId: 1,
        startDate: new Date(2015, 4, 30, 10, 0),
        endDate: new Date(2015, 4, 30, 13, 30)
    }
    ];


    var priorityData = [{
        text: "Low Priority",
        id: 1,
        color: "#fcb65e"
    }, {
        text: "High Priority",
        id: 2,
        color: "#e18e92"
    }
    ];

    var typeData = [{
        text: "Home",
        id: 1,
        color: "#b6d623"
    }, {
        text: "Work",
        id: 2,
        color: "#679ec5"
    }
    ];

}());
