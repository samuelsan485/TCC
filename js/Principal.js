angular
  .module("yvonneApp", ["ui.bootstrap", "ui.router"])
  .config(function ($stateProvider, $urlRouterProvider, $locationProvider) {
    $urlRouterProvider.otherwise("/");

    $stateProvider
      .state("default", {
        url: "/",
        templateUrl: "/default.tpl",
        controller: "MainCtrl"
      })
      .state("photoGallery", {
        url: "/photo-gallery",
        templateUrl: "/photoGallery.tpl",
        controller: "PhotoGalleryCtrl"
      })
      .state("pricing", {
        url: "/pricing",
        templateUrl: "/pricing.tpl",
        controller: "PricingCtrl"
      })
      .state("contact", {
        url: "/contact",
        templateUrl: "/contact.tpl",
        controller: "ContactCtrl",
        data: {
          shrinkHero: true
        }
      });

    $locationProvider.html5Mode(true);
  })
  .run(function ($rootScope) {
    $rootScope.currentTime = new Date();
    $rootScope.$on("$stateChangeSuccess", function (evt, state) {
      $rootScope.shrunkenHero = !!state.data && !!state.data.shrinkHero;
    });
  })
  .controller("MainCtrl", function ($scope) {})
  .controller("PhotoGalleryCtrl", function ($scope) {
    $scope.galleries = [
      {
        title: "Gallery 1",
        description:
          "Bacon ipsum dolor amet tenderloin chuck porchetta rump, meatloaf ball tip pig pancetta turkey pork chop. Ground round pork loin bacon hamburger pork t-bone. Short ribs hamburger venison alcatra ham prosciutto cow t-bone filet mignon tenderloin. Drumstick filet mignon pig porchetta prosciutto short ribs cupim bresaola pork kevin tri-tip ham hock kielbasa.",
        images: [
          {
            title: "Image Title 1",
            description: "Image Description 1",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_8476297.jpg"
          },
          {
            title: "Image Title 2",
            description: "Image Description 2",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_7989751.jpg"
          },
          {
            title: "Image Title 3",
            description: "Image Description 3",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_6220072.jpg"
          },
          {
            title: "Image Title 4",
            description: "Image Description 4",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_8385841.jpg"
          },
          {
            title: "Image Title 5",
            description: "Image Description 5",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_851946.jpg"
          },
          {
            title: "Image Title 6",
            description: "Image Description 6",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_6107515.jpg"
          },
          {
            title: "Image Title 7",
            description: "Image Description 7",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_2851208.jpg"
          },
          {
            title: "Image Title 8",
            description: "Image Description 8",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_5180167.jpg"
          },
          {
            title: "Image Title 9",
            description: "Image Description 9",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_6145417.jpg"
          },
          {
            title: "Image Title 10",
            description: "Image Description 10",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_8951641.jpg"
          },
          {
            title: "Image Title 11",
            description: "Image Description 11",
            src:
              "https://s3-us-west-2.amazonaws.com/s.cdpn.io/59627/yws_359730.jpg"
          }
        ]
      }
    ];
    $scope.shadowBox = function (image, gallery) {
      $scope.showingShadowBox = true;
      $scope.sbImage = image;
      $scope.sbGallery = gallery;
    };
    $scope.closeShadowBox = function () {
      $scope.showingShadowBox = false;
      delete $scope.sbImage;
      delete $scope.sbGallery;
    };
    $scope.shadowBoxStep = function (dir) {
      var gallery = $scope.sbGallery || {},
        galleryImgs = gallery.images || [],
        curIndex = galleryImgs.indexOf($scope.sbImage);

      if (galleryImgs.length < 2) return; // no stepping needed.

      if (curIndex > -1) {
        var newIndex = curIndex + dir;
        if (newIndex < 0) {
          // go to end
          newIndex = galleryImgs.length - 1;
        } else if (newIndex > galleryImgs.length - 1) {
          // go to beginning
          newIndex = 0;
        }

        $scope.shadowBox(galleryImgs[newIndex], gallery);
      }
    };
  })
  .controller("PricingCtrl", function ($scope) {
    $scope.services = [
      {
        name: "Service 1",
        description:
          "Bacon ipsum dolor amet tenderloin chuck porchetta rump, meatloaf ball tip pig pancetta turkey pork chop. Ground round pork loin bacon hamburger pork t-bone.",
        cost: 75
      },
      {
        name: "Service 2",
        description:
          "Short ribs hamburger venison alcatra ham prosciutto cow t-bone filet mignon tenderloin. Drumstick filet mignon pig porchetta prosciutto short ribs cupim bresaola.",
        cost: 115
      },
      {
        name: "Service 3",
        description:
          " Turducken pork belly ground round, tail ball tip pork loin sausage prosciutto ribeye t-bone pig beef.",
        cost: 125
      },
      {
        name: "Service 4",
        description:
          "Alcatra pork leberkas ball tip corned beef tenderloin, jowl fatback picanha landjaeger biltong prosciutto flank shankle.",
        cost: 135
      },
      {
        name: "Service 5",
        description:
          "Ball tip spare ribs doner shoulder tri-tip capicola swine ground round biltong ribeye chuck pork brisket porchetta.",
        cost: 200
      }
    ];
  })
  .controller("ContactCtrl", function ($scope) {});
