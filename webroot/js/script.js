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





