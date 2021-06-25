@extends("layout")

@section("page-title")Админ-панель@endsection

@section("page-content")
    <h1>Войти как администратор/модератор</h1>
        <form name="adminsignin-form"  method="post" action="/adminsignin">
            @csrf
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-dark">Войти в аккаунт</h4>
                        </div>
                        <div class="card-body">
                            <select name="type_account" id="type_account">
                                <option value="0" selected>Модератор</option>
                                <option value="1">Администратор</option>
                            </select>
                            <p class="text-dark">Nickname</p>
                            <input type="text" name="user-nickname" class="form-control" placeholder="Введите nickname">

                            <p class="text-dark">Пароль</p>
                            <input type="password" name="user-password" class="form-control" placeholder="Введите пароль">

                            <button type="submit" href="/main" class="btn btn-lg btn-block btn-primary m-3">Войти</button>
                        </div>
                    </div>
                </div>
                @if(session('isAdmin') == 1)
                    <div class="alert alert-success">
                        {{session('nickname')}}, вы вошли в систему как Администратор!
                    </div>
                @endif
                @if(session('isModer') == 1)
                    <div class="alert alert-success">
                        {{session('nickname')}}, вы вошли в систему как Модератор!
                    </div>
                @endif
            </div>
        </form>
@endsection
