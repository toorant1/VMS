function run()
{
	var x = document.getElementById("name").value;

	//document.getElementById("name").value = document.getElementById("name").value;
	
	//alert (x).value;


	$.ajax({
		url: "showMobile.php",
		method:"POST",
		data:{
			id:x
		},
		success:function(data){
			$("#name-id").html(data);
			alert("success");
		}
	})
	
}