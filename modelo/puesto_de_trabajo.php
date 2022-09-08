<?php
    class Puesto_trabajo{
        //atributos
        private $cod_pt;
        private $nom_pt;
        private $tel_pt;
        private $dir;
        private $fcod_mat;
        //metodos   

        //metodo construcutor
        public function __construct($cd_pt,$n_pt,$t_pt,$d_pt,$fcd_m)
        {
         $this->cod_pt=$cd_pt;
         $this->nom_pt=$n_pt;   
         $this->tel_pt=$t_pt;
         $this->dir=$d_pt;
         $this->fcod_mat=$fcd_m;
        }
        //metodos get
        public function getCod_pt()
        {
            return $this->cod_pt;
        }//fin getcod_pt
        public function getnom_pt()
        {
            return $this->nom_pt;
        }//fin getpt_usu
        public function gettel_pt()
        {
            return $this->tel_pt;
        }//fin gettel_pt
        public function getndi_usu()
        {
            return $this->ndi_usu;
        }//fin getndi_usu
        public function getdir()
        {
            return $this->dir;
        }//fin getdir
        public function getfcod_mat()
        {
        }//fin getfcod_mat
       
        
        
        // metodo insertar
        
        //metodo modificar

        //metodo estado

        //metodo buscar general

        //metodo buscar nombre
    }//fin  usuario
