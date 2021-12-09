var app = angular.module("home", [])
.controller('homeController', function($scope,$http){   
    $scope.typewriter = function () {
        const typed = new Typed('.typed', {
            strings: [
                'proyectos.',
                'ideas.',
                'negocios.'
            ],
            stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar en lugar de los strings.
            typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
            startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
            backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
            smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
            shuffle: false, // Alterar el orden en el que escribe las palabras.
            backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
            loop: true, // Repetir el array de strings
            loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
            showCursor: true, // Mostrar cursor palpitanto
            cursorChar: '|', // Caracter para el cursor
            contentType: 'html', // 'html' o 'null' para texto sin formato
        });
    }


    //fecha = new Date().toLocaleString('en-US', { timeZone: 'America/Mexico_City' });
    //$scope.fecha=fecha.toISOString().replace('T',' ').split('.')[0];
    
    $scope.contactar = function () {
        if($scope.nombre != "" && $scope.telefono != "" && $scope.correo != "" && $scope.mensaje != "" && $scope.cp != ""){
            $http({
                method: 'POST',
                url: '/contactar',
                params: {
                    //fecha: $scope.fecha,
                    nombre: $scope.nombre,
                    telefono: $scope.telefono,
                    correo: $scope.correo,
                    mensaje: $scope.mensaje,
                    cp: $scope.cp,
                }
            })
            .then(function() {
                Swal.fire(
                    'Mensaje enviado!',
                    'Pronto nos pondremos en contacto contigo.',
                    'success'
                );

            }
            ,function() { 
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Lo sentimos algo salió mal',
                });
            });

            $scope.nombre = "";
            $scope.telefono = "";
            $scope.correo = "";
            $scope.mensaje = "";
            $scope.cp = "";
        }
        
    };
})