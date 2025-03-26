<div class="m-4">
    <x-layouts.app class="mt-5">
        <div class="flex mb-8 justify-end">
            <a href="{{ route('tractora.create') }}" class="btn btn-blue text-xs">
                Grabar Nuevo
            </a>
        </div>

        <div class="relative overflow-x-auto mb-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Matricula
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marca
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Modelo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kilometraje
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Consumo medio
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Matriculación
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ITV
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Consultar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tractor as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium whitespace-nowrap dark:text-white uppercase">
                            {{ $item->matricula }}
                        </th>
                        <td
                            class="px-6 py-4 font-sans font-light  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->marca }}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->modelo }}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->kilometraje }}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->consumo_promedio }}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->matriculacion }}
                        </td>
                        <td class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white uppercase text-left">
                            {{ $item->ultima_itv }}
                        </td>
                        <td class="px-6 py-4">
                            <di class="flex space-x-3.5">
                                <a href="" class="btn btn-blue">Editar</a>
                                <form action="">
                                    <button class="btn btn-blue text-center" type="submit">Eliminar</button>
                                </form>
                            </di>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $tractor->links() }}
        </div>




    </x-layouts.app>
</div>