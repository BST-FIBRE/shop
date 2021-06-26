const input = document.getElementById('quantity');

function plus()
{
    input.value = parseInt(input.value) + 1;
}

function minus()
{
    if (input.value - 1 <= 0)
    {
        input.classList.add('shake');
        setTimeout(() => {
            input.classList.remove('shake')
        }, 1000);
    } else {
        input.value -= 1;
    }
}

const image = document.getElementById('img-pw');
const preview = document.getElementById("img-pr");
const pre = document.getElementById("preview");

if (document.documentElement.offsetWidth >= 768) {
    image.addEventListener("mousemove", (e) => {
        x = e.clientX;
        y = e.clientY;
        elem_x = image.getBoundingClientRect().left;
        elem_y = image.getBoundingClientRect().top;
        relative_x = (x - elem_x)*100/(image.offsetWidth);
        relative_y = ((y - elem_y) * 100) / (image.offsetHeight);
        preview.style.top = -relative_y + "%";
        preview.style.left = -relative_x + "%";
    });
} else if (document.documentElement.offsetWidth < 768) {
    image.addEventListener("click", (e) => {
        pre.style.display = 'flex'
    });
    document.addEventListener("click", (e) => {
        if (e.target != image) pre.style.display = 'none'
    });
}

const products = document.getElementById('products');
const right = document.getElementById('right');
const left = document.getElementById("left");

function displayArrow()
{
    if (products.scrollLeft == 0) left.style.display = "none";
    if (products.scrollLeft >= products.scrollWidth - products.offsetWidth) right.style.display = "none";
}

displayArrow()

window.addEventListener("resize", () => {
    displayArrow();
});

right.onclick = () => {
    products.scrollLeft += 75;
    if (products.scrollLeft+75 >= products.scrollWidth - products.offsetWidth)
        right.style.display = "none";
    if (products.scrollLeft+72 > 0) left.style.display = "block";
};
left.onclick = () => {
    products.scrollLeft -= 72;
    if (products.scrollLeft-72 <= 0) left.style.display = "none";
    if (products.scrollLeft-75 < products.scrollWidth - products.offsetWidth) right.style.display = "block";
};
