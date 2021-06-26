function resize_product() {
    const images = document.getElementsByClassName("image-resize");
    Array.from(images).forEach((elem) => {
        elem.style.height = elem.offsetWidth+'px';
    });

}

window.addEventListener("resize", () => {
    resize_product();
});

resize_product();
