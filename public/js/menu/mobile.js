function deploy(id) {
    const elem = document.getElementById(id);
    elem.style.transform = "translateX(0)";
}

function retract(id) {
    Array.from(document.getElementsByClassName(id)).forEach(elem => {
       elem.style.transform = "translateX(-125%)";
    });
}

function deployed(id) {
    console.log(document.getElementById(id).style.transform == "translateX(0px)");
    return document.getElementById(id).style.transform == "translateX(0px)"
        ? true
        : false;
}
