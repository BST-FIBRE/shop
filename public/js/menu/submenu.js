const padding = document.getElementsByClassName('padding-header');
const padsub = document.getElementsByClassName('submenu');

function resize() {
    const padheader = document.getElementById("header");
    Array.from(padding).forEach((elem) => {
        elem.style.paddingTop = padheader.offsetHeight + "px";
    });
    Array.from(padsub).forEach((elem) => {
        elem.style.top = padheader.offsetHeight + "px";
    });
}

resize();

window.addEventListener('resize', () => {
    resize();
})
