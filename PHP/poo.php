<?php

    class asadera {

        // creamos propiedad
        /*

        public: la propiedad se puede acceder fuera de la clase y es heredable

        private: La propiedad no puede ser accedida fuera de la clase y no es heredable

        protected: La propiedad no se puede acceder fuera de la clase y es heredable


        */

        //atributos
        public $material;
        public $color;
        private $tamanio;
        public $forma;
        protected $temperatura;

        // metodos

        public function obtenerTemperatura(){

            return $this->temperatura;
            
        }

        public function calentar(){
            /* este metodo se encarga de subir la temperatura de la asadera */
            $this->temperatura  = $this->temperatura +10;

        }

        public function enfriar(){
            /* este metodo se encarga de bajar la temperatura de la asadera */
            $this->temperatura  = $this->temperatura -10;


        }

        public function construct($material,$color,$tamanio,$forma){

            /* este metodo se encarga de construir la clase */
            $this->material     = $material;
            $this->color        = $color;
            $this->tamanio      = $tamanio;
            $this->forma        = $forma;
            $this->temperatura  = 20;

        }


    }

    $objAsadera = new asadera();
    $objAsadera->construct("Acero","Verde","20x20","Rectangular");

    print_r($objAsadera->material);
    echo("<br>");
    print_r($objAsadera->forma);
    echo("<br>");
    //print_r($objAsadera->tamanio);
    echo("<br>");
   // print_r($objAsadera->temperatura);
    echo("<br>");
    print_r($objAsadera->obtenerTemperatura());
    echo("<br>");

    $objAsadera->forma = "Edificio";
    print_r($objAsadera->forma);
    $objAsadera->calentar();
    echo("<br>");
    print_r("Temperatura:".$objAsadera->obtenerTemperatura());
    $objAsadera->enfriar();
    echo("<br>");
    print_r("Temperatura:".$objAsadera->obtenerTemperatura());
















?>