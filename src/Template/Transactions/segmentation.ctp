<div class="container">
    <div class="row">
        <div class="col-12">
            <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo', 'alt' => 'Logo Poly', 'url' => ['controller' => 'Users','action' => 'home']]) ?>
            <?= $this->Html->image('deconnexion.png', ['class' => 'img-fluid avatar','alt' => 'Photo de profil', 'url' => ['controller' => 'Users', 'action' => 'logout']]) ?>
        </div>
    </div>

    <!-- Navigation secondaire -->
    <div class="row nav-accueil-one">
        <div class="col-12">
            <ul>
                <li>
                    <?= $this->Html->link('Dépenses', ['action' => 'analyse'], ['class' => '']) ?>
                </li>
                <li>
                    <?= $this->Html->link('Segmentation', ['action' => 'segmentation'], ['class' => 'active']) ?>
                </li>
            </ul>
        </div>
    </div>
    <!-- Fin Navigation secondaire -->

    <!-- Navigation segmentation -->
    <div class="row nav-segmentation">
        <div class="col-segmentation">
            <ul>
                <li>
                    <?= $this->Html->link('Segmentation globale', ['action' => 'analyse'], ['class' => '', 'data-target' => '#carouselExampleIndicators', 'data-slide-to' => '0', 'onclick' => 'activate()']) ?>
                </li>
                <li>
                    <?= $this->Html->link('Segmentation par catégorie', ['action' => 'segmentation'], ['class' => '', 'data-target' => '#carouselExampleIndicators', 'data-slide-to' => '1', 'onclick' => 'activate()']) ?>
                </li>
            </ul>
        </div>
    </div>
    <!-- Fin Navigation segmentation -->

    <!-- Card Segmentation -->
    <div id="carouselExampleIndicators"  data-interval="false" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active slides-card">
                <div class="row">
                    <div class="col-12 pl-7">
                        <p class="title-red">Juin 2020</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <canvas id="donut"></canvas>
                    </div>
                    <div class="col-6 cash-recolte">
                        <p>Cashback récolté</p>
                        <p class="recolte-prix">+ 39€</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pl-7">
                        <p class="title-red">Résumé</p>
                    </div>
                </div>
                <div class="row data-bar">
                    <div class="col-6">
                        <ul class="cat-bar">
                            <li>
                                <?= $this->Html->image('analyse/orange.svg', ['class' => '', 'alt' => 'Logo Poly']) ?>
                                <p>Courses</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 p-bar">
                        <div class="progress">
                            <div class="progress-bar progress-orange" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="prix-r">535,99€</p>
                    </div>
                </div>
                <div class="row data-bar">
                    <div class="col-6">
                        <ul class="cat-bar">
                            <li>
                                <?= $this->Html->image('analyse/violet.svg', ['class' => '', 'alt' => 'Logo Poly']) ?>
                                <p>Restauration</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 p-bar">
                        <div class="progress">
                            <div class="progress-bar progress-violet" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="prix-r">224,49€</p>
                    </div>
                </div>
                <div class="row data-bar">
                    <div class="col-6">
                        <ul class="cat-bar">
                            <li>
                                <?= $this->Html->image('analyse/rose.svg', ['class' => '', 'alt' => 'Logo Poly']) ?>
                                <p>Loisirs</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 p-bar">
                        <div class="progress">
                            <div class="progress-bar progress-rose" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="prix-r">76,39€</p>
                    </div>
                </div>
                <div class="row data-bar">
                    <div class="col-6">
                        <ul class="cat-bar">
                            <li>
                                <?= $this->Html->image('analyse/bleu.svg', ['class' => '', 'alt' => '']) ?>
                                <p>Dépenses scolaires</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 p-bar">
                        <div class="progress">
                            <div class="progress-bar progress-bleu" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="prix-r">55,99€</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item slides-card">
                <div class="row">
                    <div class="col-12 pl-7">
                        <p class="title-red">Compte par catégorie</p>
                    </div>
                </div>
                <div id="carousel2" data-interval="false" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators indicators">
                        <li data-target="#carousel2" data-slide-to="0" class="indicator-orange"></li>
                        <li data-target="#carousel2" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel2" data-slide-to="2"></li>
                        <li data-target="#carousel2" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <!-- progress bar circle -->
                            <div class="row">
                                <div class="col-5 text-center">
                                    <div class="progress-circle yellow">
                                        <span class="progress-left">
                                            <span class="progress-bar-circle"></span>
                                        </span>
                                         <span class="progress-right">
                                            <span class="progress-bar-circle"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                </div>
                                <div class="col-7 pr-7 text-center">
                                    <?= $this->Html->image('analyse/caddi.png', ['class' => '', 'alt' => '']) ?>
                                    <p>Votre bufget "<span class="orange">Courses</span>" s'élève ce mois-ci à <span class="cat-prix">534,21€</span></p>
                                </div>
                            </div>
                            <!-- Mois de dépense -->
                            <div class="row">
                                <div class="col-12 pl-7">
                                    <p class="title-red">Juin 2020</p>
                                </div>
                            </div>
                            <!-- Dépenses / Cashback -->
                            <div class="row">
                                <div class="col-12 card-ns">
                                    <div class="detail-depense">
                                        <div class="details">
                                            <p>Carte X0709 12/06</p>
                                            <p>-74,99€</p>
                                        </div>
                                        <div class="details">
                                            <p>AUCHAN</p>
                                            <p class="cash">5.89€ de cashback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dépenses / Cashback -->
                            <div class="row">
                                <div class="col-12 card-ns">
                                    <div class="detail-depense">
                                        <div class="details">
                                            <p>Carte X0709 12/06</p>
                                            <p>-74,99€</p>
                                        </div>
                                        <div class="details">
                                            <p>AUCHAN</p>
                                            <p class="cash">5.89€ de cashback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 cta-n">
                                    <?= $this->Html->link('Voir plus', ['action' => ''], ['class' => 'cta-link']) ?>
                                    <?= $this->Html->image('menu/arrow_voir_plus.svg', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item active">
                            <!-- progress bar circle -->
                            <div class="row">
                                <div class="col-5 text-center">
                                    <div class="progress-circle violet">
                                        <span class="progress-left">
                                            <span class="progress-bar-circle"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar-circle"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                </div>
                                <div class="col-7 pr-7 text-center">
                                    <?= $this->Html->image('analyse/plat.png', ['class' => '', 'alt' => '']) ?>
                                    <p>Votre bufget "<span class="violet">Restauration</span>" s'élève ce mois-ci à <span class="cat-prix">534,21€</span></p>
                                </div>
                            </div>
                            <!-- Mois de dépense -->
                            <div class="row">
                                <div class="col-12 pl-7">
                                    <p class="title-red">Juin 2020</p>
                                </div>
                            </div>
                            <!-- Dépenses / Cashback -->
                            <div class="row">
                                <div class="col-12 card-ns">
                                    <div class="detail-depense">
                                        <div class="details">
                                            <p>Carte X0709 12/06</p>
                                            <p>-74,99€</p>
                                        </div>
                                        <div class="details">
                                            <p>AUCHAN</p>
                                            <p class="cash">5.89€ de cashback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dépenses / Cashback -->
                            <div class="row">
                                <div class="col-12 card-ns">
                                    <div class="detail-depense">
                                        <div class="details">
                                            <p>Carte X0709 12/06</p>
                                            <p>-74,99€</p>
                                        </div>
                                        <div class="details">
                                            <p>AUCHAN</p>
                                            <p class="cash">5.89€ de cashback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 cta-n">
                                    <?= $this->Html->link('Voir plus', ['action' => ''], ['class' => 'cta-link']) ?>
                                    <?= $this->Html->image('menu/arrow_voir_plus.svg', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- progress bar circle -->
                            <div class="row">
                                <div class="col-5 text-center">
                                    <div class="progress-circle pink">
                                        <span class="progress-left">
                                            <span class="progress-bar-circle"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar-circle"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                </div>
                                <div class="col-7 pr-7 text-center">
                                    <?= $this->Html->image('analyse/velo.png', ['class' => '', 'alt' => '']) ?>
                                    <p>Votre bufget "<span class="rose">Loisirs</span>" s'élève ce mois-ci à <span class="cat-prix">534,21€</span></p>
                                </div>
                            </div>
                            <!-- Mois de dépense -->
                            <div class="row">
                                <div class="col-12 pl-7">
                                    <p class="title-red">Juin 2020</p>
                                </div>
                            </div>
                            <!-- Dépenses / Cashback -->
                            <div class="row">
                                <div class="col-12 card-ns">
                                    <div class="detail-depense">
                                        <div class="details">
                                            <p>Carte X0709 12/06</p>
                                            <p>-74,99€</p>
                                        </div>
                                        <div class="details">
                                            <p>AUCHAN</p>
                                            <p class="cash">5.89€ de cashback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dépenses / Cashback -->
                            <div class="row">
                                <div class="col-12 card-ns">
                                    <div class="detail-depense">
                                        <div class="details">
                                            <p>Carte X0709 12/06</p>
                                            <p>-74,99€</p>
                                        </div>
                                        <div class="details">
                                            <p>AUCHAN</p>
                                            <p class="cash">5.89€ de cashback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 cta-n">
                                    <?= $this->Html->link('Voir plus', ['action' => ''], ['class' => 'cta-link']) ?>
                                    <?= $this->Html->image('menu/arrow_voir_plus.svg', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- progress bar circle -->
                            <div class="row">
                                <div class="col-5 text-center">
                                    <div class="progress-circle blue">
                                        <span class="progress-left">
                                            <span class="progress-bar-circle"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar-circle"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>
                                </div>
                                <div class="col-7 pr-7 text-center">
                                    <?= $this->Html->image('analyse/sac.png', ['class' => '', 'alt' => '']) ?>
                                    <p>Votre bufget "<span class="bleu">Courses</span>" s'élève ce mois-ci à <span class="cat-prix">534,21€</span></p>
                                </div>
                            </div>
                            <!-- Mois de dépense -->
                            <div class="row">
                                <div class="col-12 pl-7">
                                    <p class="title-red">Juin 2020</p>
                                </div>
                            </div>
                            <!-- Dépenses / Cashback -->
                            <div class="row">
                                <div class="col-12 card-ns">
                                    <div class="detail-depense">
                                        <div class="details">
                                            <p>Carte X0709 12/06</p>
                                            <p>-74,99€</p>
                                        </div>
                                        <div class="details">
                                            <p>AUCHAN</p>
                                            <p class="cash">5.89€ de cashback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dépenses / Cashback -->
                            <div class="row">
                                <div class="col-12 card-ns">
                                    <div class="detail-depense">
                                        <div class="details">
                                            <p>Carte X0709 12/06</p>
                                            <p>-74,99€</p>
                                        </div>
                                        <div class="details">
                                            <p>AUCHAN</p>
                                            <p class="cash">5.89€ de cashback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 cta-n">
                                    <?= $this->Html->link('Voir plus', ['action' => ''], ['class' => 'cta-link']) ?>
                                    <?= $this->Html->image('menu/arrow_voir_plus.svg', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


</div>
<!-- Navigation menu -->
<nav class="nav-mobile display-none-pc text-center fixed-bottom" role="navigation">
    <ul>
        <li>
            <div>
                <?= $this->Html->image('menu/accueil.png', ['class' => 'img-fluid', 'alt' => '', 'url' => ['controller' => 'Users','action' => 'home']]) ?>
            </div>
            <div>
                <?= $this->Html->link('Accueil', ['controller' => 'Users','action' => 'home'], ['class' => '']) ?>
            </div>
        </li>
        <li>
            <div>
                <?= $this->Html->image('menu/cashback.png', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
            </div>
            <div>
                <?= $this->Html->link('Cashback', ['action' => ''], ['class' => '']) ?>
            </div>
        </li>
        <li>
            <div>
                <?= $this->Html->image('menu/analyse_active.png', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => 'analyse']]) ?>
            </div>
            <div>
                <?= $this->Html->link('Analyse', ['action' => 'analyse'], ['class' => 'active']) ?>
            </div>
        </li>
        <li>
            <div>
                <?= $this->Html->image('menu/menu.png', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
            </div>
            <div>
                <?= $this->Html->link('Menu', ['action' => ''], ['class' => '']) ?>
            </div>
        </li>
    </ul>
</nav>

<script>
var ctx = document.getElementById('donut').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ['Courses', 'Restauration', 'Loisirs', 'Dépenses scolaires'],
        datasets: [{
            backgroundColor: ["#FFB26B", "#BB7ED2","#F0A0B7","#89C0FF"],
            data: ['535', '224', '76', '55']
        }]
    },

    // Configuration options go here
    options: {
        cutoutPercentage: 70,
        responsive : true,
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                },
                ticks: {
                    display: false
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false
                },
                ticks: {
                    display: false
                }
            }]
        },
        legend: {
            display: false
        }
    }
});
</script>

