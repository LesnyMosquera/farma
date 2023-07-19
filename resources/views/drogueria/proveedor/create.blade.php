{{--
<x-template-ventas>

    @livewire('proveedor.show-proveedor');

</x-template-ventas> --}}
@vite(['resources/css/app.css', 'resources/css/misestilos.css','resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('iconos/fontawesome-web/css/all.min.css') }}">
<form action="{{ route('proveedor.store') }}" method="post">
    @csrf
    <div class="border rounded-md">
        <label for="" class="p-4 ">Informacion Personal</label>

        <div class="grid grid-cols-3 gap-5 pl-4 pr-4 my-3">

            <div class="col-span-1">

                <label for="nit">Nit</label>

                <div class="relative flex flex-wrap items-stretch ">
                    <span
                      class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                      id="basic-addon1"
                      ><i class="fa-solid fa-address-card color-blue"></i>

                     </span
                    >
                    <input type="text" name="nit" id="nit"  wire:model.defer="nit" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
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
                    <input type="text" name="nombre" id="nombre" wire:model.defer="nombre" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
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
                            <input type="text" name="telefono" id="telefono"  wire:model.defer="telefono" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
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
                            <input type="text" name="email" id="email"  wire:model.defer="email" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
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
                            <input type="text" name="direccionp" id="direccionp"  wire:model.defer="direccionp" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                              placeholder="Escriba la dirección del proveedor" aria-label="Username" aria-describedby="basic-addon1" />
                            </div>
                        </div
                </div>
                {{-- fin dirección --}}

                <div class="grid grid-cols-3 gap-5 pt-2 pl-4 pr-4">
                    <div >
                        <label for="pais">País</label>
                        <select name="pais" wire:model.defer="pais" class="flex items-center w-full rounded h-9 whitespace-nowrap " >
                            <option value="" >Seleccionar</option>
                            <option value="colombia" >Colombia</option>
                          </select>
                    </div>

                    <div>
                        <label for="departamento">Departamento</label>
                        <select name="departamento" wire:model.defer="departamento" class="flex items-center w-full rounded h-9 whitespace-nowrap " >
                            <option value="">Seleccionar</option>
                            <option value="Risaralda">Risaralda</option>
                          </select>
                    </div>

                    <div>
                        <label for="municipio">Municipio</label>
                        <select name="municipio" wire:model.defer="municipio" class="flex items-center w-full rounded h-9 whitespace-nowrap " >
                            <option value="" >Seleccionar</option>
                            <option value="Pereira">Pereira</option>
                          </select>
                    </div>
                </div>
                <div class="py-5">
                    <div>{{ $mensaje2 }}</div>
                </div>
        </div>


<input type="submit" value="Guardar" class="btn-add">

</form>
