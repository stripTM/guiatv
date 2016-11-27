// Namespace for the library
var Guia = {};

// Library definition
Guia = (function () {
  // Private variables / properties
  var
    $guia,
    $ers;

  // Private methods
  function distribuye() {
      var
        inicio = 0,
        duracion = 0;
    $ers.forEach(
        function(item) {
              duracion = Math.floor(Math.random() * 1000);
              item.style.left = inicio+'px';
              item.style.width = duracion+'px';
              inicio += duracion;
              inicio = inicio % anchoGuia ;
              //console.log(inicio, anchoGuia);
          }
      );
  }

  function initSlider() {
      var slider = document.querySelector("#slider");
      slider.addEventListener("input", function (e) {
          var inicioVentana = -Math.floor(anchoGuia * e.currentTarget.value / 100);
          $guia.style.left = inicioVentana+'px';
          //console.log( inicioVentana );
      });
  }

    // Public API
    return {
    init: function () {
        $guia = document.querySelector("#eventos");
        anchoGuia = $guia.clientWidth;
        $ers = document.querySelectorAll("#guia .evento");
        distribuye();
        initSlider();
        //console.log("Inicio", anchoGuia);
    },
    getErs: function () {
        console.log("otro");
        return $ers;
    }
    };
}());

Guia.init();
//console.log(Guia.getErs());
