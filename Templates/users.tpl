{include file='templates/header.tpl'}

<body>

<div class="d-flex flex-row justify-content-end ">
    <a href="home" class="mt-3 btn  text-decoration-none text-white">Volver</a> 
    <a href="logout" class="mx-3 mt-3 btn text-decoration-none text-white ">Cerrar Sesion</a>
</div>

<table class="table table-primary table-striped  table-borderless">
        <thead class="table-dark border-primary text-center">
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EMAIL</th> 
                <th>ADMINISTRADOR</th>
                <th>DAR/QUITAR ROL</th>                
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody class="text-center">
            {foreach from=$users item=$user}
            <tr>
                <td>{$user->name}</td>
                <td>{$user->surname}</td>
                <td>{$user->email}</td>
                {if $user->admin == 1}
                    <td>Si</td>
                {else}
                    <td>No</td>
                {/if}                
                <td><a class="btn btn-danger" href="changeRole/{$user->email}/{$user->admin}">Cambiar</a></td>
                <td><a class="btn btn-danger" href="deleteUser/{$user->email}">Eliminar</a></td>
            </tr>

            {/foreach}
        </tbody>
    </table>
    




</body>

{include file='templates/footer.tpl'}