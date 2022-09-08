<?php
    /*Linkear Base de datos */
    include('bd/bd_conexion.php');

    /* clase de login opereacion del */
    class Login
    {
        /*Atributos */
        private $Pcod;
        private $usuario;
        private $clave;
        private $Email;
        /*Metodos*/
        /*CONSTRUCTOR */
        function __construct($pco,$us,$cl,$em)
        {
            $this->Pcod= $pco;
            $this->Usuario = $us; 
            $this->Clave = $cl;
            $this->Email = $em;


        }//fin construct
        //METODOS
        public function setPcod()
        {
            $this->Pcod = null;
        }//fin setPcod

        public function getPcod()
        {
            return $this->Pcod;
        }

        public function setUsuario($us)
        {
            $this->Usuario = $us;
        }//fin setPcod
        public function getUsuario()
        {
            return $this->Usuario;
        }
        public function setClave($cl)
        {
            $this->Clave = $cl;
        }
        public function getClave()
        {
            return $this->Clave;
        }
        public function setEmail($em)
        {
            $this->Email = $em;
        }
        public function getEmail()
        {
            return $this->Email;
        } 
        //funcion crear login
        public function Crear_Login(){}//fin crear login()

        public function Bus_Login()
        {
            /*instanciar bd */
            $llamar = new Conexion();
            $llamar_1 = $llamar->con();
            /*generar consulta */
            $sql="SELECT * FROM inicio WHERE usuario='$this->Usuario' and clave='$this->Clave';";
            /* procesar la consulta */
            $res = mysqli_query($llamar_1,$sql); 
            /* esperar respues*/
            
            $reg=mysqli_fetch_all($res);
            foreach ($reg as $valor){}
            if(empty($reg))
            {
                return $valor=1;
            }
            
                return $valor; 
        }//fin Bus_Login()
 /*FOREACHvercion mejora del ciclo para lo que cogion en una variable de texto*/
        public function Mod_Login(){}
        public function Elim_Login(){}
        public function Inac_Login(){}

        /*Metodo reporte */
        public function repor_minuta()
        {
            $llamar = new Conexion();
            $llamar_1 = $llamar->con();

            $sql="select mi.cod_min,mi.hora_entrada,mi.hora_salida,mi.fecha_min,usu.nom_usu,vi.nom_vi
            from minuta as mi, usuario as usu, vigilante as vi
                where mi.fcod_usu = usu.cod_usu and mi.fcod_vi = vi.cod_vi
                order by mi.cod_min asc;" ;
            /* */
            $res = mysqli_query($llamar_1,$sql); 
            return mysqli_fetch_all($res,MYSQLI_ASSOC);

        }
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
        }
        