<style>
    @media (min-width: 320px) {
        body {
            background: url("../img/background/background_degrad.png");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position-x: center;
        }

        .progress-circle {
            width: 70px;
            height: 70px;
            background: none;
            margin: 0 auto;
            box-shadow: none;
            position: relative;
        }
        .progress-circle:after{
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid #fff;
            position: absolute;
            top: 0;
            left: 0;
        }
        .progress-circle > span{
            width: 50%;
            height: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 1;
        }
        .progress-circle .progress-left{
            left: 0;
        }
        .progress-circle .progress-bar-circle{
            width: 100%;
            height: 100%;
            background: none;
            border-width: 2px;
            border-style: solid;
            position: absolute;
            top: 0;
        }
        .progress-circle .progress-left .progress-bar-circle{
            left: 100%;
            border-top-right-radius: 80px;
            border-bottom-right-radius: 80px;
            border-left: 0;
            -webkit-transform-origin: center left;
            transform-origin: center left;
        }
        .progress-circle .progress-right{
            right: 0;
        }
        .progress-circle .progress-right .progress-bar-circle{
            left: -100%;
            border-top-left-radius: 80px;
            border-bottom-left-radius: 80px;
            border-right: 0;
            -webkit-transform-origin: center right;
            transform-origin: center right;
            animation: loading-1 1.8s linear forwards;
        }
        .progress-circle .progress-value{
            width: 85%;
            height: 85%;
            border-radius: 50%;
            border: 2px solid #ebebeb;
            font-size: 20px;
            line-height: 55px;
            text-align: center;
            position: absolute;
            top: 7.5%;
            left: 7.5%;
        }
        .progress-circle.blue .progress-bar-circle{
            border-color: #049dff;
        }
        .progress-circle.blue .progress-value{
            color: #049dff;
        }
        .progress-circle.blue .progress-left .progress-bar-circle{
            animation: loading-2 1.5s linear forwards 1.8s;
        }
        .progress-circle.yellow .progress-bar-circle{
            border-color: #FFB26B;
        }
        .progress-circle.yellow .progress-value{
            color: #FFB26B;
        }
        .progress-circle.yellow .progress-left .progress-bar-circle{
            animation: loading-3 1s linear forwards 1.8s;
        }
        .progress-circle.pink .progress-bar-circle{
            border-color: #ed687c;
        }
        .progress-circle.pink .progress-value{
            color: #ed687c;
        }
        .progress-circle.pink .progress-left .progress-bar-circle{
            animation: loading-4 0.4s linear forwards 1.8s;
        }
        .progress-circle.violet .progress-bar-circle{
            border-color: #BB7ED2;
        }
        .progress-circle.violet .progress-value{
            color: #BB7ED2;
        }
        .progress-circle.violet .progress-left .progress-bar-circle{
            animation: loading-5 1.2s linear forwards 1.8s;
        }
        @keyframes loading-1{
            0%{
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100%{
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }
        }
        @keyframes loading-2{
            0%{
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100%{
                -webkit-transform: rotate(144deg);
                transform: rotate(144deg);
            }
        }
        @keyframes loading-3{
            0%{
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100%{
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }
        }
        @keyframes loading-4{
            0%{
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100%{
                -webkit-transform: rotate(36deg);
                transform: rotate(36deg);
            }
        }
        @keyframes loading-5{
            0%{
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100%{
                -webkit-transform: rotate(126deg);
                transform: rotate(126deg);
            }
        }
        @media only screen and (max-width: 990px){
            .progress-circle{ margin-bottom: 20px; }
        }
    }

    @media (min-width: 768px) {
        body {
            background-position-y: -195px;
        }
    }

    @media (min-width: 992px) {
        body {
        }
    }
</style>
