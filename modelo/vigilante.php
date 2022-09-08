<?php
    class Vigilante{
        //atributos
        private $cod_vi;
        private $nom_vi;
        private $tel_vi;
        private $ndi_vi;
        private $rh_vi;
        private $genero_vi;
        private $fcod_pt;
        private $fcod_turn;
        //metodos   

        //metodo construcutor
        public function __construct($cd_v,$n_v,$t_v,$f_m,$nd_v,$r_v,$g_v,$fcd_t,$fcd_pt)
        {
            $this->cod_vi=$cd_v;
            $this->nom_vi=$n_v;   
            $this->tel_vi=$t_v;
            $this->ndi_vi=$nd_v;
            $this->rh_vi=$r_v;
            $this->genero_vi=$g_v;
            $this->fcod_pt=$fcd_pt;
            $this->fcod_turn=$fcd_t;
        }
        //metodos get
        public function getCod_vi()
        {
            return $this->cod_vi;
        }//fin getcod_vi
        public function getnom_vi()
        {
            return $this->nom_vi;
        }//fin getnom_vi
        public function gettel_vi()
        {
            return $this->tel_vi;
        }//fin gettel_vi
        public function getndi_vi()
        {
            return $this->ndi_vi;
        }//fin getndi_vi
        public function getrh_vi()
        {
            return $this->rh_vi;
        }//fin getrh_vi
        public function getgenero_vi()
        {
            return $this->genero_vi;
        }//fin getgenero_vi
        public function getfcod_pt()
        {
            return $this->fcod_pt;
        }//fin getfcod_pt
        public function getfcod_turn()
        {
            return $this->fcod_turn;
        }//fin getfcod_turn
        
        
        
        // metodo insertar
        
        //metodo modificar

        //metodo estado

        //metodo buscar general

        //metodo buscar nombre
    }//fin vigilante
