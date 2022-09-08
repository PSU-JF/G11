<?php
    class Usuario{
        //atributos
        private $cod_usu;
        private $nom_usu;
        private $tel_usu;
        private $ndi_usu;
        private $rh_usu;
        private $$obj_usu;
        //metodos   

        //metodo construcutor
        public function __construct($cd_u,$n_u,$t_u,$nd_u,$rh_u,$o_u)
        {
         $this->cod_usu=$cd_u;
         $this->nom_usu=$n_u;   
         $this->tel_usu=$t_u;
         $this->ndi_usu=$nd_u;
         $this->rh_usu=$rh_u;
         $this->$obj_usu=$o_u;
        }
        //metodos get
        public function getCod_usu()
        {
            return $this->cod_usu;
        }//fin getcod_usu
        public function getnom_usu()
        {
            return $this->nom_usu;
        }//fin getnom_usu
        public function gettel_usu()
        {
            return $this->tel_usu;
        }//fin gettel_usu
        public function getndi_usu()
        {
            return $this->ndi_usu;
        }//fin getndi_usu
        public function getrh_usu()
        {
            return $this->rh_usu;
        }//fin getrh_usu
        public function getobj_usu()
        {
            return $this->$obj_usu;
        }//fin getobj_usu
       
        
        
        // metodo insertar
        
        //metodo modificar

        //metodo estado

        //metodo buscar general

        //metodo buscar nombre
    }//fin  usuario
