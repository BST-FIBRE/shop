const menubox = document.getElementById("menu");

function menuAct()
{
    if (menubox.classList.contains('retract')) menubox.classList.remove('retract')
    else menubox.classList.add('retract')
}
