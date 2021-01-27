function navSlide(){
	var burger = document.querySelector('.burger');
	var nav = document.querySelector('.nav-links');
	var navlinks = document.querySelectorAll('.nav-links li');

	burger.addEventListener('click', ()=>{
		
		
		




		//Toggle Icon
		nav.classList.toggle('nav-active');
		//Animation
		navlinks.forEach((link, index) =>{
			if(link.style.animation)
			{
				link.style.animation='';
			}
			else
			{
				link.style.animation = `navLinkFade 0.5s ease forwards ${index / 5 +0.5}s `;
			}
		});
	});
	
}

navSlide();