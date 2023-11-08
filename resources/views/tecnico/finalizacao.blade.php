@extends("layouts.app")
@section("content")
    <div class="container">
    <form action="{{route('tecnico.store')}}">
    @csrf
    @method("POST")
        <div class="grid grid-cols-4 grid-rows-6 gap-4">
            <div class="col-span-2">
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número da OS</label>
                    <input type="text" id="small-input" value="" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="col-start-3">
                <label for="dropdownSearchButton" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Técnicos responsáveis </label>
                <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Técnicos disponíveis <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                    <div class="p-3">
                        <label for="input-group-search" class="sr-only">Procurar técnico</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="input-group-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search user">
                        </div>
                    </div>
                    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-11" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Bonnie Green</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input checked id="checkbox-item-12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-12" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Jese Leos</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="checkbox-item-13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-13" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Michael Gough</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="checkbox-item-14" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-14" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Robert Wall</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="checkbox-item-15" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-15" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Joseph Mcfall</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="checkbox-item-16" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-16" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Leslie Livingston</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="checkbox-item-17" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-17" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Roberta Casas</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-start-4">
                <label for="tec_resp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo da OS</label>
                <select id="tec_resp" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Selecione o tipo da OS</option>
                    <option value="">Técnico 1</option>
                    <option value="">Técnico 2</option>
                </select>
            </div>
            <div class="col-span-3 row-start-2">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Materiais utilizados</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite aqui"></textarea>
            </div>
            <div class="col-start-4 row-start-2">
                <label for="divzinha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Horários do atendimento</label>
                <div class="grid grid-cols-2" id="divzinha">
                    <div>
                        <input type="text" value="" id="small-input" placeholder="Início" class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="col-start-5">
                        <input type="text" value="" id="small-input" placeholder="Fim" class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
            </div>
            <div>
                <div class="flex items-center ">
                    <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Serviço executado de acordo com cliente</label>
                </div>
            </div>
            <div class="row-start-3">
                <div class="flex items-center ">
                    <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sem danos ao imovel</label>
                </div>
            </div>
            <div class="row-start-3">
                <div class="flex items-center ">
                    <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Equipamentos e rede em funcionamento</label>
                </div>
            </div>
            <div class="row-start-3">
                <div class="flex items-center">
                    <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Com danos ao imóvel</label>
                </div>
            </div>
            <div >
                <div class="flex items-center">
                    <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Serviço cobrado</label>
                </div>
            </div>
            <div class="row-start-4">
                <div class="flex items-center">
                    <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Serviço insento de cobrança</label>
                </div>
            </div>
            <div class="col-start-3 row-start-4">
                <div>
                    <label for="cli_nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Cliente</label>
                    <input type="text" id="cli_nome" value="" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="col-start-4 row-start-4">
                <div>
                    <label for="cli_endereco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço do Cliente</label>
                    <input type="text" id="cli_endereco" value="" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="row-start-5">
                <canvas class="border border-gray-300 rounded" id="signature-pad" width="400" height="100"></canvas>
            </div>
            <div class="row-start-6 justify-center">
                <button type="submit" class="justify-center text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Finalizar</button>
            </div>
        </div>
    </form>
    </div>
@push('js')
    <script>
    // Cria um objeto canvas
    const canvas = document.getElementById("signature-pad");

    // Cria um objeto context
    const ctx = canvas.getContext("2d");

    // Limpa o canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Cria um objeto para armazenar a assinatura
    const signature = [];

    // Adiciona um evento de clique
    canvas.addEventListener("click", function(e) {
    // Adiciona um ponto à assinatura
    signature.push({
    x: e.offsetX,
    y: e.offsetY
    });

    // Desenha a assinatura
    ctx.beginPath();
    for (const point of signature) {
    ctx.lineTo(point.x, point.y);
    }
    ctx.stroke();
    });
    </script>
@endpush
@endsection
