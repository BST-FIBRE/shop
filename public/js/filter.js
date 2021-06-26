const filterbox = document.getElementById("filter");

function filterAct()
{
    if (filterbox.classList.contains('retract')) filterbox.classList.remove('retract')
    else filterbox.classList.add('retract')
}
