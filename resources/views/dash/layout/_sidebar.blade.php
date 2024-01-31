<div id="sidebar">

    <div class="top-logo">

        <img src="{{asset('imgs/logoCYL.png')}}" alt="Logo CYL">

    </div>

    <nav>

        <ul class="main-menu">

            <li class="menu-title">
                MENU
            </li>

            <li>
                <a href="{{route('dash.pedidos')}}" class="current">
                    <i class="fa-solid fa-box"></i>
                    <span>Pedidos</span>
                </a>
            </li>

            <li class="dropdown-item">
                <a href="#">
                    <i class="fa-solid fa-list"></i>
                    <span>Items</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Descripción</a>
                    </li>
                    <li>
                        <a href="#">Despiece</a>
                    </li>
                    <li>
                        <a href="#">Talleres</a>
                    </li>
                    <li>
                        <a href="#">Stock</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="#">
                    <i class="fa-solid fa-person"></i>
                    <span>Comerciales</span>
                </a>
            </li>


            <li class="dropdown-item">
                <a href="#">
                    <i class="fa-regular fa-calendar-check"></i>
                    <span>Estado Pedidos</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Montar</a>
                    </li>
                    <li>
                        <a href="#">Enviar</a>
                    </li>
                    <li>
                        <a href="#">Anular</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa-regular fa-rectangle-list"></i>
                    <span>Listas</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-calendar-week"></i>
                    <span>Semanas</span>
                </a>
            </li>

            @if (auth()->user()->isRole("admin"))

                <li class="menu-title">
                    SOLO ADMINISTRADOR
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-square-plus"></i>
                        <span>Generar Listas</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <i class="fa-solid fa-square-plus"></i>
                        <span>Etiquetas</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <i class="fa-solid fa-square-plus"></i>
                        <span>Pegatinas</span>
                    </a>
                </li>
            @else

                <li class="menu-title">
                    {OCULTO PARA NO ADMIN}
                </li>

            @endif



        </ul>

    </nav>

</div>
