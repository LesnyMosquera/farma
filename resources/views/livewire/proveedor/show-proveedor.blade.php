<div >
    {{-- inicio del componente Livewire --}}
    @vite(['resources/css/app.css', 'resources/css/misestilos.css','resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('iconos/fontawesome-web/css/all.min.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div class="grid gap-2 pt-6 sm:grid-cols-3 grid-col-1">


        <div class="p-3 border rounded-md">
               <form action="/categoria" method="POST">
                   @csrf
                   <div  class="">
                           <label for="categoria" class="">Categoria</label>
                       <input type="text" name="categoria" id="categoria" class="form-control" >
                   </div>


                   <div  class="">
                       <label for="descripcion">Descripción</label>
                       <textarea name="descripcion" id="descripcion" cols="30" rows="3" class="form-control">

                       </textarea>

                   </div>
                   <div class="pt-6">

                       <input type="submit" value="Agregar" class=" btn-add" >
                   </div>
                </form>

           </div>

           <div class="col-span-2" >
                    {{-- boton de busqueda --}}

                    <x-buscador>
                        <x-secondary-button class="ml-3 mr-2" wire:click="$set('open', true)">Crear Proveedor</x-secondary-button>
                    </x-buscador>
                    {{-- componente para agregar proveedores --}}
                    <x-dialog-modal wire:model="open">


                      <x-slot name="title">
                        Agregar Proveedor
                      </x-slot>


                      <x-slot name="content">

                            <div class="border rounded-md">
                                 <label for="" class="p-4 ">Informacion Personal</label>

                                 <div class="grid grid-cols-3 gap-5 pl-4 pr-4 my-3">

                                     <div class="col-span-1">

                                         <label for="nit">Nit</label>

                                         <div class="relative flex flex-wrap items-stretch ">
                                             <span
                                               class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-500 dark:placeholder:text-neutral-200"
                                               id="basic-addon1"
                                               ><i class="fa-solid fa-address-card color-blue"></i>

                                              </span
                                             >
                                             <input type="text" name="nit" id="nit"  wire:model.defer="nit" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-600 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                               placeholder="Cedúla o nit" aria-label="Username" aria-describedby="basic-addon1" />
                                           </div>
                                         </div>

                                     <div class="col-span-2">


                                         <label for="nombre">Nombre</label>
                                         <div class="relative flex flex-wrap items-stretch ">
                                             <span
                                               class=" flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                               id="basic-addon1"
                                               > <i class="w-full fa-solid fa-user color-blue"></i></span>
                                             <input type="text" name="nombre" id="nombre" wire:model.defer="nombre" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-600 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                               placeholder="Nombresy apellidos" aria-label="Username" aria-describedby="basic-addon1" />
                                             </div>
                                         </div>
                                     </div>

                                         {{-- Otras rejillas --}}
                                         <div class="grid grid-cols-3 gap-5 pl-4 pr-4 ">
                                         <div>
                                             <label for="sexo">Genero</label>
                                             <select name="genero" wire:model.defer="genero" class="flex items-center w-full rounded h-9 whitespace-nowrap " >
                                                 <option value="No aplica" >No aplica</option>
                                                 <option value="Masculino" >Masculino</option>
                                                 <option value="Femenino" >Femenino</option>
                                                 <option value="LGBTI" >LGTBI</option>
                                                 <option value="Otro" >Otro</option>
                                                 <option value="No aplica" >No Aplica</option>

                                               </select>

                                         </div>


                                             <div>
                                                 <label for="telefono">Teléfono</label>
                                                 <div class="relative flex flex-wrap items-stretch ">
                                                     <span
                                                       class=" flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                                       id="basic-addon1"
                                                       > <i class="w-full fa-solid fa-phone-volume color-blue"></i></span>
                                                     <input type="text" name="telefono" id="telefono"  wire:model.defer="telefono" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-600 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                                       placeholder="número de telefono" aria-label="Username" aria-describedby="basic-addon1" />
                                                     </div>
                                                 </div

                                             </div>

                                             <div>
                                                 <label for="email">Email</label>
                                                 <div class="relative flex flex-wrap items-stretch ">
                                                     <span
                                                       class=" flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                                       id="basic-addon1"
                                                       > <i class="w-full color-blue">@</i></span>
                                                     <input type="text" name="email" id="email"  wire:model.defer="email" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-600 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                                       placeholder="correo electronico" aria-label="Username" aria-describedby="basic-addon1" />
                                                     </div>
                                                 </div

                                             </div>
                                         </div>
                                         {{-- campo dirección --}}
                                         <div class="grid grid-cols-1 pt-2 pl-4 pr-4">
                                            <label for="direccionp">Dirección</label>
                                                 <div class="relative flex flex-wrap items-stretch ">
                                                     <span
                                                       class=" flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                                       id="basic-addon1"
                                                       > <i class="w-full color-blue fa-solid fa-warehouse"></i></span>
                                                     <input type="text" name="direccionp" id="direccionp"  wire:model.defer="direccionp" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-600 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                                       placeholder="Escriba la dirección del proveedor" aria-label="Username" aria-describedby="basic-addon1" />
                                                     </div>
                                                 </div
                                         </div>
                                         {{-- fin dirección --}}

                                         <div class="grid grid-cols-3 gap-5 pt-2 pl-4 pr-4">
                                             <div >
                                                 <label for="pais">País</label>
                                                 <select name="pais" id="pais"wire:model.defer="pais" class="flex items-center w-full rounded h-9 whitespace-nowrap " >
                                                     <option value="" >Seleccionar</option>
                                                     <option value="colombia" >Colombia</option>
                                                   </select>
                                             </div>

                                             <div>
                                                 <label for="departamento">Departamento</label>
                                                 <select name="departamento" id="departamento" wire:model.defer="departamento" class="flex items-center w-full rounded h-9 whitespace-nowrap " >
                                                     <option value="">Seleccionar</option>
                                                     <option value="Risaralda">Risaralda</option>
                                                   </select>
                                             </div>

                                             <div>
                                                 <label for="municipio">Municipio</label>
                                                 <select name="municipio" id="municipio" wire:model.defer="municipio" class="flex items-center w-full rounded h-9 whitespace-nowrap " >
                                                     <option value="" >Seleccionar</option>
                                                     <option value="Pereira">Pereira</option>
                                                   </select>
                                             </div>
                                         </div>
                                         <div class="py-5">

                                         </div>
                                 </div>
                    </x-slot>
                    <x-slot name="footer">
                       <x-success-button wire:click.prevent='save'>
                            Crear Proveedor
                        </x-success-button>
                        <x-danger-button wire:click="$set('open', false)">
                            Salir
                        </x-danger-button>

                    </x-slot>

                    </x-dialog-modal>

                         @if($proveedores->count() > 0)
                                {{-- agregando el componente con las clases de la tabla --}}
                                {{ $titulo }}
                                <x-tabla>
                                        <thead class="font-medium border-b bg-primary-100 ">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4 cursor-pointer" wire:click="ordenar('nit')">Nit <span class="float-right fas fa-sort"></span></th>
                                            <th scope="col" class="px-6 py-4 cursor-pointer" wire:click="ordenar('nombre')">Nombre <span class="float-right fas fa-sort"></span></th>
                                            <th scope="col" class="px-6 py-4 cursor-pointer" wire:click="ordenar('genero')">Genero <span class="float-right fas fa-sort"></span></th>
                                            <th scope="col" class="px-6 py-4 cursor-pointer" wire:click="ordenar('direccion')">Dirección <span class="float-right fas fa-sort"></span></th>
                                            <th scope="col" class="px-6 py-4 cursor-pointer" wire:click="ordenar('telefono')">Teléfono <span class="float-right fas fa-sort"></span></th>
                                            <th scope="col" class="px-6 py-4 cursor-pointer" wire:click="ordenar('email')">Email <span class="float-right fas fa-sort"></span></th>
                                            <th scope="col" class="px-6 py-4 cursor-pointer" wire:click="ordenar('departamento')">Departamento <span class="float-right fas fa-sort"></span></th>
                                            <th scope="col" class="px-6 py-4 ">Acciones </th>
                                        </tr>
                                    </thead>

                                    @php
                                    $i=1;
                                    @endphp

                                    @foreach($proveedores as $proveedor)

                                        <tr class="border-b">
                                            <td class="px-6 py-4 font-medium "> {{ $i++  }} </td>
                                            <td class="px-6 py-4 ">{{ $proveedor->nit }}</td>
                                            <td class="px-6 py-4 ">{{ $proveedor->nombre }}</td>
                                            <td class="px-6 py-4 ">{{ $proveedor->genero }}</td>
                                            <td class="px-6 py-4 ">{{ $proveedor->direccionp }}</td>
                                            <td class="px-6 py-4 ">{{ $proveedor->telefono }}</td>
                                            <td class="px-6 py-4 ">{{ $proveedor->email }}</td>
                                            <td class="px-6 py-4 ">{{ $proveedor->municipio }}</td>
                                            <td class="">
                                                <a href="http://"><i < class="pr-3 fa-solid fa-user-pen color-blue"></i></a>
                                                <a href="http://"><i class="fa-solid fa-eye"></i></a>
                                                <a href="http://" wire:click='delete'><i class="pl-3 fa-solid fa-trash color-red"></i></a>


                                            </td>



                                        </tr>

                                    @endforeach

                                </x-tabla>
                                @else
                                <div class="px-6 py-5 mb-4 text-base bg-red-300 rounded-md text-danger-700"
                                >
                                No se encontró ningún registro en la {{ $titulo }}
                                </div>

                            @endif

            </div>

            <script>

                Livewire.on('alert', function(){
                    swal("Good job!", "You clicked the button!", "success", {
                    button: "Aww yiss!",});
                })

                </script>
    </div>
{{-- fin del componente --}}
</div>
