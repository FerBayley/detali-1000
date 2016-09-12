//Lazy Loading
var bLazy = new Blazy({
   	selector: 'img'
});
//Lazy Loading		

//Menu off canvas //
var $BurgueButton = document.getElementById('Burguer-button');
var $menu = document.getElementById('menu');

	$BurgueButton.addEventListener('touchstart', toggleMenu);
		function toggleMenu(){
			$menu.classList.toggle('active')
	};
//Menu of canvas //
