/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

/* change navbar background on scroll */
window.onscroll = function() {
	console.log(window.pageYOffset);
	var nav = document.getElementById('navbar');
	if ( window.pageYOffset > 100 ) {
		nav.classList.add("scroll",);
		document.getElementById('logo').src='assets/img/logo-hitam.png'
	} else {
		nav.classList.remove("scroll");
		document.getElementById('logo').src='assets/img/logo-putih.png'
	}
}