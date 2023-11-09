@extends("layouts.app")
@section("content")

<div class="container">
    <div class="d-flex grid grid-cols-4 grid-rows-2 gap-4" id="progress">
        <div class="px-8 pt-20 ml-8 justify-itens-center col-span-3">
            <div class="flex justify-between mb-1 mt-10 mx-auto">
                <span class="text-base font-medium text-blue-700 dark:text-white">Progresso do dia</span>
                <span class="text-sm font-medium text-blue-700 dark:text-white">{{$perc_concluido}}%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width:{{$perc_concluido}}%"></div>
            </div>
        </div>

        <div class="d-flex px-8 mt-10 col-start-4 id" id="perfil">
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center pb-10 pt-10">
                    <img class="w-16 h-16 mb-3 rounded-full shadow-lg" src="{{asset('/img/avatar-tec.jpeg')}}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Nome do tecnico</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Função/Cargo</span>
                </div>
            </div>

        </div>

        <div class="px-8 ml-8 justify-itens-center col-span-4 row-start-2">
            <div class="justify-itens-center col-span-4 row-start-2">
                <div class=" rounded-full table-container">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mx-auto my-auto rounded-full rounded-tl">
                        <thead>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="col" class="p-4">
                                Numero da OS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tipo da OS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Especificações
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                2315135613
                            </th>
                            <td class="px-6 py-4">
                                remoção
                            </td>
                            <td class="px-6 py-4">
                                tirar equipamento
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                6737463868
                            </th>
                            <td class="px-6 py-4">
                                instalação
                            </td>
                            <td class="px-6 py-4">
                                nova instalação
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                847694734
                            </th>
                            <td class="px-6 py-4">
                                manutenção
                            </td>
                            <td class="px-6 py-4">
                                resolução de problemas
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
@endpush
@endsection
