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
                    <h2 class="title-co">Règlements</h2>
                </div>
                <div class="stepper">
                    <?= $this->Html->image('inscription/steppers_3.png', ['class' => 'img-fluid step','alt' => 'Étape trois']) ?>
                </div>

                <div>
                    <div class="row row-inscription">
                        <div class="offset-1 col-1">
                            <input type="radio" id="data-perso" class="input-radio" onclick="checkedone()">
                        </div>
                        <div class="col-9">
                            <p class="reglement">En cochant cette case, vous acceptez que vos données personnelles soient utilisées pour votre inscription au sein de Poly </p>
                            <!--                    Page de mention à revoir-->
                            <?= $this->Html->link('Mentions légales', ['action' => 'mentions'], ['class' => 'regles']) ?>
                        </div>
                    </div>
                    <div class="row row-inscription">
                        <div class="offset-1 col-1">
                            <input type="radio" id="politique" class="input-radio" onclick="checkedtwo()">
                        </div>
                        <div class="col-9">
                            <p class="reglement">J'ai lu et j'accepte les termes de la politique de confidentialité </p>
                            <!--                    Page de mention à revoir-->
                            <?= $this->Html->link('Mentions légales', ['action' => 'mentions'], ['class' => 'regles']) ?>
                        </div>
                    </div>
                    <div class="text-center">
                        <?= $this->Html->link('Continuer', ['action' => 'carte'], ['class' => 'btn btn-red disabled', 'id' => 'btn-continue']) ?>
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
                <?= $this->Html->image('inscription/steppers_3.png', ['class' => 'img-fluid step','alt' => 'Étape trois']) ?>
            </div>

            <div>
                <div class="row row-inscription">
                    <div class="offset-1 col-1">
                        <input type="radio" id="data-perso-1" class="input-radio" onclick="checkedonebis()">
                    </div>
                    <div class="col-9">
                        <p class="reglement">En cochant cette case, vous acceptez que vos données personnelles soient utilisées pour votre inscription au sein de Poly </p>
                        <!--                    Page de mention à revoir-->
                        <?= $this->Html->link('Mentions légales', ['action' => 'mentions'], ['class' => 'regles']) ?>
                    </div>
                </div>
                <div class="row row-inscription">
                    <div class="offset-1 col-1">
                        <input type="radio" id="politique-1" class="input-radio" onclick="checkedtwobis()">
                    </div>
                    <div class="col-9">
                        <p class="reglement">J'ai lu et j'accepte les termes de la politique de confidentialité </p>
                        <!--                    Page de mention à revoir-->
                        <?= $this->Html->link('Mentions légales', ['action' => 'mentions'], ['class' => 'regles']) ?>
                    </div>
                </div>
                <div class="">
                    <?= $this->Html->link('Continuer', ['action' => 'carte'], ['class' => 'btn btn-red btn-center disabled', 'id' => 'btn-continue-1']) ?>
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





