
///////////////////////////////////// username validate /////////////////////////

$(document).ready(function(){
	$('input[name=room-no]').on('keypress',function(){dontallowalphabets(this.name,event);});
});

$(document).ready(function(){
  $('input[name=room-capacity]').on('keypress',function(){dontallowalphabets(this.name,event);});
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
                {name:'room-no',message:'Room no is required',tag:'input'},
                {name:'room-capacity',message:'Room capacity is required',tag:'input'},
                {name:'room-type',message:'Please select room type',tag:'select'}
                ];
  $(fields).each(function(index,item){
    var uname = $(item.tag+'[name='+item.name+']').val();
    var namelen = uname.length;
    if(namelen === 0)
    { 
     count++;
     $('span[class='+item.name+']').html('<p class="text-danger">'+item.message+'</p>');
     if(count == 1)
     $(item.tag+'[name='+item.name+']').focus();
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
  $('#room').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {
        room_id1 = $('input[name=room-no]').val();
        $.ajax({
          url: "./check-if-exist",
          method:"post",
          data:{room_id:room_id1},
          success:function(data){
           if(data.error == false)
           { 
              $('.progress').css('display','block');
              $('input[name=add-room]').attr('disabled','disabled');
              formData = $('#room').serialize();
              $.ajax({
              url: "./insert-room",
              method:"post",
              data:formData,
              success:function(data){
               if(data.error == false)
               { 
                 setTimeout(function(){
                 $("#room").get(0).reset();
                 $("#message").css("visibility","visible");
                 $("#message").html("<div class='alert alert-success text-center'>Success! Room Added</div>");
                 $('.progress').css('display','none');
                 $('input[name=add-room]').removeAttr('disabled','disabled');  
                  setTimeout(function(){
                  $("#message").css("visibility","hidden");
                  $("#message").html(""); 
                  },4000); },4000);
                }
               else
               {
               $('.progress').css('display','none');
               $('input[name=add-room]').removeAttr('disabled','disabled');  
               $("#message").css("visibility","visible");
               $("#message").html("<div class='alert alert-danger text-center'>Failed! Room Not Added try again</div>");
               setTimeout(function(){
                $("#message").css("visibility","hidden");
                $("#message").html("");
                },4000);
               }
              }        
           });
    // end of form ajax request ////////////// 
         }
         else if(data.error == true)
         {
          $('input[name=room-no]').focus();
          $('span[class=room-no]').html('<p class="text-danger">Room No Already Exist Try Another</p>');
         }
       }
      });
  // end of room no check ajax request ////////////// 
  }
 });
});


function updateroom(id){
    // $("#myModal").show();
      $.ajax({
        url: "./update-room",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#name').val(data.room_no);
        $('#capacity').val(data.room_capacity);
        $('#type').val(data.room_type);
        $('#id').val(data.room_id);
        }              
      });
}


function get_all(){
     $.ajax({
      url: "./all-room-ajax",
      method:"get",
      success:function(data){
      $('#room-replacable').html(data.message);
    }              
  });
}

function viewroom(id){
    $.ajax({
      url: "./view-room",
      method:"post",
      data:{id1:id},
      success:function(data){
      $('#name1').html(data.room_no);
      $('#type1').html(data.cat_name);
      $('#capacity1').html(data.room_capacity);
      $('#occupied1').html(data.room_occupied_no);
      }              
    });
}

function deleteroom(id){
 confrm = confirm("Do You want to delete room detail");
 if(confrm==true){
  $.ajax({
        url: "./delete-room",
        method:"post",
        data:{id1:id},
        success:function(data){
         if(data.error == false){
         $("#message").css("visibility","visible");
         $("#message").html("<div class='alert alert-success text-center'>Success! Room Deleted</div>");
         setTimeout(function(){
         $("#message").css("visibility","hidden");
         $("#message").html(""); 
         $('.room-'+id).remove();
         },4000);
        }
       else if(data.error == true){
       $("#message").css("visibility","visible");
       $("#message").html("<div class='alert alert-success text-center'>Failed! Room Not Deleted</div>");
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
  $('#roomupdate').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {         
      $('.progress').css('display','block');
      $('input[name=update-room]').attr('disabled','disabled');
      formData = $('#roomupdate').serialize();
      $.ajax({
      url: "./updated-room",
      method:"post",
      data:formData,
      success:function(data){
        if(data.error == false)
        {
          setTimeout(function(){ 
          $("#myModal").modal('hide'); 
          $("#roomupdate").get(0).reset();
          $("#message").css("visibility","visible");
          $("#message").html("<div class='alert alert-success text-center'>Success! Room Detail Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-room]').removeAttr('disabled','disabled');  
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
          $("#message").html("<div class='alert alert-danger text-center'>Failed! Room Detail Not Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-room]').removeAttr('disabled','disabled');  
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
