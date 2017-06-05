
$(document).ready(function () {

    var blank = "";
    var countError = 0;
    var floatPattern = /^[+-]?\d+(\.\d+)?$/;
    var intPattern = /^\d+$/;
    var Xpattern = /^\(?([0-9])\)?[x]?([0-9])[x]?([0-9])$/;

    // when user click login button
    $("#search").click(function () {
        if ($('#name').val() == "") {
            $('#inputSearchError').text("กรุณากรอกคำที่ท่านต้องการค้นหา !");
            $("#name").bind("keyup change", function () {
                $('#inputSearchError').text("");
            });
            countError++;
            //console.log(countError);
        }
        if ($('input[type=radio]:checked').val() == null) {
            $('#radioError').text("กรุณาเลือกประเภทการค้นหาของบริจาคของท่าน  !");
            $('input[type=radio]').change(function () {
                    if (this.value != null) {
                      countError=0;
                      $('#radioError').text("");
                    }
                });
            countError++;
        }
        if (countError != 0) {
            return false;
        }

    });
    if(nullResult == false){
      $('#noResult').hide();
          $('#showError').text("ไม่พบรายการของบริจาคที่ค้นหา"); 
          //window.location = "DonateItem.php"
          console.log("ddd");
    }if(nullResult == true){
      $('#noResult').show();     
    }
});
