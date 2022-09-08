<?php 
    require("modelo/clase_login.php");
    class Minuta
    {
        //REPORTE minuta
        public function reporte_personal()
        {
            /*INSTANCIAR */
            $reporte = new Minuta(null,null,null,null,null,null,null);
            //llamar funcion reporte
            $imp = $reporte->repor_minuta();
            //llamar funcion reporte
            $emp = $reporte->repor_obser();
            //var_dump($imp);
            //exit();
            //llamar al formulario 
            include("vista/app/principal.php");       
        }



    }//Fin Clase minuta
?>
