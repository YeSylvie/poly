<div class="container">
    <div class="row">
        <div class="col-6">
            <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo', 'alt' => 'Logo Poly', 'url' => ['action' => 'home']]) ?>
        </div>
        <div class="col-6">
            <?= $this->Html->image('avatar.png', ['class' => 'img-fluid avatar','alt' => 'Photo de profil', 'url' => [ 'action' => 'logout']]) ?>
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

    <div class="row">
        <div class="col-12 text-center cta-a">
            <?= $this->Html->link('Voir l\'historique', ['action' => 'home'], ['class' => 'cta-link']) ?>
            <?= $this->Html->image('menu/arrow_voir_plus.svg', ['class' => 'img-fluid', 'alt' => '', 'url' => ['action' => '']]) ?>
        </div>
    </div>x
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
