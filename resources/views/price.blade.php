@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")
@if(empty($badground))
<p></p>
@else
<h4>Так как вы выбрали {{$badground}} , то придётся воспользоваться услугой гидромолота, стоимость которой состовляет 2500₽/час</h4>
@endif
    <h1 class="m-5">Стоимость услуг составляет:</h1>
    <h1 class="m-5">
        @if($price['error'] == 0)
            {{$price['main']}}₽
            @if($price['hour'] >0)
                + {{$price['hour']}}₽/час
            @endif
        @else
            {{$price['errormessage']}}
        @endif</h1>
    <h4>Для окозания услуги, позвоните по номеру </h4>
    <p class="lead m-5">
        <a href="/choise" class="btn btn-lg btn-secondary">Рассчитать ещё</a>
    </p>
    <div class="container mh-100"></div>
    </div>
@endsection
