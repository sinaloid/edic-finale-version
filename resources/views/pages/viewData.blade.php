<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDICApp - Données</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/sin.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/table.css') }}" rel="stylesheet">
    <!-- jQuery library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    @include("header")

    <div class="container mx-auto1 sin-m-t myform1">

        <div class="row">
            <div class="col-12 card">
                <div class="card-header">
                    Sources de donées
                </div>
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col-5 col-md-2 font-weight-bold">Pays:</div>
                        <div class="col-7 col-md-10">Burkina Faso</div>
                    </div>
                    <div class="row card-title">
                        <div class="col-5 col-md-2 font-weight-bold">Region:</div>
                        <div class="col-7 col-md-10">Centre et Ouest</div>
                    </div>
                    <div class="row card-title">
                        <div class="col-5 col-md-2 font-weight-bold">Province:</div>
                        <div class="col-7 col-md-10">nom province 1 et nom province 2</div>
                    </div>
                    <div class="row card-title ">
                        <div class="col-5 col-md-2 font-weight-bold">Commune:</div>
                        <div class="col-7 col-md-10 ">nom commune 1 et nom commune 2, nom commune 3,nom
                            commune 4</div>

                    </div>

                    <a class="btn sin-bg-3 mt-2" href="{{ route('datas.cmp') }}">Modifiez</a>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-12 col-md-4 card mt-3">
                <p class="font-weight-bold mt-2"> Choix de donnée</p>

                <!--div class="d-md-flex" style="background:#d1d4c9">
                    <div class="mx-auto overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light w-100"
                        style="max-width1: 260px; max-height: 200px; ">
                        <div class="card">
                            <div class="card-body">Basic card</div>
                        </div>
                        <br>
                        <div class="card bg-primary text-white">
                            <div class="card-body">Primary card</div>
                        </div>
                        <br>
                        <div class="card bg-success text-white">
                            <div class="card-body">Success card</div>
                        </div>
                        <br>
                        <div class="card bg-info text-white">
                            <div class="card-body">Info card</div>
                        </div>
                        <br>
                        <div class="card bg-warning text-white">
                            <div class="card-body">Warning card</div>
                        </div>
                        <br>
                        <div class="card bg-danger text-white">
                            <div class="card-body">Danger card</div>
                        </div>
                        <br>
                        <div class="card bg-secondary text-white">
                            <div class="card-body">Secondary card</div>
                        </div>
                        <br>
                        <div class="card bg-dark text-white">
                            <div class="card-body">Dark card</div>
                        </div>
                        <br>
                        <div class="card bg-light text-dark">
                            <div class="card-body">Light card</div>
                        </div>
                    </div>
                </div-->
                <div id="accordion">

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Info General
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">Action item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-success">Success
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-secondary">Secondary
                                        item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Info
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-warning">Warning
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-danger">Danger
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-primary">Primary
                                        item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Dark
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-light">Light
                                        item</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                PCD
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">Action item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-success">Success
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-secondary">Secondary
                                        item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Info
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-warning">Warning
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-danger">Danger
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-primary">Primary
                                        item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Dark
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-light">Light
                                        item</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                Budget 2021
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">Action item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-success">Success
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-secondary">Secondary
                                        item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Info
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-warning">Warning
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-danger">Danger
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-primary">Primary
                                        item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Dark
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-light">Light
                                        item</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFor">
                                Budget 2022
                            </a>
                        </div>
                        <div id="collapseFor" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">Action item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-success">Success
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-secondary">Secondary
                                        item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Info
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-warning">Warning
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-danger">Danger
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-primary">Primary
                                        item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Dark
                                        item</a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-light">Light
                                        item</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-8 card mt-3">
                <p class="font-weight-bold mt-2"> Choix de la view de donnée</p>
                <div class="row card-header">
                    <!--div class="btn-group btn-group-sm">
                        <button type="button" id='line' class="btn sin-bg-3">Line</button>
                        <button type="button" id="pie" class="btn sin-bg-3">Pie</button>
                        <button type="button" id="bar" class="btn sin-bg-3">Bar</button>
                    </div-->
                    <div class="controls">
                        <h5 class="label">Chart Type</h5>
                        <select class="form-control" name="chartType" id="chartType" onchange="updateChartType()">
                            <option value="line">Line</option>
                            <option value="bar">Bar</option>
                            <option value="radar">Radar</option>
                            <option value="polarArea">Polar Area</option>
                            <option value="doughnut">Doughnut</option>
                        </select>
                        <!--button onclick="randomizeData()">Randomize Data!</button-->
                    </div>
                </div>
                <div class="table-responsive">
                    <canvas id="myChart" class="table" style="min-height:320px; max-height:400px"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!--div class="container card mt-2 px-1">

        <div class="row mt-2">
            <div class="col-12 text-center">
                Tableau recapitulatif
            </div>
        </div>
        <div class="row myform p-0 mx-auto">
            <div class="col-12 p-1">
                <p class="card-header"> commune 1</p>
                <div class="col-12 table-responsive px-0">
                    <table class="table table-hover">
                        <caption> Contribution des dix (10) meilleurs villages (toute contribution)</caption>
                        <thead>
                            <tr>
                                <th class="sin-table-bg">#</th>
                                <th class="sin-table-bg">1 er</th>
                                <th class="sin-table-bg">2 ème</th>
                                <th class="sin-table-bg">3 ème</th>
                                <th class="sin-table-bg">4 ème</th>
                                <th class="sin-table-bg">5 ème</th>
                                <th class="sin-table-bg">6 ème</th>
                                <th class="sin-table-bg">7 ème</th>
                                <th class="sin-table-bg">8 ème</th>
                                <th class="sin-table-bg">9 ème</th>
                                <th class="sin-table-bg">10 ème</th>
                            </tr>
                        </thead>
                        <tr>
                            <th>Le village</th>
                            <td>Raguèguéma</td>
                            <td>Ronsin</td>
                            <td>Sanh</td>
                            <td>Marmissiga</td>
                            <td>Bouri</td>
                            <td>Guésséré</td>
                            <td>Robondé</td>
                            <td>Masboré</td>
                            <td>Lèba</td>
                            <td>Bouloulou</td>
                        </tr>
                        <tr>
                            <th>Montant attendu</th>
                            <td>11 000</td>
                            <td>12 000</td>
                            <td>47 000</td>
                            <td>10 000</td>
                            <td>13 000</td>
                            <td>21 000</td>
                            <td>13 000</td>
                            <td>29 000</td>
                            <td>33 000</td>
                            <td>18 000</td>
                        </tr>
                        <tr>
                            <th>Montant mobilisé</th>
                            <td>11 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                        </tr>
                        <tr>
                            <th>Taux mobilisation /Prévisions</th>
                            <td>100%</td>
                            <td>1200%</td>
                            <td>4700%</td>
                            <td>100%</td>
                            <td>1200%</td>
                            <td>4700%</td>
                            <td>100%</td>
                            <td>1200%</td>
                            <td>4700%</td>
                            <td>100%</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-12 ">
                <p class="card-header"> commune 2</p>
                <div class="col-12  px-0">
                    <table class="table table-responsive table-hover">
                        <caption> Contribution des dix (10) meilleurs villages (toute contribution)</caption>
                        <thead>
                            <tr>
                                <th class="sin-table-bg">#</th>
                                <th class="sin-table-bg">1 er</th>
                                <th class="sin-table-bg">2 ème</th>
                                <th class="sin-table-bg">3 ème</th>
                                <th class="sin-table-bg">4 ème</th>
                                <th class="sin-table-bg">5 ème</th>
                                <th class="sin-table-bg">6 ème</th>
                                <th class="sin-table-bg">7 ème</th>
                                <th class="sin-table-bg">8 ème</th>
                                <th class="sin-table-bg">9 ème</th>
                                <th class="sin-table-bg">10 ème</th>
                            </tr>
                        </thead>
                        <tr>
                            <th>Le village</th>
                            <td>Raguèguéma</td>
                            <td>Ronsin</td>
                            <td>Sanh</td>
                            <td>Marmissiga</td>
                            <td>Bouri</td>
                            <td>Guésséré</td>
                            <td>Robondé</td>
                            <td>Masboré</td>
                            <td>Lèba</td>
                            <td>Bouloulou</td>
                        </tr>
                        <tr>
                            <th>Montant attendu</th>
                            <td>11 000</td>
                            <td>12 000</td>
                            <td>47 000</td>
                            <td>10 000</td>
                            <td>13 000</td>
                            <td>21 000</td>
                            <td>13 000</td>
                            <td>29 000</td>
                            <td>33 000</td>
                            <td>18 000</td>
                        </tr>
                        <tr>
                            <th>Montant mobilisé</th>
                            <td>11 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                            <td>1 000</td>
                        </tr>
                        <tr>
                            <th>Taux mobilisation /Prévisions</th>
                            <td>100%</td>
                            <td>1200%</td>
                            <td>4700%</td>
                            <td>100%</td>
                            <td>1200%</td>
                            <td>4700%</td>
                            <td>100%</td>
                            <td>1200%</td>
                            <td>4700%</td>
                            <td>100%</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div-->
    <!--script src="{{ asset('js/script.js') }}"></script-->

    <script>
    // Define data set for all charts
    let dataBaby = [1, 10, 5, 2, 20, 30, 45];
    let moreDataBaby = [20, 30, 15, 12, 21, 30, 40];
    myData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
                label: "Data, baby!",
                fill: false,
                backgroundColor: 'rgb(190, 99, 255, 0.25)',
                borderColor: 'rgb(190, 99, 255)',
                data: dataBaby,
            },
            {
                label: "More data, baby!",
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.25)',
                borderColor: 'rgb(255, 99, 132)',
                data: moreDataBaby,
            }
        ]
    };

    // Default chart defined with type: 'line'
    //Chart.defaults.global.defaultFontFamily = "monospace";
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: myData
    });

    // Function runs on chart type select update
    function updateChartType() {
        // Since you can't update chart type directly in Charts JS you must destroy original chart and rebuild
        myChart.destroy();
        myChart = new Chart(ctx, {
            type: document.getElementById("chartType").value,
            data: myData,
        });
    };

    // Randomize data button function
    function randomizeData() {
        let newDataBaby = dataBaby.map(x => Math.floor(Math.random() * 50));
        let newMoreDataBaby = moreDataBaby.map(x => Math.floor(Math.random() * 40));
        myData.datasets[0].data = newDataBaby
        myData.datasets[1].data = newMoreDataBaby
        myChart.update();
        console.log(newDataBaby);
    };
    </script>



    @include("footer")

</body>

</html>