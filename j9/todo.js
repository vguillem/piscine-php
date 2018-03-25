var ne = document.getElementById("new");
ne.addEventListener("click", ntodo);

window.onload = function () {
	var coo = getcookie();
	if (coo)
	{
		var cooki = JSON.parse(coo);
		for(var i=cooki.length - 1; i >= 0;i--) {
			addtodo(cooki[i]);
			}
	}
}

window.onunload = function () {
	var list = document.getElementById('ft_list').getElementsByTagName("DIV");
	var nc = [];
	for(var i=0; i<list.length;i++) {
		nc[i] = list[i].innerHTML;
	}
	createCookie("mtodoc", JSON.stringify(nc));
}

function getcookie() {
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf("mtodoc=") == 0) return c.substring(7, c.length);
	}
	return (null);
}

function createCookie(name, value) {
	var date = new Date();
	date.setTime(date.getTime()+(date*2*24*60*60*1000));
	var expire = "; expires="+date.toGMTString();
	document.cookie = name+"="+value+expire+"; path=/";
}

function erasecookie() {
	createCookie("mtodoc", "", -1);
}

function deltodo() {
	if (confirm("supprimer cette todo ?"))
	{
		this.parentElement.removeChild(this);
	}
}
function ntodo() {
	var n = prompt("tapez votre todo :");
	if (n)
	{
		addtodo(n);
	}
}
function addtodo(n) {
	var di = document.createElement("div");
	di.innerHTML = n;
	di.addEventListener('click', deltodo);
	var list = document.getElementById("ft_list");
	list.insertBefore(di, list.childNodes[0]);
}
