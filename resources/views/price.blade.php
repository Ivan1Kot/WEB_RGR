@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")
    <h1 class="m-5">Стоимость услуг составляет:</h1>
    <h1>{{$price}}</h1>
    <p class="lead">
        <a href="/payment" class="btn btn-lg btn-secondary">Рассчитать ещё</a>
    </p>
    <div class="container mh-100"></div>
    </div>
@endsection
