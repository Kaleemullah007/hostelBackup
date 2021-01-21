
///////////////////////////////////// username validate /////////////////////////

$(document).ready(function(){
	$('input[name=partner-name]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});

$(document).ready(function(){
  $('input[name=partner-amount]').on('keypress',function(){dontallowalphabets(this.name,event);});
});

$(document).ready(function(){
  $('input[name=partner-percentage]').on('keypress',function(){dontallowalphabets(this.name,event);});
});

function dontallowspecialchars(name,e)
{
  var x =e.which || e.keyCode;
  if(x == 33 || x == 35|| x == 37 || x == 38 || x == 64 || x == 36 || x == 94 || x == 42 || x == 41 || x == 41 || x == 43 || x == 91 || x == 123 || x == 92
  || x == 58 || x == 34 || x == 60 || x == 44 || x == 63 || x == 40 || x == 95 || x == 61 || x == 93 || x == 124 || x == 125 || x == 59
  || x == 39 || x == 42 || x == 46 || x == 47  || x == 45 || x == 126 || x == 96){
  e.preventDefault(); 
  $('span[class="'+name+'"]').html('<p class="text-danger">special characters and spaces are not allowed</p>');
  }	
  else
   $('span[class="'+name+'"]').html(''); 
}

function dontallowalphabets(name,e)
{
  var x =e.which || e.keyCode;
  if(x < 48 || x > 57){
  e.preventDefault(); 
  $('span[class="'+name+'"]').html('<p class="text-danger">only numbers are allowed</p>');
  } 
  else
   $('span[class="'+name+'"]').html(''); 
}

function checkrequired()
{
  var count = 0;
  var fields = [
                {name:'partner-name',message:'Partner name is required'},
                {name:'partner-amount',message:'Amount is required'},
                {name:'partner-percentage',message:'Percentage is required'}
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
  $('#add-partner').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {
              $('.progress').css('display','block');
              $('input[name=add-partner]').attr('disabled','disabled');
              formData = $('#add-partner').serialize();
              $.ajax({
              url: "./insert-partner",
              method:"post",
              data:formData,
              success:function(data){
               if(data.error == false)
               { 
                 setTimeout(function(){
                 $("#add-partner").get(0).reset();
                 $("#message").css("visibility","visible");
                 $("#message").html("<div class='alert alert-success text-center'>Success! Prtner Added</div>");
                 $('.progress').css('display','none');
                 $('input[name=add-partner]').removeAttr('disabled','disabled');  
                  setTimeout(function(){
                  $("#message").css("visibility","hidden");
                  $("#message").html(""); 
                  },4000); },4000);
                }
               else
               {
               $('.progress').css('display','none');
               $('input[name=add-partner]').removeAttr('disabled','disabled');  
               $("#message").css("visibility","visible");
               $("#message").html("<div class='alert alert-danger text-center'>Failed! Partner Not Added try again</div>");
               setTimeout(function(){
                $("#message").css("visibility","hidden");
                $("#message").html("");
                },4000);
               }
              }        
           });
        }
   });
  // end of form ajax request ////////////// 
});


function updatepartner(id){
    // $("#myModal").show();
      $.ajax({
        url: "./update-partner",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#name').val(data.liable_partner_name);
        $('#amount').val(data.liable_partner_amount);
        $('#percentage').val(data.liable_partner_percentage);
        $('#id').val(data.liable_id);
        }              
      });
}


function get_all(){
     $.ajax({
      url: "./all-partners-ajax",
      method:"get",
      success:function(data){
      $('#partners-replacable').html(data.message);
    }              
  });
}

function viewpartner(id){
    // $("#viewsingle-partner").show();
      $.ajax({
        url: "./view-partner",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#name1').html(data.liable_partner_name);
        $('#amount1').html(data.liable_partner_amount);
        $('#percentage1').html(data.liable_partner_percentage);
        }              
      });
}

function deletepartner(id){
 confrm = confirm("Do You want to delete partner");
 if(confrm==true){
  $.ajax({
        url: "./delete-partner",
        method:"post",
        data:{id1:id},
        success:function(data){
         if(data.error == false){
         $("#message").css("visibility","visible");
         $("#message").html("<div class='alert alert-success text-center'>Success! partner Deleted</div>");
         setTimeout(function(){
         $("#message").css("visibility","hidden");
         $("#message").html(""); 
         $('.partner-'+id).remove();
         },4000);
        }
       else if(data.error == true){
       $("#message").css("visibility","visible");
       $("#message").html("<div class='alert alert-success text-center'>Failed! partner Not Deleted</div>");
       setTimeout(function(){
       $("#message").css("visibility","hidden");
       $("#message").html(""); 
       },4000);
      }
     }
    });  
   }
 }


$(document).ready(function(){
  $('#partnerupdate').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {         
      $('.progress').css('display','block');
      $('input[name=update-partner]').attr('disabled','disabled');
      formData = $('#partnerupdate').serialize();
      $.ajax({
      url: "./updated-partner",
      method:"post",
      data:formData,
      success:function(data){
        if(data.error == false)
        {
          setTimeout(function(){ 
          $("#myModal").modal('hide'); 
          $("#partnerupdate").get(0).reset();
          $("#message").css("visibility","visible");
          $("#message").html("<div class='alert alert-success text-center'>Success! Partner Detail Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-partner]').removeAttr('disabled','disabled');  
          setTimeout(function(){
          $("#message").css("visibility","hidden");
          $("#message").html("");
          get_all();
          },4000);},4000);
        }
        else
        {
          setTimeout(function(){ 
          $("#myModal").modal('hide');   
          $("#message").css("visibility","visible");
          $("#message").html("<div class='alert alert-danger text-center'>Failed! Partner Detail Not Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-partner]').removeAttr('disabled','disabled');  
          setTimeout(function(){
          $("#message").css("visibility","hidden");
          $("#message").html("");
          },4000);},4000);}
        }
      });
     }
  });
  // end of form ajax request ////////////// 
});
