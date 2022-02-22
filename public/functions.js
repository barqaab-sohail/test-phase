function submitForm(form, url,reset=0){
        //refresh token on each ajax request if this code not added than sendcond time ajax request on same page show earr token mismatched
        $.ajaxPrefilter(function(options, originalOptions, xhr) { // this will run before each request
            var token = $('meta[name="csrf-token"]').attr('content'); // or _token, whichever you are using

            if (token) {
                return xhr.setRequestHeader('X-CSRF-TOKEN', token); // adds directly to the XmlHttpRequest Object
            }
        });
         var data = new FormData(form)
       // ajax request
        $.ajax({
           url:url,
           method:"POST",
           data:data,
           //dataType:'JSON',
           contentType: false,
           cache: false,
           processData: false,
           success:function(data){
                if(data.status == 'OK'){
                $('#json_message').html('<div id="j_message" class="alert alert-success" align="left"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>'+data.message+'</strong></div>');
                }
                else{
                $('#json_message').html('<div id="j_message" class="alert alert-danger" align="left"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>'+data.message+'</strong></div>');    
                }
                if(reset==1){
                    resetForm();
                }
            $('html,body').scrollTop(0);
            $('.fa-spinner').hide();
           },
            error: function (jqXHR, textStatus, errorThrown){
                if (jqXHR.status == 401){
                    location.href = "{{route ('login')}}"
                    }      
                var test = jqXHR.responseJSON // this object have two more objects one is errors and other is message.
                
                var errorMassage = '';

                //now saperate only errors object values from test object and store in variable errorMassage;
                $.each(test.errors, function (key, value){
                errorMassage += value + '<br>';  
                });
                 $('#json_message').html('<div id="message" class="alert alert-danger" align="left"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>'+errorMassage+'</strong></div>');
                 $('html,body').scrollTop(0);
                $('.fa-spinner').hide();                   
                    
            }//end error
    }); //end ajax

}