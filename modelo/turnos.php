<?php
    class Turno{
        //atributos
        private $cod_turn;
        private $nom_turn;
        private $fecha_turn,
        private $hora;
          //metodos   

        //metodo construcutor
        public function __construct($cd_m,$h_e,$h_s,$f_m)
        {
         $this->cod_min=$cd_m;
         $this->hora_entrada=$h_e;   
         $this->hora_salida=$h_s;
         $this->fecha_min=$f_m;
        }
        //metodos get
        public function getCod_min()
        {
            return $this->cod_min;
        }//fin getcod_min
        public function gethora_entrada()
        {
            return $this->hora_entrada;
        }//fin gethora_entrada
        public function gethora_salida()
        {
            return $this->hora_salida;
        }//fin gethora_salida
        public function getfecha_min()
        {
            return $this->fecha_min;
        }//fin getfecha_min

        // metodo insertar
        
        //metodo modificar

        //metodo estado

        //metodo buscar general

        //metodo buscar nombre
    }//fin turnos