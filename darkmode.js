let ele = document.body;
function changeMode(params) {
    ele.classList.toggle('dark-mode');                    
};

const seeMoreTag = document.querySelector('#seemore');
const dot = document.querySelector('.dot');
const okTag = document.querySelector('.ok');

function show(params) {
    dot.style.display = 'none';
    seeMoreTag.style.display = 'inline';
    okTag.style.display = 'inline';
}

function hide(params) {
    dot.style.display = 'inline';
    seeMoreTag.style.display = 'none';
    okTag.style.display = 'none';
}
