
	function send(){
		
		var params ={
			 name : document.getElementById("inputName").value,
		 	email : document.getElementById("inputEmail").value,
			 message : document.getElementById("inputMessage").value
		}
		emailjs.send("service_kaxr2dt","template_z39ldko",params).then(function(res){
			swal("Successfull", "Your message Successfully Received", "success");
		})
	}
