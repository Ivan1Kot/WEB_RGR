@extends("layout")

@section("page-title") Расчет @endsection

@section("page-content")
    <h1 class="m-5">Выбери земельную работу</h1>
    <div class="container">
        <div class="container">
            <nav class="nav">
                <div class="masthead-brand card m-4 box-shadow bg-dark">
                    <div class="card-header bg-dark">
                        <h4 class="my-0 font-weight-normal">Траншея</h4>
                    </div>
                    <div>
                        <a href="/trench"><img src="images/trench_animation.gif" style="width: 250px"></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark">
                    <div class="card-header bg-dark">
                        <h4 class="my-0 font-weight-normal ">Яма</h4>
                    </div>
                    <div >
                        <a href="/pit"><img src="images/pit_animation.gif" style="width: 250px"></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark">
                    <div class="card-header bg-dark">
                        <h4 class="my-0 font-weight-normal ">Планировка</h4>
                    </div>
                    <div >
                        <a href="/planning"><img src="images/planning_animation.gif" style="width: 250px"></a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <nav class="nav">
                <div class="card m-4 box-shadow bg-dark">
                    <div class="card-header bg-dark">
                        <h4 class="my-0 font-weight-normal ">Террасирование</h4>
                    </div>
                    <div >
                        <a href="/terracing"><img src="images/terracing_animation.gif" style="width: 250px"></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark">
                    <div class="card-header bg-dark">
                        <h4 class="my-0 font-weight-normal ">Гидромолот</h4>
                    </div>
                    <div >
                        <a href="/hydrohammer"><img src="images/hydrohammer_animation.gif" style="width: 250px"></a>
                    </div>
                </div>
                <div class="card m-4 box-shadow bg-dark">
                    <div class="card-header bg-dark">
                        <h4 class="my-0 font-weight-normal ">Гидробур</h4>
                    </div>
                    <div >
                        <a href="/hydrodrill"><img src="images/hydrodrill_animation.gif" style="width: 250px"></a>
                    </div>
                </div>
              </nav>
            </div>
                <div class="container" style="padding-left: 33.5%">
                    <nav class="nav">
                      <div class="card m-4 box-shadow bg-dark">
                          <div class="card-header bg-dark">
                              <h4 class="my-0 font-weight-normal ">Котлован</h4>
                          </div>
                          <div >
                              <a href="/foundation_pit"><img src="images/pit_animation.gif" style="width: 250px"></a>
                          </div>
                      </div>
                  </nav>
              </div>
            </div>
@endsection
