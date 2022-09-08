<?php
    include('modelo/clase_login.php');
    class Logueo
    {
         public function registrar()
         {
             //llamar al formulario login restro
            include("vista/login/login_registro.php");       
        }

         public function validar()
         {
             //llamar al formulario login restro
             include("vista/login/login_inicio.php");       
         }
         //REPORTE USUARIOS
         public function reporte_clave()
         {
             /*INSTANCIAR */
             $reporte = new login(null,null,null,null);
             //llamar funcion usuarios
            $imp = $reporte->repor_minuta();
            $emp = $reporte->repor_obser();
            //var_dump($imp);
             //llamar al formulario 
             include("vista/app/principal.php");       
         }


         public function inicio()
         {
             /*verifica datos*/
             $usu1=$_POST['tx_user'];
             $pass1=$_POST['tx_pass'];

             /*seguimiento a variables */
             //var_dump($usu1);
             //var_dump($pass1);
             //instanciar
             $user = new Login(null,$usu1,$pass1,null);
             /*esperar respuesta */
             $res1 = $user->Bus_Login();
             /* validar la respuesta*/
             if($res1 != 1)
             {
                echo "la contraseña es reconocida";
                $this->reporte_clave();
             }//fin if
             else 
             {
                echo "no existe la contraseña";
                $this->validar();
             }//fin else
             

    
         }

    }//Fin Clase 
?>
