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
    //console.log($('#Lname').val());
                $("#address").text(" ");
                $("#address").click(function () {
                    $("#address").text("");
                });
                $("#Appointment").click(function () {
                    $("#address").text("");
                    $('#DeliveryTypeError').hide();
                    $("#address").removeClass("error");                                       
                });
                $("#Organization").click(function () {
                    $("#address").val("");
                    $("#address").text(" ");
                    $('#DeliveryTypeError').hide();                                
                });
                $("#PostOffice").click(function () {
                    $("#address").val("");
                    $("#address").text(" "); 
                    $('#DeliveryTypeError').hide();               
                });                                  
                $('input[type=radio]').change(function () {
                    if (this.value == 'รับที่จุดนัดพบ') {
                        $("div.desc").hide();
                        $("#addss").show();

                    } else {
                        $("div.desc").show();
                        $("#addss").hide();
                    }
                });
                $('select').change(function () {
                    if (this.value == 'กระเป๋า') {
                        $("div.bag").hide();
                        $("#bag").show();
                    } else {
                        $("div.bag").hide();
                        $("#bag").hide();
                    }
                });
            //binds to onchange event of your input field
                $('#myFile').bind('change', function() {
                    //this.files[0].size gets the size of your file.
                    isImage( $('#myFile').val());                 
                    if((this.files[0].size/1024/1024) > 2 ){
                    alert("ขนาดไฟล์ของท่านใหญ่เกินไป กรุณาลองใหม่อีกครั้ง");
                    $('#myFile').val("");
                    }                        
                });   

                $("#submitAdd").click(function(){
                    //console.log($('#Lname').val());
                var blank ="";
                var countError = 0;
                var floatPattern = /^[+-]?\d+(\.\d+)?$/;
                var intPattern =  /^\d+$/;
                var Xpattern = /^\(?([0-9])\)?[x]?([0-9])[x]?([0-9])$/;
                if($('#Lname').val() == "" && $('#Descript').val() == "" && $('#condi').val() == "" && $('#Amount').val() == ""
                   && $('#Width').val() == "" && $('#Height').val() == "" && $('#Depth').val() == ""){
                    alert("กรุณากรอกข้อมูลของบริจาคของท่านให้ครบก่อนดำเนินขั้นตอนถัดไป");
                    countError++;                
                }
                if($('#Lname').val() == "") { 
                    $('#LnameError').text("กรุณากรอกชื่อของบริจาค !");
                    $("#Lname").addClass("error");
                    $("#Lname").bind("keyup change", function(e) {
                        $('#LnameError').hide();
                         $("#Lname").removeClass("error");
                    });                                       
                    countError++;
                }
               if($('#Descript').val() == "") { 
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
                }            
                if($('#Width').val() == "") { 
                    $('#WidthError').text("กรุณากรอกความกว้างของบริจาคของท่าน !");
                    $("#Width").addClass("error");
                    $("#Width").bind("keyup change", function(e) {
                        if (!$('#Width').val().match(floatPattern )) {
                        $('#WidthError').text("รูปแบบข้อมูลไม่ถูกต้อง !");
                        $("#Width").addClass("error");                            
                        }else{
                        $('#WidthError').hide();
                        $("#Width").removeClass("error");                            
                         }
                    });                                       
                    countError++;
                }
                if($('#Height').val() == "") { 
                    $('#HeightError').text("กรุณากรอกความสูงของบริจาคของท่าน  !");
                    $("#Height").addClass("error");
                    $("#Height").bind("keyup change", function(e) {
                        if (!$('#Height').val().match(floatPattern )) {
                        $('#HeightError').text("รูปแบบข้อมูลไม่ถูกต้อง !");
                        $("#Height").addClass("error");                            
                        }else{
                        $('#HeightError').hide();
                        $("#Height").removeClass("error");                            
                        }
                    });                                       
                    countError++;
                }
                if($('select').val() == "กระเป๋า"){
                    if($('#Depth').val() == "") { 
                        $('#DepthError').text("กรุณากรอกความลึกของบริจาคของท่าน  !");
                        $("#Depth").addClass("error");
                        $("#Depth").bind("keyup change", function(e) {
                            if (!$('#Depth').val().match(floatPattern )) {
                            $('#DepthError').text("รูปแบบข้อมูลไม่ถูกต้อง !");
                            $("#Depth").addClass("error");                            
                            }else{
                            $('#DepthError').hide();
                            $("#Depth").removeClass("error");                            
                            }
                        });                                       
                        countError++;
                    }
                }
                if($('#myFile').val() == ""){
                    alert("ท่านยังไม่ได้เพิ่มรูปของบริจาคของท่าน กรุณาลองอีกครั้ง");
                    $('#myFile').addClass("error");
                    countError++;
                }
                if($('input[type=radio]:checked').val() == null){
                    $('#DeliveryTypeError').text("กรุณาเลือกวิธีการจัดส่งของบริจาคของท่าน  !");
                    $("#DeliveryType").addClass("error");                    
                    countError++;                    
                }
                else if($('input[type=radio]:checked').val() == "รับที่จุดนัดพบ"){
                    if($('#address').val() == ""){
                        $('#addressError').text("กรุณากรอกจุดนัดพบรับของบริจาคของท่าน  !");
                        $("#address").addClass("error");
                            $("#address").bind("keyup change", function(e) {
                                $('#addressError').hide();
                                $("#address").removeClass("error");                     
                            }); 
                            return false;                        
                    }
                    //countError++;
                }                                                                                                                  
            //console.log(countError);
                if(countError!=0) return false;
                });
              
});