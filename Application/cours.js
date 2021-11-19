let b = document.body;
let p1 = document.getElementById('p1');
let p2 = document.getElementById('p2');

//Supprime p1 du DOM et renvoie le noeud supprimé
let eltDel = b.removeChild(p1);

//Supprime p2 du DOM
function supp()
{
p2.remove()
}