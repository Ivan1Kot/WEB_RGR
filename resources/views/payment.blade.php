@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")
    <h1>Выбери земельную работу</h1>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal text-dark">Траншея</h4>
                </div>
                <div class="card-body">
                    <a type="button" href="/trench" class="btn btn-lg btn-block btn-primary">Добавить</a>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal text-dark">Яма</h4>
                </div>
                <div class="card-body">
                    <a type="button" href="/pit" class="btn btn-lg btn-block btn-primary">Добавить</a>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal text-dark">Планировка</h4>
                </div>
                <div class="card-body">
                    <a type="button" class="btn btn-lg btn-block btn-primary">Добавить</a>
                </div>
            </div>
        </div>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
            </div>
        </footer>
    </div>
@endsection
