<div>
    <x-layouts.app class="mt-5">
        <div class="flex mb-8 justify-end">
            <a href="{{ route('tractora.create') }}" class="btn btn-blue text-xs">
                <i class="fa-regular fa-newspaper"></i>&nbsp;&nbsp;Grabar Nuevo
            </a>
        </div>

        <div class="container-fliud">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 overflow-x-scroll table-auto" >
                <thead class="text-xs text-gray-700 uppercase ta dark:bg-gray-700 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Matricula
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marca
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Chasis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Matriculación
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha Itv
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha ATP
                        </th>
                        <th scope="col" class="px-6 py-3 text-justify">
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($remolque as $item)
                    <tr class="bg-white border-b celda dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium whitespace-nowrap dark:text-white uppercase">
                            {{ $item->matricula }}
                        </th>
                        <td
                            class="px-6 py-4 font-sans font-light  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->marca}}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->numero_chasis}}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                          {{ $item->matriculacion}}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->ultima_itv}}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                           {{ $item->atp}}
                        </td>
                        <td>
                            <di class="flex space-x-0.5 ml-5 text-justify">
                                <form action="" method="POST" class="mr-1">
                                    <button class="btn btn-blue" type="submit"><i class="fa-solid fa-pencil"></i>&nbsp;Editar</button>
                               </form>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <form action=""  method="POST"  class="mr-1">
                                     <button class="btn btn-red" type="submit"><i class="fa-solid fa-trash"></i>&nbsp;Eliminar</button>
                                </form>
                            </di>
                        </td>
                    </tr>
                  
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $remolque->links() }}
        </div>




    </x-layouts.app>
</div>