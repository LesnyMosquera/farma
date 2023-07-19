<x-template-ventas>

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


                    <div class="col-span-2 bg-blue-300">
                       @livewire('show-laboratorio')
                       @livewire('laboratorio.show-laboratorio', array('titulo' =>'otra cosa'))
                    </div>

    </div>




</x-template-ventas>
