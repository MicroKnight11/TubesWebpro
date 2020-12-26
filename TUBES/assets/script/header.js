$(document).ready(function(){

    //login
    $('#login_btn').on('click',function(){
        var data = $('#login_form').serialize();
        $.ajax({
            url:base_url+'index.php/controller/login',
            type:'POST',
            data:data,
            success:function(response){
                // alert(response);
                if (response == "error"){
                    $('#login_error').show();
                }
                else{
                    location.reload();
                }
            }
        }); 
        return false;    
    });

    //logout
    $('#Logout').on('click',function(e){
        e.preventDefault(); 
        var data = $('#login_form').serialize();
        $.ajax({
            url:base_url+'index.php/controller/logout',
            type:'POST',
            data:data,
            success:function(){
                location.reload();         
            }
        }); 
        return false;    
    });

    //register
    $('#form_register').submit(function(e){
        e.preventDefault(); 
        $.ajax({
            url:base_url+'index.php/controller/register', //URL submit
            type:"post", //method Submit
            data:new FormData(this), //penggunaan FormData
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(response){
                alert(response);
                $('.form-control').val('');
                $('.modal').hide();
            }
        });
        return false; 
    });

    //upload
    $('.custom-file-input').on('change', function() { 
        let fileName = $(this).val().split('\\').pop(); 
        $(this).next('.custom-file-label').addClass("selected").html(fileName); 
    });
});