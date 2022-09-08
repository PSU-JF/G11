<?php
    class Web 
    {
        function Home()
        {
            require("vista/contenido_1/principal.php");
        }

        function Sfisica()
        {
            require("vista/contenido_1/seguridad_f.php");
        }
        function Selectro()
        {
            require("vista/contenido_1/seguridad_e.php");
        }
        function Innova()
        {
            require("vista/contenido_1/innovacion.php");
        }
        function Sector()
        {
            require("vista/contenido_1/sectores.php");
        }
        function Sincro()
        {
            require("vista/contenido_1/sincros.php");
        }
        function Consul()
        {
            require("vista/contenido_1/ases_con.php");
        }
        function Plata(Type $var = null)
        {
            require("disenio/apli.php");
        }
    }
    

    ?>