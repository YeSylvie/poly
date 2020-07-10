<div class="row">
    <div class="col-12">
        <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly', 'url' => ['action' => 'index']]) ?>
    </div>
</div>
<div class="row card-inscription">
    <div class="col-sm-12">
        <div class="nav-retour">
            <?= $this->Html->image('inscription/arrow-retour.svg', ['class' => 'img-fluid','alt' => 'Flèche de retour', 'url' => ['action' => 'index']]) ?>
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




