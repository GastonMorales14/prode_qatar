document.addEventListener('DOMContentLoaded', function(){


    document.getElementById('form').addEventListener('submit', validacionForm);

    let showError = document.getElementById('showError'); 

    function validacionForm(e){
        e.preventDefault();
        cleanUp();
        let name = document.getElementById('name').value;
        let surname = document.getElementById('surname').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    

        if(name == null || name == '' || name == undefined){
            showError.innerHTML = 'Ingrese Nombre';         
            return;
        }

        if(surname == null || surname == '' || surname == undefined){
            showError.innerHTML = 'Ingrese Apellido';         
            return;
        }

        if(!emailRegex.test(email)){
            showError.innerHTML = 'Ingrese un Correo Valido';
            return ;
        }


        if(password == null || password == '' || password    == undefined){
            showError.innerHTML = 'Ingrese una Contraseña';         
            return;
        }
        if(password.length < 6){
            console.log(password);

            showError.innerHTML = 'La contraseña debe contener 6 digitos';         
            return;
        }
       

      
        this.submit();
    }

   




    function cleanUp(){
        showError.innerHTML = '';
    }




})