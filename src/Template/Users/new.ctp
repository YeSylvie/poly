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
                    <h2 class="title-co">Votre profil</h2>
                </div>
                <div class="stepper">
                    <?= $this->Html->image('inscription/steppers_1.png', ['class' => 'img-fluid step','alt' => 'Étape une']) ?>
                </div>
                <?= $this->Form->create(); ?>
                <div>
                    <div class="row row-inscription">
                        <div class="col-12">
                            <?= $this->Form->select('gender', [
                                'Mme' => 'Mme.',
                                'M' => 'M.'
                            ], ['class' => 'select-co']); ?>
                        </div>
                    </div>
                    <div class="row row-inscription">
                        <div class="col-6">
                            <?= $this->Form->control('lastname', ['label' => false, 'placeholder' => 'Nom', 'class' => 'input-co']); ?>
                        </div>
                        <div class="col-6">
                            <?= $this->Form->control('firstname', ['label' => false, 'placeholder' => 'Prénom', 'class' => 'input-co']); ?>
                        </div>
                    </div>
                    <div class="row row-inscription">
                        <div class="col-12">
                            <?= $this->Form->control('mail', ['label' => false, 'placeholder' => 'polycard@exemple.com', 'class' => 'input-co']); ?>
                        </div>
                    </div>
                    <div class="row row-inscription">
                        <div class="col-6">
                            <?= $this->Form->control('password', ['label' => false, 'placeholder' => 'Mot de passe', 'class' => 'input-co']); ?>
                        </div>
                        <div class="col-6">
                            <?= $this->Form->control('phone', ['label' => false, 'placeholder' => 'Téléphone', 'class' => 'input-co']); ?>
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
                <?= $this->Html->image('inscription/steppers_1.png', ['class' => 'img-fluid step','alt' => 'Étape une']) ?>
            </div>
            <?= $this->Form->create(); ?>
            <div>
                <div class="row row-inscription">
                    <div class="col-12">
                        <?= $this->Form->select('gender', [
                            'Mme' => 'Mme.',
                            'M' => 'M.'
                        ], ['class' => 'select-co']); ?>
                    </div>
                </div>
                <div class="row row-inscription">
                    <div class="col-6">
                        <?= $this->Form->control('lastname', ['label' => false, 'placeholder' => 'Nom', 'class' => 'input-co', 'id' => 'lastname-1']); ?>
                    </div>
                    <div class="col-6">
                        <?= $this->Form->control('firstname', ['label' => false, 'placeholder' => 'Prénom', 'class' => 'input-co', 'id' => 'firstname-1']); ?>
                    </div>
                </div>
                <div class="row row-inscription">
                    <div class="col-12">
                        <?= $this->Form->control('mail', ['label' => false, 'placeholder' => 'polycard@exemple.com', 'class' => 'input-co', 'id' => 'mail-1']); ?>
                    </div>
                </div>
                <div class="row row-inscription">
                    <div class="col-6">
                        <?= $this->Form->control('password', ['label' => false, 'placeholder' => 'Mot de passe', 'class' => 'input-co', 'id' => 'password-1']); ?>
                    </div>
                    <div class="col-6">
                        <?= $this->Form->control('phone', ['label' => false, 'placeholder' => 'Téléphone', 'class' => 'input-co', 'id' => 'phone-1']); ?>
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




