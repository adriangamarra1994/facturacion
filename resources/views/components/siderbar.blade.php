<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="" class="lia">
                    <i class="fas fa-gauge icono"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
        </ul>


        <ul class="ul">

            <li x-data="{ open: false }">
                <button @click = " open = ! open" type="button"class="menu">
                    <i class="fas fa-city icono"></i>
                    <span class="span">Empresa</span>
                    <i class="fas fa-caret-down"></i>
                </button>

                <ul x-show="open" id="dropdown-example" class="py-2 space-y-2">
                    <li>
                        <a href="{{route('companies.index')}}" class="menu pl-7">
                            <i class="fas fa-eye icono"></i>
                            Lista</a>
                    </li>
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-file-shield icono"></i>
                            Datos empresa</a>
                    </li>
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-key icono"></i>
                            Credenciales</a>
                    </li>
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-keycdn icono"></i>
                            Credenciales Api</a>
                    </li>
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-file-code icono"></i>
                            Certificado</a>
                    </li>
                </ul>

            </li>

            <li x-data="{ open: false }">
                <button @click = " open = ! open" type="button" class="menu">
                    <i class="fas fa-building icono"></i>
                    <span class="span">Sucursales</span>
                    <i class="fas fa-caret-down"></i>
                </button>

                <ul x-show="open" class="py-2 space-y-2">
                    <li>
                        <a href="" class="menu pl-7">
                            <i class="fas fa-eye icono"></i>
                            Lista</a>
                    </li>
                    <li>
                        <a href="" class="menu pl-7">
                            <i class="fas fa-plus icono"></i>
                            Nuevo</a>
                    </li>
                </ul>
               
            </li>

            <li x-data="{ open: false }">
                <button @click = " open = ! open" type="button" class="menu">
                    <i class="fas fa-file-invoice icono"></i>
                    <span class="span">Facturas</span>
                    <i class="fas fa-caret-down"></i>
                </button>

                <ul x-show="open" class="py-2 space-y-2">
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-eye icono"></i>
                            Ver facturas</a>
                    </li>
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-plus icono"></i>
                            Nueva factura</a>
                    </li>
                </ul>

            </li>

            <li x-data="{ open: false }">
                <button @click = " open = ! open" type="button" class="menu">
                    <i class="fas fa-file-lines icono"></i>
                    <span class="span">Boletas</span>
                    <i class="fas fa-caret-down"></i>
                </button>

                <ul x-show="open" class="py-2 space-y-2">
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-eye icono"></i>
                            Ver boletas</a>
                    </li>
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-plus icono"></i>
                            Nueva boleta</a>
                    </li>
                </ul>

            </li>

            <li x-data="{ open: false }">
                <button @click = " open = ! open" type="button" class="menu">
                    <i class="fas fa-file-zipper icono"></i>
                    <span class="span">Notas de credito</span>
                    <i class="fas fa-caret-down"></i>
                </button>

                <ul x-show="open" class="py-2 space-y-2">
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-eye icono"></i>
                            Ver N. de credito</a>
                    </li>
                    <li>
                        <a href="#"class="menu pl-7">
                            <i class="fas fa-plus icono"></i>
                            Nueva N. de credito</a>
                    </li>
                </ul>

            </li>

            <li x-data="{ open: false }">
                <button @click = " open = ! open" type="button" class="menu">
                    <i class="fas fa-file-zipper icono"></i>
                    <span class="span">Notas de debito</span>
                    <i class="fas fa-caret-down"></i>
                </button>

                <ul x-show="open" class="py-2 space-y-2">
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-eye icono"></i>
                            Ver N. de debito</a>
                    </li>
                    <li>
                        <a href="#" class="menu pl-7">
                            <i class="fas fa-plus icono"></i>
                            Nueva N. de debito</a>
                    </li>
                </ul>

            </li>

            <li x-data="{ open: false }">
                <button @click = " open = ! open" type="button" class="menu">
                    <i class="fas fa-users icono"></i>
                    <span class="span">Usuarios</span>
                    <i class="fas fa-caret-down"></i>
                </button>

                <ul x-show="open" class="py-2 space-y-2">
                    <li>
                        <a href="" class="menu pl-7">
                            <i class="fas fa-eye icono"></i>
                            Lista</a>
                    </li>
                    <li>
                        <a href="" class="menu pl-7">
                            <i class="fas fa-plus icono"></i>
                            Nuevo</a>
                    </li>
                </ul>

            </li>


        </ul>

    </div>

 </aside>
 
 <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-400 mt-14">
       
           <main>
               {{ $slot }}
           </main>
    </div>
 </div>