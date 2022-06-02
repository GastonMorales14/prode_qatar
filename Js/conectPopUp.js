document.addEventListener('DOMContentLoaded', function(){


    /**
     * Open Pop Up
     */
    let overlay = document.getElementById('overlay');
    let popup = document.getElementById('popup');

    function openPopUp(){
        overlay.classList.add('active');
        popup.classList.add('active');
    }    
    
    document.getElementById('btn-cerrar-popup').addEventListener('click', function(e){
        e.preventDefault();
        overlay.classList.remove('active');
        popup.classList.remove('active');
    });
    openPopUp();
   

    /**
     * Log In
     */
    let showError = document.getElementById("error");
    let inputEmail = document.getElementById("email");    
    let inputPassword = document.getElementById("password");

    document.getElementById('form').addEventListener('submit', validacionForm);
    
    
    function validacionForm(e){
        e.preventDefault();
        cleanUp();
        emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    
        if(inputPassword.value == null || inputPassword.value == '' || inputPassword.value == undefined){
            showError.innerHTML = 'Ingrese una Contraseña';
         
            return;
        }
        if(inputPassword.value.length < 6){
            showError.innerHTML = 'Error en Contraseña';
            return;
        }

        if(!emailRegex.test(inputEmail.value)){
            showError.innerHTML = 'Ingrese un Correo Valido';
            return ;
        }
        this.submit();
    }

   




    function cleanUp(){
        showError.innerHTML = '';
    }


   
})
