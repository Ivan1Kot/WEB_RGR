@extends("layout")

@section("page-title")Отзывы@endsection

@section("page-content")
    <script src="summernote.js"></script>
    <script src="texteditor.js"></script>
    <script  type="text/javascript" >
        jQuery(function ($) {

            $("#reviewtext").summernote();

        })

    </script>
    <h1 class="m-5">Отзывы</h1>
    <div class="container">
        <div class="card-deck mb-3">
            <div class="card mb-4 box-shadow">
                <div class="card-header bg-dark text-lg-start">
                    <h4 class="my-0 font-weight-normal">Игорь Кисин</h4>
                </div>
                <div class="card-body bg-dark">
                    <p class="text-lg-start">Хороший сайт, жаль ларавель фигня</p>
                </div>
            </div>
        </div>
    </div>

    <textarea id="reviewtext"></textarea>
    <p class="lead">Чтобы оставить отзыв о сайте или о проделанной работе необходимо <a href="signin">авторизироваться</a></p>
@endsection
