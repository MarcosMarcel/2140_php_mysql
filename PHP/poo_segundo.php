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

    class asadera_pizza extends asadera{


        public function construct($material,$color,$tamanio,$forma){

            /* este metodo se encarga de construir la clase */
            parent::construct($material,$color,$tamanio,$forma);
            $this->material     = "Acero";
         

        }
    }

    $objAsadera = new asadera();
    $objAsadera->construct("Hierro","Verde","20x20","Rectangular");
    $objAsaderaPizza = new asadera_pizza();
    $objAsaderaPizza->construct("Hierro","Verde","20x20","Rectangular");
    print_r($objAsaderaPizza->material);
    echo("<hr>");
    print_r($objAsadera->material);


   ?>
