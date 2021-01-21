
///////////////////////////////////// username validate /////////////////////////

$(document).ready(function(){
	$('input[name=fname]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});

$(document).ready(function(){
  $('input[name=lname]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});

function dontallowspecialchars(name,e)
{
  var x =e.which || e.keyCode;
  if(x == 33 || x == 35|| x == 37 || x == 38 || x == 64 || x == 36 || x == 94 || x == 42 || x == 41 || x == 41 || x == 43 || x == 91 || x == 123 || x == 92
  || x == 58 || x == 34 || x == 60 || x == 44 || x == 63 || x == 40 || x == 95 || x == 61 || x == 93 || x == 124 || x == 125 || x == 59
  || x == 39 || x == 42 || x == 46 || x == 47 || x == 32 || x == 45 || x == 126 || x == 96){
  e.preventDefault(); 
  $('span[class="'+name+'"]').html('<p class="text-danger">special characters and spaces are not allowed</p>');
  }	
  else
   $('span[class="'+name+'"]').html(''); 
}

///////////////////////////////////// username validate /////////////////////////

///////////////////////////////////// userpass validate /////////////////////////

$(document).ready(function(){
  $('input[name=password]').on('keypress',function(){upass();});
  $('input[name=password]').on('keyup',function(event){
    var code = event.keyCode | event.which;
    if(code == 8)
    upass();
  });
});

function upass()
{
  var upass = $('input[name=password]').val();
  var passlen = upass.length;
  if(passlen<6)
    {
     $('span[class=password]').html('<p class="text-danger">password should be atleast 6 characters long</p>');
     $('input[name=password]').focus();
     return false;
    }
  else if(passlen === '')
    {
     $('span[class=password]').html('<p class="text-danger">password is required</p>');
     $('input[name=password]').focus();
     return false;
    }
  else
  {
    $('span[class=password]').html('<p class="text-success">password is right</p>');
    return true;
  } 
}

$(document).ready(function(){
  $('input[name=re-password]').on('keypress',function(){match_pass();});
  $('input[name=re-password]').on('keyup',function(event){
    match_pass();
  });
});

function match_pass()
{
  var upass = $('input[name=password]').val();
  var upass1 = $('input[name=re-password]').val();
  var passlen = upass1.length;
  if(upass !== upass1)
    {
     $('span[class=re-password]').html('<p class="text-danger">password should be matched</p>');
     $('input[name=re-password]').focus();
     return false;
    }
  else if(upass1 === '')
    {
     $('span[class=re-password]').html('<p class="text-danger">password should be matched</p>');
     $('input[name=re-password]').focus();
     return false;
    }
  else if(upass === upass1 && upass1 !== '')
  {
    $('span[class=re-password]').html('<p class="text-success">password matched</p>');
    return true;
  } 
}

///////////////////////////////////// userpass validate /////////////////////////

///////////////////////////////////// userpass confirm /////////////////////////

$(document).ready(function(){
  $('input[name=email]').on('keyup',function(){uemail();});
});

function uemail()
{
  var uemail = $('input[name=email]').val();
  var emaillen = uemail.length;
  atpos   = uemail.indexOf("@");
  dotpos  = uemail.lastIndexOf(".");
  if(emaillen === 0)
    {
     $('span[class=email]').html('<p class="text-danger">email is mandatory</p>');
     $('input[name=email]').focus();
     return false;
    } 
  else if(atpos < 3 || dotpos < atpos + 4 || dotpos+2 >= emaillen)
  {
   $('span[class=email]').html('<p class="text-danger">email should be valid</p>');
   $('input[name=email]').focus();
   return false;
  } 
  else
  {
    $('span[class=email]').html('<p class="text-success">email is correct</p>');
    return true;
  } 
}

///////////////////////////////////// userpassconfirm validate /////////////////////////

///////////////////////////////////// check if empty /////////////////////////

function checkrequired()
{
  var count = 0;
  var fields = [
                {name:'fname',message:'first name is required'},
                {name:'lname',message:'last name is required'},
                {name:'user-name',message:'user name is required'},
                {name:'password',message:'password is required'},
                {name:'dob',message:'date of birth is required'}
                ];
  $(fields).each(function(index,item){
    var uname = $('input[name='+item.name+']').val();
    var namelen = uname.length;
    if(namelen === 0)
    { 
     count++;
     $('span[class='+item.name+']').html('<p class="text-danger">'+item.message+'</p>');
     if(count == 1)
     $('input[name='+item.name+']').focus();
    }
    else
     $('span[class='+item.name+']').html('');
  });
  if(count > 0)
    return false;
  else
  {      
   return true;
  }
 }

///////////////////////////////////// check if empty ///////////////////////// 

$(document).ready(function(){
  $('#register').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   uemail();
   upass();
   match_pass();
   if(checkrequired() == true && uemail() == true && upass() == true && match_pass() == true)
   {
   var username1 = $('input[name=user-name]').val();
   var email1    = $('input[name=email]').val();
   // username ajax request //////////////
   $.ajax({
      url: "./con_general/teacher_username_exist_check",
      method:"post",
      data:{username:username1},
      success:function(response){
       if(response.error == true)
       { 
       $('span[class=user-name]').html('<p class="text-danger">'+response.message+'</p>');
       $('input[name=user-name]').focus();
       return false;
       }
       else if(response.error == false)
       {

          // email ajax request //////////////
          $.ajax({
          url: "./con_general/teacher_email_exist_check",
          method:"post",
          data:{email:email1},
          success:function(response){
           if(response.error == true)
           { 
           $('span[class=email]').html('<p class="text-danger">'+response.message+'</p>');
           $('input[name=email]').focus();
           return false;
           }
           else if(response.error == false)
           {
                // form ajax request //////////////
                 $('.progress').css('display','block');
                 $('input[name=add-teacher]').attr('disabled','disabled');
                 formData = $('#register').serialize();
                 $.ajax({
                  url: "./con_general/teacher_create",
                  method:"post",
                  data:formData,
                  success:function(response){
                   if(response.error == false)
                   { 
                   setTimeout(function(){
                   $("#register").get(0).reset();
                   $('span[class=password]').html('');
                   $('span[class=re-password]').html('');
                   $('span[class=email]').html('');
                   $("#message").css("visibility","visible");
                   $("#message").html("<div class='alert alert-success text-center'>Success! your account successfully created</div>");
                   $('.progress').css('display','none');
                   $('input[name=add-teacher]').removeAttr('disabled','disabled');  
                    setTimeout(function(){
                    $("#message").css("visibility","hidden");
                    $("#message").html(""); 
                    },4000); },4000);
                   }
                   else if(response.error == true)
                   {
                   $("#message").css("visibility","visible");
                   $("#message").html("<div class='alert alert-danger text-center'>Error! your account not created try again</div>");
                   setTimeout(function(){
                    $("#message").css("visibility","hidden");
                    $("#message").html("");
                    },4000);
                   }
                  }
                 });
                // end of form ajax request ////////////// 
             }
           }
         });
       // end of email ajax request //////////////  
       }
      }
     });
   // end of username ajax request //////////////
   }
  });
});