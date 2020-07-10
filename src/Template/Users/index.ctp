<div class="row">
    <div class="col-12">
        <?= $this->Html->image('logo_poly_c.png', ['class' => 'img-fluid logo','alt' => 'Logo Poly']) ?>
    </div>
</div>
<div class="row display-none-pc slogan">
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

