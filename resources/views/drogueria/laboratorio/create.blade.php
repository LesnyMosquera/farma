


<x-template-ventas>

    <div class="grid gap-2 pt-6 sm:grid-cols-3 grid-col-1">


        <div class="p-3 border rounded-md">
               <form action="/laboratorio" method="POST">
                   @csrf
                   <div  class="">
                           <label for="laboratorio" class="">Laboratorio</label>
                       <input type="text" name="laboratorio" id="laboratorio" class="form-control" >
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


           <div class="col-span-2 ">
           <x-tabla>

               <thead class="font-medium border-b bg-primary-100 ">

                   <tr>
                     <th scope="col" class="px-6 py-4">#</th>
                     <th scope="col" class="px-6 py-4">Laboratorio</th>
                     <th scope="col" class="px-6 py-4">Descripcion</th>

                   </tr>
                 </thead>


               @php
                   $i=1;
               @endphp
               @foreach($laboratorios as $laboratorio)

                   <tr class="border-b">
                      <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $i++ }}</td>
                      <td class="px-6 py-4 whitespace-nowrap">{{ $laboratorio->laboratorio }}</td>
                      <td class="px-6 py-4 whitespace-nowrap">{{ $laboratorio->descripcion }}</td>

                    </tr>

                   @endforeach


           </x-tabla>
           {{ $laboratorios->appends($_GET)->links() }}

           </div>

</div>




</x-template-ventas>
