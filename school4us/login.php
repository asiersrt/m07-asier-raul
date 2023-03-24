
?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="estilos.css">
      <title>Login School4us</title>
    </head>
    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" id="nombre_usuario" name="nombre_usuario" required><br>
                            <label for="nombre_usuario">Usuari</label>
                            
                        </div>
                        
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" id="contraseña" name="contraseña" required><br>
                            <label for="contraseña">Contrasenya</label>
                        </div>
                        <div>
                            <button>Iniciar Sesió</button>
                        </div>
                        <div class="register">
                            <p>¿No tens un compte? <a href="registro.php">Registrat aquí</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>

<?php
if (!empty($error)) {
    echo "<p>$error</p>";
}
?>

