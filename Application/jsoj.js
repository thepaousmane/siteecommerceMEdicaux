window.onscroll = function() {scrollFunction()}
function scrollFunction() {
	var element = document.getElementById("deuxieme")
	if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) 
	{
		element.classList.add("scroll")
	} 
	else 
	{
		element.classList.remove("scroll")
	}
}

