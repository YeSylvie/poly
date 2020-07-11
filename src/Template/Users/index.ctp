<!--VERSION MOBILE-->
<div class="container display-none-pc">
    <div class="row">
        <div class="col-12">
            <?= $this->Html->image('logo_poly_c.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly']) ?>
        </div>
    </div>
    <div class="row slogan">
        <div class="col-sm-12">
            <h1>Poly, le compte en banque <br/> de toutes les familles</h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <?= $this->Html->link('Connexion', ['action' => 'login'], ['class' => 'btn btn-red connexion']) ?>
        </div>
        <div class="col-sm-12">
            <?= $this->Html->link('S\'inscrire', ['action' => 'new'], ['class' => 'btn btn-white']) ?>
        </div>
    </div>
</div>

<!--VERSION DESKTOP-->
<div class="desktop display-none-mobile">
    <div class="cadre">
        <div class="page-index">
            <?= $this->Html->image('logo_poly_d.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly']) ?>
            <?= $this->Html->link('Connexion', ['action' => 'login'], ['class' => 'btn btn-red connexion']) ?>
            <?= $this->Html->link('S\'inscrire', ['action' => 'new'], ['class' => 'btn btn-white']) ?>
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

