<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sevicol</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilos/principal.css">
    <link rel="stylesheet" href="estilos/galey.css">
    
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link  rel="icon"   href="img/sevi.png" type="image/png" />
    <script type="text/javascript" src="https://counter7.stat.ovh/private/counter.js?c=hphju92mwufnj3dpy1k72bmcwpleg167&down=async" async></script>
    


</head>
<body>

    <?php
            include("disenio/header.php"); 
    ?>

    <section>
            <?php
            include("enrutador.php");
            ?>
    </section>
        
    <?php
        include("disenio/footer.php");
    ?>






    <script>
    window.addEventListener("load", function(){
            document.getElementById("loader").classList.toggle("loader2")
        })
    
    </script>
    <script src="js/script.js"></script>
</body>
</html>