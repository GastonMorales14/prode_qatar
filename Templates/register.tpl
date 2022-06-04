{include file='Templates/header.tpl'}

  <div class="container w-75 justify-content-center mt-4 mb-4 rounded shadow">
    <div class="bg-white p-5 rounded-end">
      <div class="btn fondoHeder">
        <a href="login" class="text-decoration-none text-white">Volver</a> 
      </div>
      <h2 class="fw-bold text-center py-5 text-info">Qatar 2022</h2>
      <p class="fw-bold text-center pb-5 text-secondary">Registrate para participar!</p>
        
      <form class="form-alta" action="creationUser" method="post" id='form'>
        <div class="col-12">
          <label class="form-label">Nombre</label>
          <input class="form-control" type="text" name="name" id='name' required>
        </div>
        <div class="col-12">
          <label class="form-label">Apellido</label>
          <input class="form-control" type="text" name="surname" id='surname' required>
        </div>
        <div class="col-12">
          <label class="form-label">Correo Electronico</label>
          <input class="form-control" type="text" name="email" id="email" required>
        </div>
        <div class="col-12">
          <label class="form-label">Password</label>
          <input class="form-control" type="password" name="password" id="password" required>
        </div>
        <div class="col-12">
          <input type="submit" class="btn fondoHeder text-white" value="Registrate">
        </div>
        <h4 class="alert-danger" id='showError'>{$msg_error}</h4>
      </form>
    </div>
  </div>
   


<script src='./Js/registry.js'></script>
{include file='Templates/footer.tpl'}