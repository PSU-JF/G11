<?php
    class Minuta{
        //atributos
        private $cod_min;
        private $hora_entrada;
        private $hora_salida,
        private $fecha_min;
        private $fcod_usu;
        private $fcod_pt;
        private $fcod_vi;
        //metodos   

        //metodo construcutor
        public function __construct($cd_m,$h_e,$h_s,$f_m,$fcd_u,$fcd_pt,$fcd_v)
        {
         $this->cod_min=$cd_m;
         $this->hora_entrada=$h_e;   
         $this->hora_salida=$h_s;
         $this->fecha_min=$f_m;
         $this->fcod_usu=$fcd_u;
         $this->fcod_pt=$fcd_pt;
         $this->fcod_vi=$fcd_v;
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
        public function getfcod_usu()
        {
            return $this->fcod_usu;
        }//fin getfcod_usu
        public function getfcod_pt()
        {
            return $this->fcod_pt;
        }//fin getfcod_pt
        public function getfcod_vi()
        {
            return $this->fcod_vi;
        }//fin getfcod_vi
        
        
        
        // metodo insertar
        
        //metodo modificar

        //metodo estado

        //metodo buscar general

        //metodo buscar nombre
    }//fin minuta
