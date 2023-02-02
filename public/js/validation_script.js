jQuery('#survey-form').validate({
    rules:{
        username:{
            required:true,
           
        },
        password:{
            required:true,
            minlength:5,
        },
        email:{
            required:true,
           remote:'/checkEmail/${data}',
        },
        mob_no:{
            required:true,
        },
        country:{
            required:true,
            
        },
        city:{
            required:true,
           
        },
        state:{
            required:true,
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
            remote:"This Mail Used Before"
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

