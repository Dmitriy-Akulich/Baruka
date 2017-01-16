var controls = document.querySelectorAll('.main-menu li');

for (var i = 0; i < controls.length; i++) {
    clickControl(controls[i]);
}

function toggleStyle(control) {
    for (var i = 0; i < controls.length; i++) {
        controls[i].classList.remove('active');
    }

    control.classList.add('active');

}

function clickControl(control) {
    control.addEventListener('click', function() {
        toggleStyle(control);
    });
}

var defaultFilter = document.querySelector('.main-menu li');
toggleStyle(defaultFilter);