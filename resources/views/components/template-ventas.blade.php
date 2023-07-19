<div>
{{-- div de inicio componente --}}

@vite(['resources/css/app.css','resources/css/misestilos.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D.S.{{ $title ?? 'Drogueria' }}</title>
</head>

@include('drogueria.codigo.nav')
<body class="">


            <div class="grid h-screen grid-cols-1 grid-rows-4 gap-2 p-3 bg-white sm:grid-cols-5 ">
                <div class="row-span-4 p-8 text-xl text-white bg-blue-500 rounded-lg">Menú principal

                        <div class="grid grid-cols-1 gap-2 pt-6 sm:grid-cols-2 ">
                            {{-- Inicio  columna Izquierda--}}
                            <div class="img-menu">
                                <div>
                                    <a href="{{ route('categoria.create') }}">
                                        <img src="/storage/imagenes/categorias.png" alt="" srcset="">
                                        <label>Categoria</label>
                                        </a>

                                </div>

                                <div>
                                    <a href="{{ route('categoria.create') }}">
                                        <img src="/storage/imagenes/categorias.png" alt="" srcset="">
                                        <label>Proveedores</label>
                                        </a>

                                </div>

                                <div>
                                    <a href="{{ route('categoria.create') }}">
                                        <img src="/storage/imagenes/categorias.png" alt="" srcset="">
                                        <label>Clientes</label>
                                        </a>

                                </div>
                                <div>
                                    <a href="{{ route('categoria.create') }}">
                                        <img src="/storage/imagenes/categorias.png" alt="" srcset="">
                                        <label>Productos</label>
                                        </a>

                                </div>
                                <div>
                                    <a href="{{ route('categoria.create') }}">
                                        <img src="/storage/imagenes/categorias.png" alt="" srcset="">
                                        <label>Categoria</label>
                                        </a>

                                </div>



                            </div>
                            {{-- fin columna Izquiera--}}


                            {{-- inicio --}}

                            <div class="img-menu ">
                                <a href="{{ route('laboratorio.create') }}">
                                <img src="https://tecdn.b-cdn.net/img/new/avatars/5.webp"
                                class="rounded-lg "
                                alt="Avatar" />
                                <label >Laboratorio</label>
                                </a>
                            </div>
                            {{-- fin --}}


                        </div>
                        {{-- Cierre de menú --}}

                </div>

                <div class="col-span-4 row-span-3 p-4 text-xl border rounded-lg">

                    contenido#
                    {{ $slot }}

                </div>
                <div class="col-span-4 bg-blue-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolore, ullam dolorum minus optio, nam doloremque quis minima dolor placeat reiciendis. Ex soluta officia fugit animi eum ut, esse molestias
                </div>
            </div>



</body>
</html>








{{-- fin componente --}}
</div>
