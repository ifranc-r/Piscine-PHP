

$(document).ready(function() {
	ajax_function("GET", "select.php", load_todo);
	$("#button").click(function(){
		var to_add = prompt("Please enter your new line:");
		if (/^\s*$/.test(to_add) != true){
			ajax_function("GET", "insert.php?toadd="+to_add, insert);
			$("#ft_list").empty();
			ajax_function("GET", "select.php", load_todo);
		}
	});

});

function load_todo(data){
	array_todo = JSON.parse(data);
	$.each(array_todo, function(id, val){
		add2list(val, id);
	});
}
function insert(val){
	console.log(val);
}

function ajax_function(method, url, succes_f){
	$.ajax({
		method: method,
		url: url,
		data: null,
	})
	.done(function(data) {
		succes_f(data);
	});
}

function add2list(to_add, id){
	li = $("<li></li>").text(to_add);
	li.attr("id", id);
	$(li).click(function(){$(this).remove();});
	$("#ft_list").prepend(li);
}
