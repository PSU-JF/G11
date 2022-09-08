
<link rel="stylesheet" href="estilos/mi_estio.css">
<main>

            <div class="contenedor__todo">
              

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login--> 
                    <form action="?clase=login&&funcion=inicio" class="formulario__login" method="post">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" name="tx_user" pattern="[a-zA-Z0-9]+" required placeholder="Usuario">
                        <input type="password" name ="tx_pass" required placeholder="Contraseña">
                        <button type="submit" name="btn-registrar" value="Login">Entrar</button>
                    </form>
                </div>
            </div>

        </main>
        