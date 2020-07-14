<!--VERSION MOBILE-->
<div class="container display-none-pc">
    <div class="row">
        <div class="col-12">
            <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly']) ?>
        </div>
    </div>
    <div class="div-center">
        <div class="row card-inscription">
            <div class="col-12 col-center">
                <div class="nav-retour">
                    <?= $this->Html->image('inscription/arrow-retour.svg', ['class' => 'img-fluid','alt' => 'Flèche de retour', 'url' => ['controller' => 'Users', 'action' => 'index']]) ?>
                    <h2 class="title-co">Infos bancaire</h2>
                </div>
                <div class="stepper">
                    <?= $this->Html->image('inscription/steppers_2.png', ['class' => 'img-fluid step','alt' => 'Étape deux']) ?>
                </div>
                <?= $this->Form->create($rib, ['enctype' => 'multipart/form-data']); ?>
                <div>
                    <div class="row row-inscription">
                        <h3 id="id-card-title">Votre carte d'identité</h3>
                        <div class="col-12 col-input">
                            <?= $this->Form->control('idcard', ['label' => false, 'type' => 'file']); ?>
                        </div>
                    </div>
                    <div class="text-center">
                        <?php
                        echo $this->Form->button('Continuer', ['class' => 'btn btn-red text-center']);
                        echo $this->Form->end();
                        ?>
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
                <?= $this->Html->image('inscription/arrow-retour.svg', ['class' => 'img-fluid','alt' => 'Flèche de retour', 'url' => ['controller' => 'Users', 'action' => 'index']]) ?>
            </div>
            <div class="header-logo">
                <?= $this->Html->image('logo_poly_d.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly']) ?>
            </div>
        </div>
        <div class="div-form">
            <div class="stepper">
                <?= $this->Html->image('inscription/steppers_2.png', ['class' => 'img-fluid step','alt' => 'Étape deux']) ?>
            </div>
            <?= $this->Form->create($rib, ['enctype' => 'multipart/form-data']); ?>
            <div>
                <div class="row row-inscription">
                    <h3 id="id-card-title">Votre carte d'identité</h3>
                    <div class="col-12 col-input">
                        <?= $this->Form->control('idcard', ['label' => false, 'type' => 'file']); ?>
                    </div>
                </div>
                <div class="">
                    <?php
                    echo $this->Form->button('Continuer', ['class' => 'btn btn-red btn-center']);
                    echo $this->Form->end();
                    ?>
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




