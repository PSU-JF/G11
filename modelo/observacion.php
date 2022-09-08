<?php
        /*Linkear Base de datos */
        include('bd/bd_conexion.php');
    class Observacion{
        //atributos
        private $cod_ob;
        private $fecha_ob;
        private $hora;
        private $asunto;
        private $observacion;
        private $fcod_pt;
        //metodos   

        //metodo construcutor
        public function __construct($cd_ob,$f,$h,$a,$fcd_p,$ob)
        {
         $this->cod_ob=$cd_ob;
         $this->fecha_ob=$f;   
         $this->hora=$h;
         $this->asunto=$a;
         $this->observacion=$ob;
         $this->fcod_pt=$fcd_p;
        }
        //metodos get
        public function getCod_ob()
        {
            return $this->cod_ob;
        }//fin getcod_ob
        public function setCod_ob($cd_ob)
        {
            $this->cod_ob = $cd_ob;
        }//fin setPcod
        public function getfecha_ob()
        {
            return $this->fecha_ob;
        }//fin getfecha
        public function setFecha($f)
        {
            $this->fecha_ob = $f;
        }//fin setFecha
        public function gethora()
        {
            return $this->hora;
        }//fin gethora
        public function sethora($h)
        {
            $this->hora = $h;
        }//fin setFecha
        public function getasunto()
        {
            return $this->asunto;
        }//fin getasunto
        public function setasunto($a)
        {
            $this->asunto = $a;
        }//fin setasunto
      
        public function getobservacion()
        {
            return $this->observacion;
        }//fin getobservacion
        public function setobservacion($b)
        {
            $this->observacion = $b;
        }//fin setasunto
        public function getfcod_pt()
        {
            return $this->fcod_pt;
        }//fin getfcod_pt
        public function setfcod_pt($fcd_p)
        {
            $this->fcod_pt = $fcd_p;
        }//fin setasunto
       
        
        
        // metodo insertar
        
        //metodo modificar

        //metodo estado

        //metodo buscar general
        public function repor_obser()
        {
            $llamar = new Conexion();
            $llamar_1 = $llamar->con();

            $sql="select ob.cod_ob,ob.fecha_ob,ob.hora,ob.asunto,ob.observacion,ob.fcod_pt,pt.nom_pt
            from observacion as ob,puesto_de_trabajo as pt
                where ob.fcod_pt = pt.cod_pt;";
            /* */
            $res = mysqli_query($llamar_1,$sql); 
            return mysqli_fetch_all($res,MYSQLI_ASSOC);

        }
        //metodo buscar fechabre
    }//fin  usuario
