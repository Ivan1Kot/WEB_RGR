@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")
    <h1>Заполни поля</h1>
        <form name="foundation_pit-form">
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-dark">Котлован</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-dark">Ширина проезда</p>
                            <input type="number" name="pass-width" class="form-control" placeholder="Ширина (см)">

                            <p class="text-dark">Высота проезда</p>
                            <input type="number" name="pass-height" class="form-control" placeholder="Высота (см)">

                            <p class="text-dark">Нужен поиск коммуникаций?</p>
                            <select class="form-select" name="communications-search" aria-label="Default select example">
                                <option selected value="1">Нет</option>
                                <option value="2">Да</option>
                            </select>

                            <p class="text-dark">Длина участка</p>
                            <input type="number" name="area-lenght" class="form-control" placeholder="Длина (см)">

                            <p class="text-dark">Ширина участка</p>
                            <input type="number" name="area-width" class="form-control" placeholder="Ширина (см)">

                            <p class="text-dark">Глубина котлована</p>
                            <input type="number" name="foundation-depth" class="form-control" placeholder="Глубина (см)">

                            <button type="submit" href="/main" class="btn btn-lg btn-block btn-primary m-3">Рассчитать</button>
                        </div>
                    </div>
                </div>
        </form>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
            </div>
        </footer>
    </div>
@endsection