@extends("layouts.app")
@section("content")
    <div class="container">
    <form>
    @csrf
    @method("POST")
        <div class="grid grid-cols-4 grid-rows-5 gap-4">
            <div class="col-span-2">
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número da OS</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="col-start-3">
                <label for="tec_resp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo da OS</label>
                <select id="tec_resp" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Selecione o tipo da OS</option>
                    <option >Técnico 1</option>
                    <option >Técnico 2</option>
                </select>
            </div>
            <div class="col-start-4">
                <label for="tec_resp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo da OS</label>
                <select id="tec_resp" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Selecione o tipo da OS</option>
                    <option >Técnico 1</option>
                    <option >Técnico 2</option>
                </select>
            </div>
            <div class="col-span-3 row-start-2">adicionar materiais(feito com JS para adicionar um por um)</div>
            <div class="col-start-4 row-start-2">hora inicio/fim(datepicker)</div>
            <div class="row-start-3">serviço exec de acordo com cliente </div>
            <div class="row-start-3">sem danos ao imovel</div>
            <div class="row-start-3">Equipamentos e rede em funcionamento</div>
            <div class="row-start-3">Com danos ao imóvel</div>
            <div >Serviço cobrado</div>
            <div class="row-start-4">Serviço insento de cobrança</div>
            <div class="row-start-5">
                <div>
                    <label for="cli_nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Cliente</label>
                    <input type="text" id="cli_nome" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="row-start-5">
                <div>
                    <label for="cli_endereco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço do Cliente</label>
                    <input type="text" id="cli_endereco" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="col-span-2 row-start-5">ASSINATURA DO CLIENTE</div>
        </div>
    </form>
    </div>
@endsection
