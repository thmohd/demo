
$("document").ready(function(){

    /** Init**/
    $("#corebundle_user_subindustry").hide();
   $("body").on("change","#corebundle_user_phone",function(){
       $(this).mask("(000)000-0000");
   });


    /** For Modal **/

    $("body").on("click",".jsClick", function (event){


        var button = $(this);
        var ptitle = button.data('ptitle') ;
        var jsroute = button.data('route') ;

        $('#coreModal .modal-title').text(ptitle);
        $('#coreModal .modal-body').html("<div id='loader'><span class='fa fa-spinner fa-5x fa-spin'></span></div>");
        $('#coreModal .modal-body').load(jsroute);
    });

    /** show/hide SUbindustry**/

    $("#corebundle_user_industry").on("change",function(){
        //it supposed to be val(), but I used text() for control panel adding
        var selText= $("#corebundle_user_industry option:selected").text().toLowerCase();

        if(selText == "corporate"){
            $("#corebundle_user_subindustry").show();
        }
        else{
            $("#corebundle_user_subindustry").hide();
        }
    });

    /** Form submission **/

     $("body").on("submit","#reg", function(e) {

         var targetForm = $(this);
         var url = targetForm.attr('action');
         var data = $(this).serialize();

         $("#main").html("<div id='loader'><span class='fa fa-spinner fa-5x fa-spin'></span></div>");

         $.post(url, data, function () {


         }, "json")
             .done(function (data) {
                 $("#main").html(data);
             })
             .fail(function () {
                 alert("error");
             })
             .always(function () {
                 console.log("done");
             });

         e.preventDefault();

     });


});
