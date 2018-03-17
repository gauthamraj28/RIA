	/*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
		alert("hello");
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        alert(1);
    });