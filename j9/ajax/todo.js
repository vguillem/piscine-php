var ne = $("#new");
ne.click(ntodo);
var i =0;

$(document).ready(function () {
	$.ajax({
		url : 'select.php',
		method : 'GET',
		success : function(result) {
			result = JSON.parse(result);
			jQuery.each(result, function(t, v) {
			var tmp = v.split(";");
				$("#ft_list").prepend('<div id="' + tmp[0] + '" onclick=deltodo(this)>' + tmp[1] + '</div>');
				i = tmp[0];
			});
			i++;
		}
	});
});

function deltodo(j) {
	if (confirm("supprimer cette todo ?"))
	{
		var tmp = $(j).attr('id');
		$.ajax({
			url : 'delete.php?id=' + tmp,
			method : 'GET',
			success : function(data) {
			alert(data);
			$(j).remove();
			}
		});
	}
}
function ntodo() {
	var n = text(prompt("tapez votre todo :"));
	if (n)
	{
		addtodo(n);
	}
}
function addtodo(n) {
	$.ajax({
		url : 'insert.php?id=' + i + '&value=' + n,
		method : 'GET',
		success : function(data) {
		$("#ft_list").prepend('<div id="' + i++ + '" onclick=deltodo(this)>' + n + '</div>');
		}
	});
}
