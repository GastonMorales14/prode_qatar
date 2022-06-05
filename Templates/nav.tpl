<nav>
    <div> 
        <div class="contenedorLogoQatarNav">
            <img src="img/logoQatarNav.jpg" class="logoQatarNav"> 
        </div>
        <div>
            <h1><span class="qat">Qat</span><span class="ar">ar</span> <span class="qat">20</span><span class="ar">22</span></h1>
        </div> 
    </div>
    {if ($logueado)}
        <div class="logOreg">
            <div class="">
                <a class="nav-link login"> {$name} </a>
            </div>
            <div>
                <a href="logOut" class="nav-link logOut"> Cerrar sesión</a>
            </div>
        </div>

    {else}
        <div class="logOreg">
            <div class="">
                <a href="logIn" class="nav-link login"> Iniciar sesión </a>
            </div>
            <div>
            <a href="registrar" class="nav-link register"> Registrarme </a>
            </div>
            <h1>{$name}</h1>
        </div>

    {/if}
            <div class="navPag">    
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="home" class="nav-link"> Home </a>
                        </li>
    {if ($admin)}
                        <li class="nav-item">
                            <a href="usuarios" class="nav-link"> Usuarios </a>
                        </li>
                    </ul>
        
    {/if}
</nav>