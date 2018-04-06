function openlogin(){
	var div = document.getElementById('content');
	if(div.style.display == 'block'){
		div.style.display = "none";
	}
	else{
		div.style.display = "block";
	}
}

function closelogin(){
	var div = document.getElementById('content');
	if(div.style.display == 'block'){
		div.style.display = "none";
	}
	else{
		div.style.display = "block";
	}
}

function openregister(){
	var div = document.getElementById('registerbox');
	var login = document.getElementById('loginbox');
	var forgotte = document.getElementById('forgetbox');
	if(div.style.display == 'block'){
		div.style.display = "none";
	}
	else{
		div.style.display = "block";
		login.style.display = "none";
		forgotte.style.display = "none";
	}
}

function backregister(){
	var div = document.getElementById('registerbox');
	var login = document.getElementById('loginbox');
	var forgotte = document.getElementById('forgetbox');
	if(div.style.display == 'none'){
		div.style.display = "block";
	}
	else{
		div.style.display = "none";
		login.style.display = "block";
		forgotte.style.display = "block";
	}
}
