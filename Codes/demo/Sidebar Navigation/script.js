var navbar = document.getElementById('my-navbar');

function openNav() {
	navbar.style.left = '0px';
	document.getElementById('overlay').style.display = 'block';
}

function closeNav() {
	navbar.style.left = '-240px';
	document.getElementById('overlay').style.display = 'none';
}