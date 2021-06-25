@extends("layout")

@section("page-title")Редактировать отзыв@endsection

@section("page-content")
    <h1 class="m-5">Редактировать отзыв</h1>
        <div class="container">
            <textarea class="form-control" id="reviewtext" name="reviewtext"></textarea>
        </div>
        <a type="button" href="/reviews" class="btn btn-lg btn-block btn-dark m-3">Закончить редактирование</a>
@endsection
