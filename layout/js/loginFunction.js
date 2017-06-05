
$(document).ready(function () {

    var blank ="";
    var countError = 0;
    var floatPattern = /^[+-]?\d+(\.\d+)?$/;
    var intPattern =  /^\d+$/;
    var Xpattern = /^\(?([0-9])\)?[x]?([0-9])[x]?([0-9])$/;	
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  $("#modal").on('click', function (){
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
      });
  });


	//Close x modal
	$("#close1").on('click', function (){
	    $('#login').trigger("reset");
	    	//console.log("clear");
	   $('#emailError').text("");
	   $('#passwordError').text("");    
	});

	//Close button modal
	$("#close2").on('click', function (){
	    $('#login').trigger("reset");
	    	//console.log("clear");
	   $('#emailError').text("");
	   $('#passwordError').text("");    	
	});

  // if user click password input but email is emtry show massage
    $("input[name=password]").on('click',function () {
        if ($('#email').val() == "") {
                    $('#emailError').text("รูปแบบของอีเมลไม่ถูกต้อง กรุณากรอกอีเมลของท่านใหม่อีกครั้ง!");
                    $("#email").bind("keyup change", function(e) {
                        $('#emailError').hide();
                    });                                       
                    countError++;
                    //console.log(countError);
        }else{
        	countError = 0;
        }
        

  });
    $('#email').blur(function(){
             
             var email = $('#email').val();
             $.ajax({
               url: 'checkEmail.php',
               data: {
                 'email': email
               },
               type: "post",
               success: function(data){
                if (data == "false") {
                  //console.log(data);
                  $('#emailError').show();
                   $('#emailError').text("รูปแบบของอีเมลไม่ถูกต้อง กรุณากรอกอีเมลของท่านใหม่อีกครั้ง!");
                   document.getElementById("email").value = "";
                 }else{
                  //console.log(data);
                   $('#emailError').text("");
                 }
               }
             });
          });

  // when user click login button
	$("#submit").click(function(e){
   // e.preventDefault();
        if ($('#password').val() == "") {
                    $('#passwordError').text("กรุณากรอกรหัสผ่านของท่าน!");
                    $("#password").bind("keyup change", function(e) {
                        $('#passwordError').text("");
                    });                                       
                    countError++;
                    //console.log(countError);
        }
        if ($('#email').val() == "") {
                    $('#emailError').text("รูปแบบของอีเมลไม่ถูกต้อง กรุณากรอกอีเมลของท่านใหม่อีกครั้ง!");
                    $("#email").bind("keyup change", function(e) {
                        $('#emailError').text("");
                    });                                       
                    countError++;
                    //console.log(countError);
        }
      // check capcha
       var recaptcha = $("#g-recaptcha-response").val();
       if (recaptcha === "") {
          event.preventDefault();
          alert("กรุณายืนยันว่าท่านไม่ใช่โปรแกรมอัตโนมัติ");
          document.getElementById("email").value = "";
          document.getElementById("password").value = "";
          countError++;
       }           
		if(countError!=0){
			return false;
		}else{
			countError = 0;
}
	});
  $(".loginsubmit").click(function(e){
    e.preventDefault();
             var email = $('#email').val();
             var password = $('#password').val();
             // ajax check email and password of user
             $.ajax({
               url: 'checklogin.php',
               data: {
                 'email': email,
                 'password' : password
               },
               type: "post",
               success: function(response){
                 if(response == "อีเมล หรือ รหัสผ่านของคุณไม่ถูกต้อง"){
                   $('#checkLogin').text("อีเมล หรือ รหัสผ่านของคุณไม่ถูกต้อง");
                   document.getElementById("password").value = "";
               //    console.log(response);
                 }else{
                  $('#checkLogin').html('');
                   window.location = "selectstatus.php";
                   // console.log(response);
                 }
               }
             });

  });
});
