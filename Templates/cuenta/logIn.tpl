{include file='templates/usoComun/header.tpl'}



<div class="main-container">
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <h3>Inicia Sesión</h3>        
            <div>   
                <form action="connect" method="POST"  id="form">
                    <div class="contenedor-inputs">
                        <input type="email" placeholder="Email" name="email" id="email" required>
                        <input type="password" placeholder="Contraseña" name="password" id="password" minlength='6' required>
                    </div>
                    
                    <div ><span class="error" id="error">{$msg_error}</span></div>                    
                  
                    <input type="submit" class="btn-log-in" id="btn-log-in" value="Ingresar">
                </form>
            </div>
            <div class="division">
                <h6>No tienes una cuenta? Registrate <a href="registrar">aquí</a> </h6>
            </div>
        </div>
    </div>
<div>


<script src="./Js/conectPopUp.js"></script>
{include file= 'templates/usoComun/footer.tpl'}