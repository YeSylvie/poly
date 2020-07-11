<div class="container">
    <div class="row">
        <div class="col-6">
            <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo', 'alt' => 'Logo Poly', 'url' => ['controller' => 'Users','action' => 'home']]) ?>
        </div>
        <div class="col-6">
            <?= $this->Html->image('avatar.png', ['class' => 'img-fluid avatar','alt' => 'Photo de profil', 'url' => ['controller' => 'Users', 'action' => 'logout']]) ?>
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

    <!-- Graphique bar  -->
    <div class="row">
        <div class="col-12 graph-bar">
            <canvas id="myChart"></canvas>
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

    <div class="row">
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

<script>

</script>
