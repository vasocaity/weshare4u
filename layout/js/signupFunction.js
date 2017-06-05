function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
}

function isImage(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
    case 'jpg':
    case 'gif':
    case 'jpeg':
    case 'png':
        //etc
     return true;
    }
    alert("ชนิดไฟล์ของคุณไม่ถูกต้องกรุณาลองใหม่อีกครั้ง");
    $('#myFile').val("");
    return false;
}
$(document).ready(function () {
            //binds to onchange event of your input field
                $('#myFile').bind('change', function() {
                    //this.files[0].size gets the size of your file.
                    isImage( $('#myFile').val());                 
                    if((this.files[0].size/1024/1024) > 2 ){
                    alert("ขนาดไฟล์ของท่านใหญ่เกินไป กรุณาลองใหม่อีกครั้ง");
                    $('#myFile').val("");
                    }                        
                });   

                $("#submit").click(function(){
                    //console.log($('#Lname').val());
                var blank ="";
                var countError = 0;
                            console.log(countError);
                var floatPattern = /^[+-]?\d+(\.\d+)?$/;
                var intPattern =  /^\d+$/;
                var Xpattern = /^\(?([0-9])\)?[x]?([0-9])[x]?([0-9])$/;

                if($('#lname').val() == "" && $('#fname').val() == "" && $('#email').val() == "" && $('#ssn').val() == ""
                   && $('#password').val() == "" && $('#passwordconfirm').val() == "" && $('#phone').val() == "" && $('#address').val() ==""
                   && $('#answer').val() == ""){
                    countError++;                
                }
                if($('#fname').val() == "") { 
                    $('#FnameError').text("กรุณากรอกชื่อของท่าน !");
                    $("#fname").addClass("error");
                    $("#fname").bind("keyup change", function(e) {
                        $('#FnameError').hide();
                         $("#fname").removeClass("error");
                    });                                       
                    countError++;
                }                
                if($('#lname').val() == "") { 
                    $('#LnameError').text("กรุณากรอกสกุลของท่าน !");
                    $("#lname").addClass("error");
                    $("#lname").bind("keyup change", function(e) {
                        $('#LnameError').hide();
                         $("#Lname").removeClass("error");
                    });                                       
                    countError++;
                }
              /*  if($('#Descript').val() == "") { 
                    $('#DescriptError').text("กรุณากรอกคำอธิบายของบริจาค !");
                    $("#Descript").addClass("error");
                    $("#Descript").bind("keyup change", function(e) {
                        $('#DescriptError').hide();
                         $("#Descript").removeClass("error");
                    });                                       
                    countError++;
                }
                if($('#condi').val() == "") { 
                    $('#condiError').text("กรุณากรอกสภาพของบริจาค !");
                    $("#condi").addClass("error");
                    $("#condi").bind("keyup change", function(e) {
                        $('#condiError').hide();
                         $("#condi").removeClass("error");
                    });                                       
                    countError++;
                }
               if($('#Amount').val() == "" || $('#Amount').val() < 1 || !$('#Amount').val().match(floatPattern ) || !($('#Amount').val().match(intPattern)) ) { 
                    $('#AmountError').text("กรุณากรอกจำนวนของบริจาคของท่าน อย่างน้อย 1 ชิ้น !");
                    $("#Amount").addClass("error");
                    $("#Amount").bind("keyup change", function(e) {
                         if (!$('#Amount').val().match(floatPattern ) || $('#Amount').val() < 1 || !($('#Amount').val().match(intPattern))) {
                            $('#AmountError').text("รูปแบบข้อมูลไม่ถูกต้อง !");
                            $("#Amount").addClass("error");                            
                         }else{
                        $('#AmountError').hide();
                         $("#Amount").removeClass("error");                            
                         }
                    });

                    countError++;
                }   */         
                if($('#myFile').val() == ""){
                    alert("ท่านยังไม่ได้เพิ่มรูปของบริจาคของท่าน กรุณาลองอีกครั้ง");
                    $('#myFile').addClass("error");
                    countError++;
                }                                                                                                                 
                if(countError!=0) return false;
                });
              
});