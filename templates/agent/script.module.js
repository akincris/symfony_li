var app = angular.module('myApp', []);


app.service('square', function () {
    this.squareFunction = function (x) {
        return x * x;
    }
});


app.controller('myCtrl', function ($scope, $http) {
    $scope.title = 'LUCRU INDIVIDUAL';
    $scope.limit = 0;
    $scope.xz = [
      {
        id: 1
      },
      {
          id: 2 
        },
      {
        id: 3
      }
      ]
   
    $scope.items = [
      {
        id: 1,
        Nume: 'Ursu', 
        Prenume: 'Maria',
        Patronumic: 'Ion',
        Adresa: 'Chisinau, Botanica',
        Telefon: '027209820',
        Sucursala: ''
      },
      {
          id: 2,
          Nume: 'Astank', 
          Prenume: 'Alexander',
          Patronumic: 'Oleg',
          Adresa: 'Cahul, Negrii', 
          Telefon: '028938420',
          Sucursala: ''
        },
      {
        id: 3,
        Nume: 'Martinskii', 
        Prenume: 'Max',
        Patronumic: 'Ion',
        Adresa: 'Chisinau, Ciocana', 
        Telefon: '012917424',
        Sucursala: ''
      },
      {
        id: 4,
        Nume: 'Busuioc', 
        Prenume: 'Ana',
        Patronumic: 'Grigorii',
        Adresa: 'Cahul, Rosu', 
        Telefon: '094583274',
        Sucursala: ''
      },
      {
        id: 5,
        Nume: 'Asenii', 
        Prenume: 'Gabriela',
        Patronumic: 'Max',
        Adresa: 'Hancesti, Leuseni', 
        Telefon: '019730735',
        Sucursala: ''
      },
      {
        id: 6,
        Nume: 'Vordin',
        Prenume: 'Nelli',
        Patronumic: 'Alexei',
        Adresa: 'Chisinau, Botanica', 
        Telefon: '079270421',
        Sucursala: ''
      }
      ]

      $http.get("agent.php")
      .then(function (response) {
        console.log(response.data)
      });

      $scope.filter = '';
    $scope.limiting = () =>{
       var l = document.getElementById('limit').value;
        $scope.limit =l;
      }
      $scope.getFilter = () => {
        document.getElementById('constraint').style.display = 'none';
        $scope.filter = document.getElementById('selectedFilter').value;
      }
      $scope.filterFunction = () =>{
       
        var constraint = document.getElementById('constraint').value;
        let filteredItems;

        if($scope.filter === "Name"){
            filteredItems = $scope.items.filter( i => i.Nume === constraint);
          document.getElementById('constraint').style.display = 'inline';
        }
        
        if($scope.filter === "Sucursale")
          filteredItems = ( $scope.items).filter( i => i.Adresa === constraint).slice(0, $scope.limit)    
        else {
          return $scope.items.slice(0, $scope.limit);}
        return filteredItems;
      }

      $scope.showContracts = (id) => {
     var e = document.getElementById(id);
        if(e.style.display == 'none') {
          document.getElementById(id).style.display = 'inline';
      } else {
        document.getElementById(id).style.display = 'none';
      }
      }

      $scope.calcSalary = () => {
        console.log('jel')
        // Salariul este calculat  din plata asigurării (plata asigurării este suma asigurată, 
        //înmulțit cu rata tarifară).Procentul depinde de tipul de asigurare cu care se încheie contractul.
         let agentID = document.getElementById('agentID').value;
         let salary = 100;
         document.getElementById('salary').innerHTML =  salary + '$';

      }
});
