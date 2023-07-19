@vite(['resources/css/app.css', 'resources/css/misestilos.css','resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="">

    <div class="mx-6 my-6">

            <div class="grid grid-cols-1 sm:grid-cols-12 color-b ">
                    <div class="col-span-4 p-10 py-2 bg-white">
                        @include('drogueria.codigo.login')
                    </div>


                                    <div class="col-span-8 pt-6">
                                        <img src="{{URL::asset('storage/imagenes/fotoPrincipal.jpg')}}" class="transition-shadow duration-300 ease-in-out rounded-full img-control hover:shadow-lg hover:shadow-black/30 img-index">

                                    </div>


            </div>
            <div class="hr-border">
                <hr>
            </div>
            <footer class="font-light text-center text-blue-500 text-8xl shadow-cyan-500/50">Drogueria y variedades Santa Cecilia
            </footer>
    </div>


</body>

</html>
