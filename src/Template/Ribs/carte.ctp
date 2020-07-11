<!--VERSION MOBILE-->
<div class="container display-none-pc">
    <div class="row">
        <div class="col-12">
            <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly', 'url' => ['controller' => 'Users', 'action' => 'index']]) ?>
        </div>
    </div>
    <div class="div-center">
        <div class="row card-inscription">
            <div class="col-sm-12 col-center">
                <div class="nav-retour">
                    <?= $this->Html->image('inscription/arrow-retour.svg', ['class' => 'img-fluid','alt' => 'Flèche de retour']) ?>
                    <h2 class="title-co">Choix carte</h2>
                </div>
                <div class="stepper">
                    <?= $this->Html->image('inscription/steppers_4.png', ['class' => 'img-fluid step','alt' => 'Étape quatre']) ?>
                </div>

                <div>
                    <div class="row row-inscription text-center">
                        <div class="col-12">
                            <?= $this->Html->image('inscription/card_one.png', ['class' => 'choix-card', 'alt' => 'Carte Poly']) ?>
                        </div>
                    </div>
                    <div class="text-center">
                        <?= $this->Html->link('Continuer', ['action' => 'validation'], ['class' => 'btn btn-red']) ?>
                    </div>
                </div>
                <div class="mc">
                    <p class="mentions-contact">
                        <?= $this->Html->link('Mentions légales', ['action' => 'mentions'], ['class' => 'mentions']) ?> -
                        <?= $this->Html->link('Contacts', ['action' => 'mentions'], ['class' => 'mentions']) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--VERSION DESKTOP-->
<div class="desktop display-none-mobile">
    <div class="image-b">
        <?= $this->Html->image('background/background.jpg', ['class' => '','alt' => '']) ?>
    </div>
    <div class="form-i">
        <div class="header-form">
            <div class="arrow-retour">
                <?= $this->Html->image('inscription/arrow-retour.svg', ['class' => 'img-fluid','alt' => 'Flèche de retour', 'url' => ['action' => 'index']]) ?>
            </div>
            <div class="header-logo">
                <?= $this->Html->image('logo_poly_d.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly']) ?>
            </div>
        </div>
        <div class="div-form">
            <div class="stepper">
                <?= $this->Html->image('inscription/steppers_4.png', ['class' => 'img-fluid step','alt' => 'Étape quatre']) ?>
            </div>

            <div>
                <div class="row row-inscription text-center">
                    <div class="col-12">
                        <?= $this->Html->image('inscription/card_one.png', ['class' => 'choix-card', 'alt' => 'Carte Poly']) ?>
                    </div>
                </div>
                <div class="">
                    <?= $this->Html->link('Continuer', ['action' => 'validation'], ['class' => 'btn btn-red btn-center']) ?>
                </div>
            </div>
        </div>
        <div class="mc">
            <p>
                <?= $this->Html->image('inscription/mc.png', ['class' => '','alt' => '']) ?>
                <?= $this->Html->link('Mentions légales', ['action' => 'mentions'], ['class' => 'mentions']) ?> -
                <?= $this->Html->link('Contacts', ['action' => 'mentions'], ['class' => 'mentions']) ?>
            </p>
        </div>
    </div>
</div>






