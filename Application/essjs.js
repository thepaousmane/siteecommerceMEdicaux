// const ratio =.1
// const options = {
//   root: null,
//   rootMargin: '0px',
//   threshold: ratio
// }
// const handleIntersect=function(entries, observer)
// {
// 	entries.forEach(function(entry){
// 		if(entry.intersectionRatio>ratio){
// 			entry.target.classList.add('reveal-visible')
// 			observer.unobserve(entry.target)
// 		}
// 	})
// }
// const observer = new IntersectionObserver(handleIntersect, options)
// observer.observe(document.querySelector('.reveal'))


const ratio =.1
const options = {
root: null,
rootMargin: '0px',
threshold: ratio
}

const handleIntersect=function(entries, observer)
{
	entries.forEach(function(entry){
		// if(entry.intersectionRatio>ratio){
			console.log(entry.intersectionRatio)
			// entry.target.classList.add('reveal-visible')
			// observer.unobserve(entry.target)
		// }
	})
}
const observer = new IntersectionObserver(handleIntersect, options)
observer.observe(document.querySelector('.reveal'))




function conversion()
{
   var somme = prompt("Entrez la valeur en Euros :")
   var resultat = somme * 6.55957
   alert(somme + " E\n" + resultat + " Frs")
}
conversion()
