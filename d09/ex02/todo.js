var to_do_list;

window.onload = function () {
	to_do_list = document.getElementById("ft_list");
	var tmp = document.cookie;
	if (tmp) {
		cookie = JSON.parse(tmp);
		cookie.forEach(function (e) {
			add2list(e);
		});
	}
};

window.onunload = function () {
	var todo = to_do_list.children;
	var newCookie = [];
	for (var i = 0; i < todo.length; i++)
		newCookie.unshift(todo[i].innerHTML);
	if (newCookie.length != 0)
		document.cookie = JSON.stringify(newCookie);
	else
		document.cookie = "";
};


function add2list_ev(){
	var to_add = prompt("Please enter your new line:");
	add2list(to_add);
}

function add2list(to_add){
	if (/^\s*$/.test(to_add) != true){
		var li = document.createElement("li");
		li.innerHTML = to_add;
		li.addEventListener("click", delet_li);
		if (to_do_list.firstChild)
			to_do_list.insertBefore(li, to_do_list.firstChild);
		else
			to_do_list.appendChild(li);
	}
}


function delet_li(event){
	var check = confirm("Do you want to delete this to do ?");
	if (check == true){
		list_to_do = this.parentNode;
		list_to_do.removeChild(this);
	}
}
