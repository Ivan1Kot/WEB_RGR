@extends("layout")

@section("page-title")Отзывы@endsection

@section("page-content")
    <h1 class="m-5">Отзывы</h1>
    <div class="container">
        @foreach($data as $d)
            <div class="card-deck mb-3">
                <div class="card mb-4 box-shadow">
                    <div class="card-header bg-dark text-lg-start">
                        <h4 class="my-0 font-weight-normal">{{$d['fio']}}</h4>
                    </div>
                    <div class="card-body bg-dark">
                        <p class="text-lg-start">{{$d['text']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    <textarea id="reviewtext" name="reviewtext"></textarea>
    <button type="submit" href="/main" class="btn btn-lg btn-block btn-dark m-3">Оставить отзыв</button>
    </div>
    @if(session('isUser') != 1)
        <p class="lead">Чтобы оставить отзыв о сайте или о проделанной работе необходимо <a href="signin">авторизироваться</a></p>
    @endif
@endsection
