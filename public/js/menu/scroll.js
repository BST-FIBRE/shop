const filter = document.getElementById("filter");
const nav = document.getElementById('nav');
const header = document.getElementById("header");
let oldScroll = 0;

if (document.documentElement.offsetWidth >= 768) {
    document.addEventListener("scroll", () => {
        if (filter != null && document.documentElement.scrollTop > oldScroll) filter.classList.add("retract");
        else if (filter != null) filter.classList.add("retract");
        if (
            document.documentElement.scrollTop > oldScroll &&
            !nav.classList.contains("hide-nav")
        ) {
            nav.classList.add("hide-nav");
            nav.classList.remove("show-nav");
            if (filter != null)
            {
                filter.style.top = header.offsetHeight - nav.offsetHeight + 'px';
                filter.style.height = window.offsetHeight - (header.offsetHeight - nav.offsetHeight) + 'px';
            }
        } else if (
            document.documentElement.scrollTop < oldScroll &&
            nav.classList.contains("hide-nav")
        ) {
            nav.classList.remove("hide-nav");
            nav.classList.add("show-nav");
            if (filter != null)
            {
                filter.style.top = header.offsetHeight+ 'px';
                filter.style.height = window.offsetHeight - header.offsetHeight + 'px';
            }
        }
        oldScroll = document.documentElement.scrollTop;
    });
}

if (document.documentElement.offsetWidth < 768) {
    document.addEventListener("scroll", () => {
        if (
            document.documentElement.scrollTop > oldScroll &&
            !header.classList.contains("hide-nav")
        ) {
            header.classList.add("hide-nav");
            header.classList.remove("show-nav");
            if (filter != null)
            {
                filter.style.top = '0px';
                filter.style.height = window.offsetHeight+ 'px';
            }
        } else if (
            document.documentElement.scrollTop < oldScroll &&
            header.classList.contains("hide-nav")
        ) {
            header.classList.remove("hide-nav");
            header.classList.add("show-nav");
            if (filter != null)
            {
                filter.style.top = header.offsetHeight+ 'px';
                filter.style.height = window.offsetHeight - header.offsetHeight + 'px';
            }
        }
        oldScroll = document.documentElement.scrollTop;
    });
}
