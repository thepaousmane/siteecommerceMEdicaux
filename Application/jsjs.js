// var numSteps = 20.0;

// var boxElement;
// var prevRatio = 0.0;
// var increasingColor = "rgba(40, 40, 190, ratio)";
// var decreasingColor = "rgba(190, 40, 40, ratio)";

// // On met l'ensemble en place.

// window.addEventListener("load", function(event) {
//   boxElement = document.querySelector("#box");

//   createObserver();
// }, 


// function createObserver() {
//   var observer;

//   var options = {
//     root: null,
//     rootMargin: "0px",
//     threshold: buildThresholdList()
//   };

//   observer = new IntersectionObserver(handleIntersect, options);
//   observer.observe(boxElement);
// }

// function buildThresholdList() {
//   var thresholds = [];

//   for (var i=1.0; i<=numSteps; i++) {
//     var ratio = i/numSteps;
//     thresholds.push(ratio);
//   }

//   thresholds.push(0);
//   return thresholds;
// }


const ratio =.1
const options = {
  root: null,
  rootMargin: '0px',
  threshold: ratio
}

const handleIntersect=function(entries, observer)
{
  entries.forEach(function(entry){
     if(entry.intersectionRatio>ratio){
      console.log('visible')
      // entry.target.classList.add('reveal-visible')
      // observer.unobserve(entry.target)
     }
     else
     {
      console.log('invi')
    }
  })
}
const observer = new IntersectionObserver(handleIntersect, options)
observer.observe(document.querySelector('.reveal'))




