<!-- Navigation Desktop -->
<header class="">
    <nav id="nav" class="fixed-top display-none-mobile">
        <div class="container">
            <div class="navbar navbar-expand-lg">
                <?= $this->Html->image('logo_poly_c.png', ['class' => 'img-fluid logo', 'alt' => 'Logo Poly', 'url' => ['action' => 'home']]) ?>
                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?= $this->Html->image('menu/accueil.png', ['class' => 'img-fluid', 'alt' => 'Accueil', 'url' => ['action' => 'home']]) ?>
                            <?= $this->Html->link('Accueil', ['action' => 'home'], ['class' => '']) ?>
                        </li>
                        <li class="nav-item">
                            <?= $this->Html->image('menu/cashback.png', ['class' => 'img-fluid', 'alt' => 'Cashback', 'url' => ['action' => '']]) ?>
                            <?= $this->Html->link('Cashback', ['action' => ''], ['class' => '']) ?>
                        </li>
                        <li class="nav-item">
                            <?= $this->Html->image('menu/analyse_active.png', ['class' => 'img-fluid', 'alt' => 'Analyse', 'url' => ['controller' => 'Transactions','action' => 'analyse']]) ?>
                            <?= $this->Html->link('Analyse', ['controller' => 'Transactions','action' => 'analyse'], ['class' => 'active']) ?>
                        </li>
                        <li class="nav-item">
                            <?= $this->Html->image('menu/menu.png', ['class' => 'img-fluid', 'alt' => 'Manu', 'url' => ['action' => '']]) ?>
                            <?= $this->Html->link('Menu', ['action' => ''], ['class' => '']) ?>
                        </li>
                        <li class="nav-item">
                            <?= $this->Html->image('deconnexion.png', ['class' => 'img-fluid avatar','alt' => 'Deconnexion', 'url' => [ 'action' => 'logout']]) ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- VERSION MOBILE -->
<div class="container display-none-pc">
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
                    <?= $this->Html->link('Dépenses', ['action' => 'analyse'], ['class' => 'active']) ?>
                </li>
                <li>
                    <?= $this->Html->link('Segmentation', ['action' => 'segmentation'], ['class' => '']) ?>
                </li>
            </ul>
        </div>
    </div>
    <!-- Fin Navigation secondaire -->

    <!-- Graphique bar  -->
    <div class="row">
        <div class="col-12 graph-bar">
            <canvas id="myChart2"></canvas>
        </div>
    </div>

    <!-- Dépenses / Cashback -->
    <div class="row">
        <div class="col-12 card-n">
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
        <div class="col-12 card-n">
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
        <div class="col-12 card-n">
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

    <div class="row cta-row">
        <div class="col-12 text-center cta-a">
            <?= $this->Html->link('Voir plus', ['action' => ''], ['class' => 'cta-link']) ?>
            <?= $this->Html->image('menu/arrow_voir_plus.svg', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
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

<!-- VERSION DESKTOP -->

<!-- Navigation secondaire -->
<div class="row nav-accueil-one display-none-mobile">
    <div class="container">
        <div class="col-12">
            <ul>
                <li>
                    <?= $this->Html->link('Dépenses', ['action' => 'analyse'], ['class' => 'active']) ?>
                </li>
                <li>
                    <?= $this->Html->link('Segmentation', ['action' => 'segmentation'], ['class' => '']) ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Fin Navigation secondaire -->

<div class="container display-none-mobile">
    <div class="row card-pc">
        <div class="col-6">
            <div class="graph-pc graph-bar">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-6">
            <!-- Dépenses / Cashback -->
            <div class="row">
                <div class="col-12 card-n">
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
                <div class="col-12 card-n">
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
                <div class="col-12 card-n">
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
                <div class="col-12 card-n">
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
                <div class="col-12 card-n">
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
        </div>
    </div>

    <div class="row cta-row">
        <div class="col-12 text-center cta-a">
            <?= $this->Html->link('Voir plus', ['action' => ''], ['class' => 'cta-link']) ?>
            <?= $this->Html->image('menu/arrow_voir_plus.svg', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
        </div>
    </div>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet'],
        datasets: [{
            barPercentage: 0.5,
            barThickness: 6,
            maxBarThickness: 8,
            minBarLength: 2,
            backgroundColor: 'rgba(255, 255, 255, 1)',
            data: [0, 109, 210.99, 150.36, 162.87, 147, 45]
        }]
    },

    // Configuration options go here
    options: {
        responsive : true,
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                },
                ticks: {
                    display: true
                }
            }],
            yAxes: [{
                gridLines: {
                    display: true
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

var ctx2 = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx2, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet'],
        datasets: [{
            barPercentage: 0.5,
            barThickness: 6,
            maxBarThickness: 8,
            minBarLength: 2,
            backgroundColor: 'rgba(255, 255, 255, 1)',
            data: [0, 109, 210.99, 150.36, 162.87, 147, 45]
        }]
    },

    // Configuration options go here
    options: {
        responsive : true,
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                },
                ticks: {
                    display: true
                }
            }],
            yAxes: [{
                gridLines: {
                    display: true
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
    }

    @media (min-width: 768px) {
        body {
            background-position-y: -195px;
        }
    }

    @media (min-width: 992px) {
        body {
            background: transparent;
        }
        .nav-accueil-one {
            /*background-image: url("../img/background/bg_menu.png");*/
            /*background-repeat: no-repeat;*/
            background: linear-gradient(357.07deg, rgba(199, 41, 86, 0.5) -0.9%, rgba(255, 151, 0, 0.5) 126.88%);
            background: #C72956; /* Old browsers */
            background: -moz-linear-gradient(357.07deg, rgba(199, 41, 86, 0.5) -0.9%, rgba(255, 151, 0, 0.5) 126.88%); /* FF3.6-15 */
            background: -webkit-linear-gradient(357.07deg, rgba(199, 41, 86, 0.5) -0.9%, rgba(255, 151, 0, 0.5) 126.88%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(357.07deg, rgba(199, 41, 86, 0.5) -0.9%, rgba(255, 151, 0, 0.5) 126.88%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            width: 100%;
            height: 150px;
        }

    }
</style>

