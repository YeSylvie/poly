<div class="row">
    <div class="col-12">
        <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly', 'url' => ['controller' => 'Users', 'action' => 'index']]) ?>
    </div>
</div>
<div class="row card-inscription">
    <div class="col-sm-12">
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
                    <?= $this->Html->image('inscription/card_one.png', ['class' => 'img-fluid choix-card', 'alt' => 'Carte Poly']) ?>
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




