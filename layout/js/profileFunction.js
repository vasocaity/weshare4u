$(document).ready(function () {

    $('#ssn').attr('disabled', true);
    var passchan = 0;
    console.log(passchan);
    $('#wantToChange').hide();
    $('#Success').hide();
    $("#changPassword").click(function () {
        $('#wantToChange').show();
        passchan++;
    });

    $("#submitUpdate").click(function (e) {
        //console.log($('#Lname').val());
        e.preventDefault();
        var blank = "";
        var countError = 0;
        var floatPattern = /^[+-]?\d+(\.\d+)?$/;
        var intPattern = /^\d+$/;
        var Xpattern = /^\(?([0-9])\)?[x]?([0-9])[x]?([0-9])$/;
        function phonenumber(inputtxt)
        {
            var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            if (inputtxt.match(phoneno))
            {
                $('#phoneError').text("");
            } else
            {
                //alert("Not a valid Phone Number");
                $('#phoneError').text("รูปแบบเบอร์โทรศัพท์ของท่านไม่ถูกต้อง ตัวเลขจำนวน 10 หลักเท่านั้น !");
                countError++;
            }
        }
        if ($('#Oldpassword').val() == "" && $('#passwordconfirm1').val() == "" && $('#phone').val() == "" && $('#address').val() == ""
                && $('#answer').val() == "") {
            countError++;
        }
        if ($('#phone').val() == "" || $('#phone').val().length < 10 || $('#phone').val().substring(0, 1) !="0" ) {
            phonenumber($('#phone').val());
            $('#phoneError').text("รูปแบบเบอร์โทรศัพท์ของท่านไม่ถูกต้อง ตัวเลขจำนวน 10 หลักเท่านั้น !");
            $("#phone").addClass("error");
            $("#phone").bind("keyup change", function (e) {
                phonenumber($('#phone').val());
                $('#phoneError').text("");
                $("#phone").removeClass("error");
            });
            countError++;
        } else {
            phonenumber($('#phone').val());
        }
        if ($('#answer').val() == "") {
            $('#answerError').text("กรุณากรอกคำตอบของท่าน !");
            $("#answer").addClass("error");
            $("#answer").bind("keyup change", function (e) {
                $('#answerError').text("");
                $("#answer").removeClass("error");
            });
            countError++;
        }
        if ($('#addressUser').val() == "") {
            $('#AddressError').text("กรุณากรอกที่อยู่ของท่าน !");
            $("#addressUser").addClass("error");
            $("#addressUser").bind("keyup change", function (e) {
                $('#AddressError').text("");
                $("#addressUser").removeClass("error");
            });
            countError++;
        }
        if (passchan != 0) {
            if (!($('#passwordconfirm1').val().length > 7 && $('#passwordconfirm1').val().length < 17) &&
                    !($('#passwordconfirm2').val().length > 7 && $('#passwordconfirm2').val().length < 17)) {
                $('#passwordconfirmError').text("รูปแบบของท่านรหัสผ่านไม่ถูกต้อง ต้องมีตัวอักษรภาษาอังกฤษ ตัวใหญ่ ตัวเล็ก ตัวเลขและตัวอักษรพิเศษ อย่างละ 1 ตัว !");
                $("#Oldpassword").bind("keyup change", function (e) {
                    $('#passwordconfirmError').text("");
                });
                $("#passwordconfirm1").bind("keyup change", function (e) {
                    $('#passwordconfirmError').text("");
                });
                $("#passwordconfirm2").bind("keyup change", function (e) {
                    $('#passwordconfirmError').text("");
                });
                countError++;

            }
            if ($('#passwordconfirm1').val() != $('#passwordconfirm2').val()) {
                $('#passwordconfirmError').text("รหัสผ่านของท่านไม่ตรงกัน !");
                countError++;
            }
            if ($('#passwordconfirm1').val() == "" || $('#passwordconfirm2').val() == "" || $('#Oldpassword').val() == "") {
                $('#passwordconfirmError').text("กรุณากรอกรหัสผ่านให้ครบทุกช่อง !");
                countError++;
            }

        }

        if (countError != 0) {
            return false;
        } else {
            countError = 0;
            if (passchan == 0) {
                $("#submitUpdate").unbind('click').click();
                alert('แก้ไขข้อมูลส่วนตัวสำเร็จ!');
                console.log("response");
            } else {

                var Oldpassword = $('#Oldpassword').val();
                var passwordconfirm1 = $('#passwordconfirm1').val();
                var passwordconfirm2 = $('#passwordconfirm2').val();
                // ajax check email and password of user
                $.ajax({
                    url: 'checkPassword.php',
                    data: {
                        'passwordconfirm2': passwordconfirm1,
                        'passwordconfirm1': passwordconfirm2,
                        'Oldpassword': Oldpassword
                    },
                    type: "post",
                    success: function (response) {
                        if (response == "false") {
                            $('#passwordconfirmError').text("รูปแบบของท่านรหัสผ่านไม่ถูกต้อง ต้องมีตัวอักษรภาษาอังกฤษ ตัวใหญ่ ตัวเล็ก ตัวเลขและตัวอักษรพิเศษ อย่างละ 1 ตัว !");
                            console.log(response);

                        } else if (response == "รหัสผ่านไม่ถูกต้อง") {
                            $('#passwordconfirmError').text("รหัสผ่านเดิมของท่านไม่ถูกต้อง");
                        } else if (response == "true") {
                            $("#submitUpdate").unbind('click').click();
                            alert('แก้ไขข้อมูลส่วนตัวสำเร็จ!');
                            console.log(response);
                        }
                    }
                });

            }
        }

    });
});