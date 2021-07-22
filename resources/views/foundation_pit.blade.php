@extends("layout")

@section("page-title")Расчет@endsection

@section("page-content")
    <h1>Заполни поля</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form name="foundation_pit-form"  method="post" action="/foundation_pit">
            @csrf
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-dark">Котлован</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-dark">Тип грунта</p>
                            <select id="groundtypeselect" class="form-select" name="ground-type" aria-label="Default select example">
                                <option selected>Выбери тип грунта</option>
                                <option value="1">Копаемый</option>
                                <option value="2">Скальный</option>
                                <option value="3">Полускальный</option>
                                <option value="4">Строительный мусор</option>
                            </select>
                            <div id="hiden1" style="display: none">
                                <p class="text-dark">Ширина проезда (нужно понять, сможет ли эксковатор проехать на участок)</p>
                                <input type="number" name="pass-width" class="form-control" placeholder="Ширина (см)">
                            </div>

                            <div id="hiden2" style="display: none">
                                <p class="text-dark">Высота проезда (нужно понять, сможет ли эксковатор проехать на участок)</p>
                                <input type="number" name="pass-height" class="form-control" placeholder="Высота (см)">
                            </div>

                            <div id="hiden3" style="display: none">
                                <p class="text-dark">Нужен поиск коммуникаций? (Поиск коммуникаций нужен для того, чтоб в процессе работы эвакуатор не задел никаких коммуникаций)</p>
                                <select class="form-select" name="communications-search" aria-label="Default select example">
                                    <option selected>Выберите, нужен ли поиск коммуникаций</option>
                                    <option value="1">Нет</option>
                                    <option value="2">Да</option>
                                </select>
                            </div>

                            <div id="hiden4" style="display: none">
                            <p class="text-dark">Длина участка</p>
                            <input type="number" name="area-lenght" class="form-control" placeholder="Длина (см)">
                            </div>

                            <div id="hiden5" style="display: none">
                            <p class="text-dark">Ширина участка</p>
                            <input type="number" name="area-width" class="form-control" placeholder="Ширина (см)">
                            </div>

                            <div id="hiden6" style="display: none">
                            <p class="text-dark">Глубина котлована</p>
                            <input type="number" name="foundation-depth" class="form-control" placeholder="Глубина (см)">
                            </div>

                            <div id="hiden7" style="display: none">
                                <p class="text-dark">Местоположение</p>
                                <select id="locatoin-select" class="form-select" name="delivery" aria-label="Default select example">
                                    <option selected>Выберите ваше местоположение</option>
                                    <option value="1">Симферополь</option>
                                    <option value="2">ЮБК</option>
                                    <option value="3">Не Симферополь и не ЮБК</option>
                                </select>
                            </div>

                            <div id="hiden8" style="display: none">
                                <div>
                                    <p class="text-dark">Расстояние от Cимферополя до вашего местоположения</p>
                                    <input type="number" name="distance" class="form-control" placeholder="Введите расстояние (Если вы не в Симферополе) (км)">
                                </div>

                                <button type="submit" class="btn btn-lg btn-block btn-primary m-3">Рассчитать</button>
                            </div>

                            <div id="hiden9" style="display: none">
                                <button type="submit" class="btn btn-lg btn-block btn-primary m-3">Рассчитать</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    <script>
        $('#groundtypeselect').on('change', function() {
            $("#hiden1").css("display", "block");
        });
        $("#hiden1").bind('keyup mouseup', function () {
            $("#hiden2").css("display", "block");
        });
        $("#hiden2").bind('keyup mouseup', function () {
            $("#hiden3").css("display", "block");
        });
        $('#hiden3').on('change', function() {
            $("#hiden4").css("display", "block");
        });
        $("#hiden4").bind('keyup mouseup', function () {
            $("#hiden5").css("display", "block");
        });
        $("#hiden5").bind('keyup mouseup', function () {
            $("#hiden6").css("display", "block");
        });
        $("#hiden6").bind('keyup mouseup', function () {
            $("#hiden7").css("display", "block");
        });
        $('#locatoin-select').on('change', function() {
            if (this.value == "2" || this.value == "3"){
                $("#hiden8").css("display", "block");
                $("#hiden9").css("display", "none");
            }
            else {
                $("#hiden8").css("display", "none");
                $("#hiden9").css("display", "block");
            }
        });
    </script>
@endsection
