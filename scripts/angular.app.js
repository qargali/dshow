var app = angular.module("myapp",['ngRoute','angularFileUpload']);

app.config(function($routeProvider){
    $routeProvider
    .when('/bax/:id',{
        templateUrl:'include/watch.php'
    }).when("/haqqimizda",{
        controller:"HeaderController",
        templateUrl:'include/info.php'
    }).
    when("/axtar/:key",{
        templateUrl:'include/main.php'
    }).
    when("/axtar/:key/:sehi",{
        templateUrl:'include/main.php'
    }).
    when("/sehife/:seh",{
        templateUrl:'include/main.php'
    })
    .otherwise({
        templateUrl:'include/main.php'
    })
});

app.controller("HeaderController", function ($routeParams) {
    document.title = "Haqqımızda - Dubbing Show";
});

app.controller("AxtarController", function ($scope) {
    $scope.key;
    $scope.axtar = function () {
        document.location.href = "#/axtar/" + $scope.key;
    }
});

app.controller("MainController", function ($http, $scope, $routeParams) {
    $scope.list;
    $scope.keyy;
    $scope.ax = false;
    $scope.checking = function () {
        if ($routeParams.key) {
            $scope.ax = true;
            $scope.keyy = $routeParams.key;
        }
    }

    $scope.checking();

    $scope.pages = [];
    document.title = "Dubbing Show";

    if ($routeParams.sehi) {
        $http.get("/include/getdatas.php?axtar=" + $routeParams.key + "&page=" + $routeParams.sehi).success(function (data) {
            $scope.list = data.list;
            $scope.count = Math.ceil(data.total / data.limit);
            $scope.sehifele();
        });
    }
    else
        if ($routeParams.key) {
            $http.get("/include/getdatas.php?axtar=" + $routeParams.key).success(function (data) {
                $scope.list = data.list;
                $scope.count = Math.ceil(data.total / data.limit);
                $scope.sehifele();
            });
        }
        else if ($routeParams.seh) {
            $http.get("/include/getdatas.php?npage=" + $routeParams.seh).success(function (data) {
                $scope.list = data.list;
                $scope.count = Math.ceil(data.total / data.limit);
                $scope.sehifele();
            });
        }
        else {
            $http.get("/include/getdatas.php").success(function (data) {
                $scope.list = data.list;
                $scope.count = Math.ceil(data.total / data.limit);
                $scope.sehifele();
            });
        }
    $scope.sehifele = function () {
        for (i = 1; i <= $scope.count; i++) {
            $scope.pages.push({ page: i });
        }
    }


});

app.controller("LastController", function ($scope, $http) {
    $scope.bar;
    $scope.url;
    $scope.caqir = function (key) {
        if (key) $scope.url = "/include/getdatas.php?limit=5";
        else $scope.url = "/include/getdatas.php?limit=5&sort=visited";
        $http.get($scope.url).success(function (data) {
            $scope.bar = data;
        });

    }
});

app.controller("BaxController", function ($http, $scope, $routeParams) {
    $scope.video;
    $scope.postID;

    $http.get("/include/getdatas.php?id=" + $routeParams.id).success(function (data) {
        $scope.video = data.list[0];
        document.title = data.list[0].title + " - Dubbing Show";
        $scope.postID = $scope.video.tags[0];

        $('#vplayer').attr('src', data.list[0].embed_url + "?related=0&html=true");
    });

});