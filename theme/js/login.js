///////////////////////////////////// check if empty /////////////////////////

function checkrequired()
{
  var count = 0;
  var fields = [
                {name:'username',message:'username is required'},
                {name:'password',message:'password is required'},
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
  $('input[name=username]').on('keyup',function(){
  $('span[class=username]').html('');  
  });
});
$(document).ready(function(){
  $('input[name=password]').on('keyup',function(){
  $('span[class=password]').html('');  
  });
});


//////////////////////////////////  clear message block //////////////////////

$(document).ready(function(){
  $('#login').on('submit',function(event){
   event.preventDefault();
   if(checkrequired() == true)
   {
     var go_url = $('#url').attr('class');
     formData   = $('#login').serialize();
     $.ajax({
      url: go_url,
      method:"post",
      data:formData,
      success:function(response){
      if(response.error === true)
      { 
      $("#message").html('<div class="alert alert-danger"><span class="fa fa-times">&nbsp;&nbsp;</span>'+response.message+'</div>');
      }
      else if(response.error === false){
      $("#message").html('<div class="alert alert-success"><span class="fa fa-check">&nbsp;&nbsp;</span>'+response.message+'</div>');
      $("input[name=username]").attr("disabled","disabled");
      $("input[name=password]").attr("disabled","disabled");
      $("input[name=login]").attr("disabled","disabled");
      setTimeout(function(){
         $("#message").html("");
         window.location.href = "adashboard";
         },4000);
       }
  
       }
    });
  } 
  });
});
