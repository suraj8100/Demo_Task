jQuery('#survey-form').validate({
    rules:{
        username:"required",
        password:{
            required:true,
            minlength:5,
        },
        email:{
            required:true,
            unique: true,
            email:true,
        },
        mob_no:{
            required:true,
            unique: true,
        },
        
    },messages:{
        username:"Please Enter User Name",
        password:{
            required:"Please Enter Your Password",
            minlength:"Password Mush be 5 char long",
            
        },
        email:{
            required:"Please Enter Your Email",
            email:"Please Enter Valid Email ",
            unique:"This Mail Used Before"
        },
        mob_no:{
            required:"Please Enter Your Mob No",
            unique:"This Mobile No Used Before" 
        },
        sumbmitHandler:function(form){
            form.submit();
        }
    }

});

