<?php
    class Conexion
    {
        //crear funcion
        public static function con()
        {
            try
            {
                $conexion=mysqli_connect("localhost","root","","sevicol_v1")or die("NO SE PUDO REALIZAR LA CONEXION A LA BASE DE DATOS ERROR-404");
                return $conexion;/* Ju2n5ebAstian_ esta es la contraseña del servidor web
  */           }//fin try
            catch(Exception $e)
            {
                echo"Error al conectar con la BD $e";
            }//fin catch

        }//fin funcion

    }//fin clase Conexion
    //Validar conexion a la base de datos
    
    
   /*  $prueba = new Conexion();
    if ($prueba->con())
    {
        echo"SI hay conexion a la Base de datos";
    }//fin If
    else
    {
        echo"NO hay conexion a la Base de datos";
    }//fin else
    */
    
?>