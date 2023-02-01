const a = document.querySelector(".a");

a.addEventListener('click', change);

function change() {
    if(document.querySelector('.a').style.color === 'rgb(255, 147, 144)') {
        document.querySelector('.a').style.color = 'white';
        document.querySelector('.a').style.backgroundColor = 'rgb(255, 147, 144)';
    } else {
        document.querySelector('.a').style.color = 'rgb(255, 147, 144)';
        document.querySelector('.a').style.backgroundColor = 'white';
    }
}