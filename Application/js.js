// const ratio =.9
// const options = {
//   root: null,
//   rootMargin: '0px',
//   threshold: ratio
// }

// const handleIntersect=function(entries, observer)
// {
// 	entries.forEach(function(entry){
// 		if(entry.intersectionRatio>ratio){
// 			alert('yoooooo')
// 			console.log(entry.intersectionRatio)
// 			entry.target.classList.add('reveal-visible')
// 			observer.unobserve(entry.target)
// 		}
// 	})
// }
// const observer = new IntersectionObserver(handleIntersect, options)
// observer.observe(document.querySelector('.reveal'))

// const ratio =.1
// const options = {
//   root: null,
//   rootMargin: '0px',
//   threshold: ratio
// }

// const handleIntersect=function(entries, observer)
// {
// 	entries.forEach(function(entry){
// 		 if(entry.intersectionRatio>ratio){
// 			console.log('visible')
// 			// entry.target.classList.add('reveal-visible')
// 			// observer.unobserve(entry.target)
// 		 }
// 		 else
// 		 {
// 		 	alert('invi');
// 		}
// 	})
// }
// const observer = new IntersectionObserver(handleIntersect, options)
// observer.observe(document.querySelector('# reveal'))



  var counter = function() {
    
    $('#section-counter').waypoint( function( direction ) {

      if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
        $('.number').each(function(){
          var $this = $(this),
            num = $this.data('number');
            console.log(num);
          $this.animateNumber(
            {
              number: num,
              numberStep: comma_separator_number_step
            }, 7000
          );
        });
        
      }

    } , { offset: '95%' } );

  }
  counter();

  
	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();