@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")
    <h1 class="m-5">Стоимость услуг составляет:</h1>
    <h1 class="m-5">{{$price}}</h1>
    <h4>Для окозания услуги, позвоните по номеру </h4>
    <p class="lead m-5">
        <a href="/choise" class="btn btn-lg btn-secondary">Рассчитать ещё</a>
    </p>
    <div class="container mh-100"></div>
    </div>
@endsection
