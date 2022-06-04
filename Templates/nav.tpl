<nav>
    <div> 
        <div class="contenedorLogoQatarNav">
            <img src="img/logoQatarNav.jpg" class="logoQatarNav"> 
        </div>
        <div>
            <h1><span class="qat">Qat</span><span class="ar">ar</span> <span class="qat">20</span><span class="ar">22</span></h1>
        </div> 
    </div>
    {if !empty($userEmail) && ($logueado)}
        <div class="">
            <div class="">
                {if $fotoPerfil}
                    <img class="" src="{$fotoPerfil} " /> <a class="nav-link login">{$userEmail}</a>
                {else}
                    <img class="" src="" /> <a
                        class="nav-link login">{$userEmail}</a>
                {/if}
            </div>
            <div class="">
                <a href="logOut" class="nav-link logOut"> Cerrar sesión</a>
            </div>
        </div>
</nav>
    {else}
        <div class="logOreg">
            <div class="">
                <a href="logIn" class="nav-link login"> Iniciar sesión </a>
            </div>
            <div>
                <a href="registrar" class="nav-link register"> Registrarme </a>
            </div>
        </div>
    {/if}
</nav>