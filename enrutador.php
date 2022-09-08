<?php
    if(isset($_GET['clase']) && isset($_GET['funcion']))
    {
        $clase = $_GET['clase'];
        $funcion = $_GET['funcion'];
        //invocar la funcion llamar
        llamar($clase,$funcion);
    }//fin If
    else
    {
        $clase = 'pagina';//Nombre control_$clave
        $funcion = 'Home';// Nombre de la funcion de la clase que se llama
        //invocar la funcion llamar
        llamar($clase,$funcion);
    }//fin else

    //Crear la funcion llamar

    function llamar($clase,$funcion)
    {
        //Llamar o Invocar cualquier archivo control_$clase de la carpeta controlador
        require_once("controlador/".$clase.".php");
        switch ($clase)
        {
            case "pagina":
                        $control = new Web();
                        break;
            case "login":/*instanciar*/
                        $control = new Logueo();
                        break;
            case "reporte"://instanciar
                        ///$control = new App();
                        break;
            case "app"://instanciar
                            $control = new Minuta();
                            break;
        }//fin switch
        //llamar la funcion
        $control->{$funcion}();
    }//fin funcion llamar
?> 