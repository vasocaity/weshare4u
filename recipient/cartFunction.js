    function showcart (){
        $.ajax({
            url: 'Incart.php',
            type: 'GET',
            //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
            //data: {param1: 'value1'}
        })
            .done(function(msg) {
                $("#cart").html(msg);

             //   console.log(msg)
            })
            .fail(function() {
              //  console.log("error");
            })
            .always(function() {
            //    console.log("complete");
            });

    }

$(document).ready(function () {
    showcart();
    $("#ContentCart").hover(function (e) {
        if (e.type == "mouseenter") {
            //console.log("over");
            $("#ShowCart").show();
        } else if (e.type == "mouseleave") {
            //console.log("out");
            $("#ShowCart").hide();
        }
    });
    $("#IneedIt").click(function () {
        console.log("sss");

    });
    
    
});

