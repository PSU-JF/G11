
  <body>
    <link rel="stylesheet" href="estilos/collapser.css" />
    <br><br><br><br><br><br>
    <div class="container-content">
        <div class="accordion">
        <div class="accordion-item">
            <button class="accordion-header">
                <strong>Minuta de Personal</strong><i class="fas fa-angle-down"></i>
            </button>
            <div class="accordion-body">
               <?php
                include("parts/minrep.php");
               ?>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">
                <strong>Minuta de Observaciones</strong><i class="fas fa-angle-down"></i>
            </button>
            <div class="accordion-body">
               <?php
                include("parts/obser.php");
               ?>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">
            <strong>Accordion 3</strong><i class="fas fa-angle-down"></i>
            </button>
            <div class="accordion-body">
            Amet fuga ipsum velit, quae illo doloremque? Id quidem harum placeat
            porro ipsam, animi voluptatem vel mollitia, quae rerum suscipit modi
            at consequatur ipsum vitae cum aspernatur itaque non quam?
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">
            <strong>Accordion 4</strong><i class="fas fa-angle-down"></i>
            </button>
            <div class="accordion-body">
            Nihil consectetur ipsum nobis eligendi facilis sed corrupti, ab fugit
            ducimus dolorem rem nulla excepturi impedit sint ea, eveniet provident
            quos repudiandae a quas reiciendis aut, incidunt corporis? Laboriosam,
            labore.
            </div>
        </div>
        </div>
    </div>

    <script src="js/hopper.js"></script>
  </body>
</html>
<!-- collapse
                    accordion
                    toasts
-->