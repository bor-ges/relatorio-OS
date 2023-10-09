@extends("layouts.app")
@section("content")
    <div class="container">
    <form>

        <div class="grid grid-cols-4 grid-rows-5 gap-4">
            <div class="col-span-2">numero da OS(input)</div>
            <div class="col-start-3">tecnico resp(select)</div>
            <div class="col-start-4">tipo de OS(select)</div>
            <div class="col-span-3 row-start-2">adicionar materiais(feito com JS para adicionar um por um)</div>
            <div class="col-start-4 row-start-2">hora inicio/fim(datepicker)</div>
            <div class="row-start-3">serviço exec de acordo com cliente </div>
            <div class="row-start-3">sem danos ao imovel</div>
            <div class="row-start-3">Equipamentos e rede em funcionamento</div>
            <div class="row-start-3">Com danos ao imóvel</div>
            <div >Serviço cobrado</div>
            <div class="row-start-4">Serviço insento de cobrança</div>
            <div class="row-start-5">Nome do cliente(input)</div>
            <div class="row-start-5">Endereço do serviço(input)</div>
            <div class="col-span-2 row-start-5">ASSINATURA DO CLIENTE</div>
        </div>
    </form>
    </div>

@endsection
