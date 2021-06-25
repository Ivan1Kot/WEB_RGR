@extends("layout")

@section("page-title") Редактор модераторов @endsection

@section("page-content")
    <h1 class="m-5">Редактор модераторов</h1>
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{--@if(!empty($data))
                @foreach($data as $d)--}}
                    <div class="card-deck mb-3">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header bg-dark text-lg-start">
                                <h4 class="masthead-brand my-0 font-weight-normal">имя: mraturusama</h4>
                                <h4 style="margin-left: 20%" class="masthead-brand my-0 font-weight-normal">пароль: q1w2e3r4t5y6</h4>
                                <div class="nav-masthead">
                                    <img src="images/delete.png" width="30" height="30">
                                </div>
                            </div>
                        </div>
                    </div>
                {{--@endforeach
        @endif--}}
            @if(session('succes') == 1)
                <div class="alert alert-success">
                    Модератор добавлен
                </div>
            @endif
        <form action="" method="post">
            @csrf
            <h4 style="margin-top: 10%">Добавить модератора</h4>
            <div class="nav">
                <input type="text" name="pass-width" class="masthead-brand" style="margin-top: auto; margin-bottom: auto; margin-right: 10%; margin-left: 10%" placeholder="Имя модератора">
                <input type="password" name="pass-width" class="nav-masthead" style="margin-top: auto; margin-bottom: auto; margin-right: 10%;" placeholder="Пароль модератора">
                <button type="submit" href="" class="nav-masthead btn btn-lg btn-block btn-dark m-3">Добавить</button>
            </div>
        </form>
    </div>
@endsection
