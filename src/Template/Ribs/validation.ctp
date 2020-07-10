<div class="row">
    <div class="col-12">
        <?= $this->Html->image('logo_poly_w.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly', 'url' => ['controller' => 'Users', 'action' => 'index']]) ?>
    </div>
</div>
<div class="row card-inscription">
    <div class="col-sm-12">
        <div class="nav-retour">
            <?= $this->Html->image('inscription/arrow-retour.svg', ['class' => 'img-fluid','alt' => 'Flèche de retour']) ?>
            <h2 class="title-co">Validation</h2>
        </div>
        <div class="stepper">
            <?= $this->Html->image('inscription/steppers_5.png', ['class' => 'img-fluid step','alt' => 'Étape cinq']) ?>
        </div>

        <div>
            <div class="row row-inscription text-center">
                <div class="col-12">
                    <p>
                        <span <span class="bold">Bravo</span> vous avez créer votre profil !
                    </p>
                </div>
            </div>
            <div class="row row-inscription">
                <div class="col-12">
                    <p>
                        Nous avons le plaisir de <span class="bold">confirmer</span> la création de votre profil.
                    </p>
                    <p>
                        Nous nous réjouissons de votre inscription et nous vous souhaitons la <span <span class="bold">Bienvenue !</span>
                    </p>
                    <p>
                        Pour toute demande d’information nous restons disponible par mail et par téléphone.
                    </p>
                </div>
            </div>
            <div class="row row-inscription">
                <div class="offset-1 col-1">
                    <input type="radio" id="politique" class="input-radio" onclick="checkedthree()">
                    <span class="checkmark"></span>
                </div>
                <div class="col-9">
                    <p class="reglement">J'ai lu et j'accepte les termes de la politique de confidentialité </p>
                </div>
            </div>
            <div class="text-center">
                <?= $this->Html->link('Continuer', ['controller' => 'Users', 'action' => 'login'], ['class' => 'btn btn-red disabled', 'id' => 'btn-continue']) ?>
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




