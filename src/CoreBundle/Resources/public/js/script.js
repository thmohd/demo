
$("document").ready(function(){


    /** Init**/
    $("#corebundle_user_subindustry").hide();
    $("#corebundle_user_phone").mask("(999)999-9999");
    $("#loading").hide();
    $("#submitBtn").attr("disabled", "disabled");

    $("body").on("change","#agreement",function(){

        if($(this).is(':checked')){
            $("#submitBtn").removeAttr("disabled");
        }
        else{
            $("#submitBtn").attr("disabled", "disabled");
        }
    });


    /** show hide loading **/
    $(document).bind("ajaxSend", function(){
        $("#loading").show();
        //$('#submitBtn').button('loading');

    }).bind("ajaxComplete", function(){
        $("#loading").hide();
       // $('#submitBtn').button('reset');
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

         $.post(url, data, function () {


         }, "json")
             .done(function (data) {

                 switch(data.status){
                     case 200:  {
                         var content = '<div class="alert alert-success" role="alert"><strong>Well done! </strong>You have successfully requested a trial user account. Please see the summary of your data below:</div> ' +
                             '<div class="resultData"> ' +
                             '<h2>'+ data.result.first_name +' '+ data.result.last_name +'</h2> ' +
                             '<p><strong>Company: </strong>'+ data.result.company +'</p> ' +
                             '<p><strong>Title: </strong>'+ data.result.user_title +'</p> ' +
                             '<p><strong>Occupation: </strong>'+ data.result.occupation.name +' </p> ' +
                             '</div>';

                         $("#main").html(content);
                     };break;
                     case 400:{
                         console.log(data);
                         var list = $("#errorsMsg").append('<ul></ul>').find('ul');
                         //for captcha errors
                         if($.isArray(data.result.error)){
                             for(var i = 0; i< data.result.error.length ; i++){
                                 list.append("<li>"+data.result.error[i]+"</li>");
                             }
                         }
                         else{
                            /// for errors
                             $.each( data.result.error, function( key, value ) {

                                 for(var i = 0; i< value.length ; i++){
                                     list.append("<li>"+value[i]+"</li>");
                                 }
                             });
                         }




                     };break;
                 }


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
