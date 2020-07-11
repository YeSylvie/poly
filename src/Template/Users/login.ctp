<!--VERSION MOBILE-->
<div class="container display-none-pc">
    <div class="row">
        <div class="col-12">
            <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly']) ?>
        </div>
    </div>
    <div class="row slogan">
        <div class="col-sm-12">
            <h1>Poly, le compte en banque <br/> de toutes les familles</h1>
        </div>
    </div>
    <div class="div-center">
        <div class="row card-connexion">
            <div class="col-12">
                <div class="nav-retour">
                    <?= $this->Html->image('inscription/arrow-retour.svg', ['class' => 'img-fluid','alt' => 'Logo Poly', 'url' => ['action' => 'index']]) ?>
                    <h2 class="title-co">C'est bon de vous revoir !</h2>
                </div>
                <div class="text-center">
                    <?php
                    echo $this->Form->create();
                    echo $this->Form->control('mail', ['label' => false, 'placeholder' => 'Entrez votre adresse mail', 'class' => 'input-co']);
                    echo $this->Form->control('password', ['label' => false, 'placeholder' => 'Entrez votre mot de passe', 'class' => 'input-co']);
                    echo $this->Form->button('Je me connecte', ['class' => 'btn btn-red text-center']);
                    echo $this->Form->end();
                    ?>
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
    <div class="cadre">
        <div class="page-index">
            <?= $this->Html->image('logo_poly_d.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly']) ?>
            <div class="form-co">
                <h2 class="title-co">C'est bon de vous revoir !</h2> <br/>

                <?php
                echo $this->Form->create();
                echo $this->Form->control('mail', ['label' => false, 'placeholder' => 'Entrez votre adresse mail', 'class' => 'input-co', 'id' => 'mail-2']);
                echo $this->Form->control('password', ['label' => false, 'placeholder' => 'Entrez votre mot de passe', 'class' => 'input-co', 'id' => 'passwaord-2']);
                echo $this->Form->button('Je me connecte', ['class' => 'btn btn-red text-center']);
                echo $this->Form->end();
                ?>
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




