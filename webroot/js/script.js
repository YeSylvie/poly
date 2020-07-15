// Validation du règlement
function checkedone() {
    const boxone = document.getElementById('data-perso');
    const boxtwo = document.getElementById('politique');
    const btn = document.getElementById('btn-continue');
    boxone.classList.add('checked-one');
    if (boxone.classList.contains('checked-one') && boxtwo.classList.contains('checked-two')) {
        btn.classList.remove('disabled');
    }
}

function checkedtwo() {
    const boxone = document.getElementById('data-perso');
    const boxtwo = document.getElementById('politique');
    const btn = document.getElementById('btn-continue');
    boxtwo.classList.add('checked-two');
    if (boxone.classList.contains('checked-one') && boxtwo.classList.contains('checked-two')) {
        btn.classList.remove('disabled');
    }
}

function checkedthree() {
    const boxtwo = document.getElementById('politique');
    const btn = document.getElementById('btn-continue');
    boxtwo.classList.add('checked-two');
    if (boxtwo.classList.contains('checked-two')) {
        btn.classList.remove('disabled');
    }
}

function checkedonebis() {
    const boxone = document.getElementById('data-perso-1');
    const boxtwo = document.getElementById('politique-1');
    const btn = document.getElementById('btn-continue-1');
    boxone.classList.add('checked-one');
    if (boxone.classList.contains('checked-one') && boxtwo.classList.contains('checked-two')) {
        btn.classList.remove('disabled');
    }
}

function checkedtwobis() {
    const boxone = document.getElementById('data-perso-1');
    const boxtwo = document.getElementById('politique-1');
    const btn = document.getElementById('btn-continue-1');
    boxtwo.classList.add('checked-two');
    if (boxone.classList.contains('checked-one') && boxtwo.classList.contains('checked-two')) {
        btn.classList.remove('disabled');
    }
}

function checkedthreebis() {
    const boxtwo = document.getElementById('politique-1');
    const btn = document.getElementById('btn-continue-1');
    boxtwo.classList.add('checked-two');
    if (boxtwo.classList.contains('checked-two')) {
        btn.classList.remove('disabled');
    }
}

// Navigation secondaire dans l'analyse
function activate() {
    const globale = document.getElementById('globale');
    const categorie = document.getElementById('categorie');
    globale.classList.add('active');
    if (categorie.classList.contains('active')) {
        categorie.classList.remove(('active'));
    }
}

function activatetwo() {
    const globale = document.getElementById('globale');
    const categorie = document.getElementById('categorie');
    categorie.classList.add('active');
    if (globale.classList.contains('active')) {
        globale.classList.remove('active');
    }
}



