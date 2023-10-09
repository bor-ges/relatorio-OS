@extends("layouts.app")
@section("content")
    <div class="container">
    <form>

        <div class="grid grid-cols-4 grid-rows-5 gap-4">
            <div class="col-span-2">1</div>
            <div class="col-start-3">2</div>
            <div class="col-start-4">3</div>
            <div class="col-span-3 row-start-2">4</div>
            <div class="col-start-4 row-start-2">7</div>
            <div class="row-start-3">8</div>
            <div class="row-start-3">9</div>
            <div class="row-start-3">10</div>
            <div class="row-start-3">11</div>
            <div >14</div>
            <div class="row-start-4">15</div>
            <div class="row-start-5">16</div>
            <div class="row-start-5">17</div>
            <div class="col-span-2 row-start-5">18</div>
        </div>
    </form>
    </div>

@endsection
