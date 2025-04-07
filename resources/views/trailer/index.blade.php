<div>
    <x-layouts.app class="mt-5">
        <div class="flex mb-8 justify-end">
            <flux:modal.trigger name="crear-remolque">
                <flux:button variant="primary">Grabar nuevo</flux:button>
            </flux:modal.trigger>

        </div>

        <div class="container-fliud">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 overflow-x-scroll table-auto">
                <thead class="text-xs text-gray-700 uppercase ta dark:bg-gray-700 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Matricula
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marca
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nº Chasis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha Matriculación
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
                    @foreach ($remolque as $item)
                        <tr class="bg-white border-b celda dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium whitespace-nowrap dark:text-white uppercase">
                                {{ $item->matricula }}
                            </th>
                            <td
                                class="px-6 py-4 font-sans font-light  whitespace-nowrap dark:text-white uppercase text-left">
                                {{ $item->marca }}
                            </td>
                            <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                                {{ $item->numero_chasis }}
                            </td>
                            <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                                {{ $item->matriculacion }}
                            </td>
                            <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                                {{ $item->ultima_itv }}
                            </td>
                            <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                                {{ $item->atp }}
                            </td>
                            <td>
                                <di class="flex space-x-0.5 ml-5 text-justify">
                                    <form action="" method="POST" class="mr-1">
                                        <button class="btn btn-blue" type="submit"><i
                                                class="fa-solid fa-pencil"></i>&nbsp;Editar</button>
                                    </form>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <form action="" method="POST" class="mr-1">
                                        <button class="btn btn-red" type="submit"><i
                                                class="fa-solid fa-trash"></i>&nbsp;Eliminar</button>
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
 {{-- este es el modal que gestiona las entradas --}}
        <div class="max-h-screen overflow-y-auto ">

            <flux:modal :dismissible="false" name="crear-remolque" class="w-full max-w-2xl">
                <div class=" bg -green-500 w-full">
                    <div class="w-full px-3">
                        <flux:heading size="lg" class="text-center uppercase">Grabar nuevo Remolque</flux:heading>
                        <flux:text class="w-full text-center  font-bold">Introduzca todos los datos del nuevo
                            Remolque</flux:text>
                    </div>


                </div>
                <div class="mb-5 pt-3">
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <label for="matricula" class="block text-sm/6 font-medium text-gray-900">Matricula</label>
                            <div class="mb-5">
                                <input type="text" name="matricula" id="matricula" placeholder="Matricula"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <label for="marca" class="block text-sm/6 font-medium text-gray-900">Marca</label>
                            <div class="mb-5">
                                <input type="text" name="marca" id="marca" placeholder="Marca"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <label for="chasis" class="block text-sm/6 font-medium text-gray-900">Nº Chasis</label>
                            <div class="mb-5">
                                <input type="text" name="chasis" id="chasis" placeholder="Nº Chasis"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5 block text-sm/6 font-medium text-gray-900"">
                                <flux:input label="Fecha Matriculación" type="date" min="2000-01-01"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                       
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5 block text-sm/6 font-medium text-gray-900">
                                <flux:input label="Ultima ITV" type="date" min="2000-01-01"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5 block text-sm/6 font-medium text-gray-900">
                                <flux:input label="Revision ATP" type="date" min="2000-01-01"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>

                        <flux:spacer />

                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <flux:modal.close>
                    <flux:button class="bg-red-600! hover:bg-red-300!  text-zinc-50!">Cancel</flux:button>
                    </flux:modal.close>
                        <flux:button class="bg-blue-500!  hover:bg-blue-300! text-zinc-50!" type="submit"
                        >Guardar</flux:button>
                </div>


            </flux:modal>
        </div>

    </x-layouts.app>
</div>
