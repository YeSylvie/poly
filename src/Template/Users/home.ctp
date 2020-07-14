<!-- Navigation Desktop -->
<header class="">
    <nav id="nav" class="fixed-top display-none-mobile">
        <div class="container">
            <div class="navbar navbar-expand-lg">
                    <?= $this->Html->image('logo_poly_c.png', ['class' => 'img-fluid logo', 'alt' => 'Logo Poly', 'url' => ['action' => 'home']]) ?>
                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?= $this->Html->image('menu/accueil_active.png', ['class' => 'img-fluid', 'alt' => 'Accueil', 'url' => ['action' => 'home']]) ?>
                            <?= $this->Html->link('Accueil', ['action' => 'home'], ['class' => 'active']) ?>
                        </li>
                        <li class="nav-item">
                            <?= $this->Html->image('menu/cashback.png', ['class' => 'img-fluid', 'alt' => 'Cashback', 'url' => ['action' => '']]) ?>
                            <?= $this->Html->link('Cashback', ['action' => ''], ['class' => '']) ?>
                        </li>
                        <li class="nav-item">
                            <?= $this->Html->image('menu/analyse.png', ['class' => 'img-fluid', 'alt' => 'Analyse', 'url' => ['controller' => 'Transactions','action' => 'analyse']]) ?>
                            <?= $this->Html->link('Analyse', ['controller' => 'Transactions','action' => 'analyse'], ['class' => '']) ?>
                        </li>
                        <li class="nav-item">
                            <?= $this->Html->image('menu/menu.png', ['class' => 'img-fluid', 'alt' => 'Manu', 'url' => ['action' => '']]) ?>
                            <?= $this->Html->link('Menu', ['action' => ''], ['class' => '']) ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="container c-body">
    <div class="row display-none-pc">
        <div class="col-12">
            <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo', 'alt' => 'Logo Poly', 'url' => ['action' => 'home']]) ?>
            <?= $this->Html->image('deconnexion.png', ['class' => 'img-fluid avatar','alt' => 'Photo de profil', 'url' => [ 'action' => 'logout']]) ?>
        </div>
    </div>

    <!-- Navigation secondaire -->
    <div class="row nav-accueil-one">
        <div class="col-12">
            <ul>
                <li>
                    <?= $this->Html->link('Historique', ['action' => ''], ['class' => 'disabled']) ?>
                </li>
                <li>
                    <?= $this->Html->link('Sous compte', ['action' => ''], ['class' => 'disabled']) ?>
                </li>
                <li>
                    <?= $this->Html->link('Projets', ['action' => ''], ['class' => 'disabled']) ?>
                </li>
            </ul>
        </div>
    </div>
    <!-- Fin Navigation secondaire -->

    <!-- Message de bienvenue -->
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="msg-bnv">Bonjour <?= $Auth->user(['firstname']); ?> !</h2>
        </div>
    </div>

    <!-- Solde total -->
    <div class="row">
        <div class="col-12 card-number text-center">
            <div class="solde-div">
                <p class="solde"> 5104,99 €</p>
                <span class="solde-total">Solde total</span>
            </div>
        </div>
    </div>

    <!-- Cartes -->
    <div class="row">
        <div class="col-12 text-center">
            <?= $this->Html->image('inscription/card_one.png', ['class' => 'carte-poly', 'alt' => 'Logo Poly', 'url' => ['action' => '']]) ?>
        </div>
    </div>

    <!-- Dépenses / Cashback -->
    <div class="row">
        <div class="col-12 card-number">
            <div class="dc">
                <div class="text-center">
                    <p class="dc-title">Dépenses :</p>
                    <p class="depense-number"> -904,99 €</p>
                </div>
                <div class="card-border"></div>
                <div class="text-center">
                    <p class="dc-title">Cashback :</p>
                    <p class="cashback-number"> +103,52 €</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row cta-row">
        <div class="col-12 text-center cta-a">
            <?= $this->Html->link('Voir l\'historique', ['action' => 'home'], ['class' => 'cta-link']) ?>
            <?= $this->Html->image('menu/arrow_voir_plus.svg', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
        </div>
    </div>
</div>

<!-- Navigation menu -->
<nav class="nav-mobile display-none-pc text-center fixed-bottom" role="navigation">
    <ul>
        <li>
            <div>
                <?= $this->Html->image('menu/accueil_active.png', ['class' => 'img-fluid', 'alt' => 'Accueil', 'url' => ['action' => 'home']]) ?>
            </div>
            <div>
                <?= $this->Html->link('Accueil', ['action' => 'home'], ['class' => 'active']) ?>
            </div>
        </li>
        <li>
            <div>
                <?= $this->Html->image('menu/cashback.png', ['class' => 'img-fluid', 'alt' => 'Cashback', 'url' => ['action' => '']]) ?>
            </div>
            <div>
                <?= $this->Html->link('Cashback', ['action' => ''], ['class' => '']) ?>
            </div>
        </li>
        <li>
            <div>
                <?= $this->Html->image('menu/analyse.png', ['class' => 'img-fluid', 'alt' => 'Analyse', 'url' => ['controller' => 'Transactions','action' => 'analyse']]) ?>
            </div>
            <div>
                <?= $this->Html->link('Analyse', ['controller' => 'Transactions','action' => 'analyse'], ['class' => '']) ?>
            </div>
        </li>
        <li>
            <div>
                <?= $this->Html->image('menu/menu.png', ['class' => 'img-fluid', 'alt' => 'Manu', 'url' => ['action' => '']]) ?>
            </div>
            <div>
                <?= $this->Html->link('Menu', ['action' => ''], ['class' => '']) ?>
            </div>
        </li>
    </ul>
</nav>

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
            background-image: url("../img/background/bg_home.jpg");
            background-position-y: 0!important;
        }
    }
</style>
