var ne = $("#new");
ne.click(ntodo);

$(document).ready(function () {
	var coo = getcookie("mtodoc");
	if (coo)
	{
		var cooki = JSON.parse(coo);
		for(var i=cooki.length - 1; i >= 0;i--) {
			addtodo(cooki[i]);
			}
	}
});

$(window).on('beforeunload', function () {
	var nc = [];
	var i = 0;
	$("#ft_list").find("div").each(function () {
		nc[i++] = $(this).text();
	});
	createCookie("mtodoc", JSON.stringify(nc));
});

function getcookie(name) {
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(name + "=") == 0) return c.substring(name.length + 1, c.length);
	}
	return (null);
}

function createCookie(name, value) {
	var date = new Date();
	date.setTime(date.getTime()+(date*2*24*60*60*1000));
	var expire = "; expires="+date.toGMTString();
	document.cookie = name+"="+value+expire+"; path=/";
}

function erasecookie(name) {
	createCookie(name, "", -1);
}

function deltodo(i) {
	if (confirm("supprimer cette todo ?"))
	{
		$(i).remove();
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
	$("#ft_list").prepend('<div onclick=deltodo(this)>' + n + '</div>');
}
