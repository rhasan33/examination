"use strict";

var app = angular.module("OnlineExamination", ["ngMaterial", "ui.router"]);

app.config(function($stateProvider, $urlRouterProvider, $mdThemingProvider, $httpProvider){
  $urlRouterProvider.otherwise("/login");

  $stateProvider
      .state('login',{
        url: '/login',
        templateUrl: 'app/login/login.html',
        controller: 'loginCtrl',
        authenticate: true
    });
});
