<div class="row">
    <div class="col-12">
        <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly', 'url' => ['controller' => 'Users', 'action' => 'index']]) ?>
    </div>
</div>
<div class="row card-inscription">
    <div class="col-sm-12">
        <div class="nav-retour">
            <?= $this->Html->image('inscription/arrow-retour.svg', ['class' => 'img-fluid','alt' => 'Flèche de retour']) ?>
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




