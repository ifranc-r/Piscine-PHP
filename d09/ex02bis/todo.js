
$(window).on("unload", function (e) {
	var newCookie =$.map($("#ft_list").children(), $.text).reverse();
	if (newCookie != 0)
		document.cookie = JSON.stringify(newCookie);
	else
		document.cookie = "";
})
$(window).on("load", function (e) {
	var tmp = document.cookie;
	if (tmp) {
		cookie = JSON.parse(tmp);
		cookie.forEach(function (el) {
			add2list(el);
		});
	}
})

$(document).ready(function() {
	$("#button").click(function(){
		var to_add = prompt("Please enter your new line:");
		add2list(to_add);
	});
});

function add2list(to_add){
	if (/^\s*$/.test(to_add) != true){
		li = $("<li></li>").text(to_add);
		$(li).click(function(){	
			var check = confirm("Do you want to delete this to do ?");
			if (check == true){
				$(this).remove();}
			});
		$("#ft_list").prepend(li);
	}
}
