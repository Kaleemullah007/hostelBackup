
///////////////////////////////////// username validate /////////////////////////

$(document).ready(function(){
	$('input[name=name]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});

$(document).ready(function(){
  $('input[name=amount]').on('keypress',function(){dontallowspecialchars(this.name,event);});
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

function checkrequired()
{
  var count = 0;
  var fields = [
                {name:'name',message:'Asset name is required'},
                {name:'amount',message:'Amount is required'},
                {name:'date',message:'date is required'}
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
  $('#asset').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {
              $('.progress').css('display','block');
              $('input[name=add-asset]').attr('disabled','disabled');
              formData = $('#asset').serialize();
              $.ajax({
              url: "./insert-asset",
              method:"post",
              data:formData,
              success:function(data){
               if(data.error == false)
               { 
                 setTimeout(function(){
                 $("#asset").get(0).reset();
                 $("#message").css("visibility","visible");
                 $("#message").html("<div class='alert alert-success text-center'>Success! Asset Added</div>");
                 $('.progress').css('display','none');
                 $('input[name=add-asset]').removeAttr('disabled','disabled');  
                  setTimeout(function(){
                  $("#message").css("visibility","hidden");
                  $("#message").html(""); 
                  },4000); },4000);
                }
               else
               {
               $("#message").css("visibility","visible");
               $("#message").html("<div class='alert alert-danger text-center'>Failed! Asset Not Added try again</div>");
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


function updateasset(id){
    $("#myModal").show();
      $.ajax({
        url: "./update-asset",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#name').val(data.asset_name);
        $('#amount').val(data.asset_amount);

        $('#id').val(data.asset_id);
        }              
      });
}


function get_all(){
     $.ajax({
      url: "./all-assets-ajax",
      method:"get",
      success:function(data){
      $('#assets-replacable').html(data.message);
    }              
  });
}

function viewasset(id){
    $("#viewsingle-asset").show();
      $.ajax({
        url: "./view-asset",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#name1').html(data.asset_name);
        $('#amount1').html(data.asset_amount);
        $('#date1').html(data.asset_date);
        }              
      });
}

function deleteasset(id){
 confrm = confirm("Do You want to delete Asset");
 if(confrm==true){
  $.ajax({
        url: "./delete-asset",
        method:"post",
        data:{id1:id},
        success:function(data){
         if(data.error == false){
         $("#message").css("visibility","visible");
         $("#message").html("<div class='alert alert-success text-center'>Success! Asset Deleted</div>");
         setTimeout(function(){
         $("#message").css("visibility","hidden");
         $("#message").html(""); 
         $('.asset-'+id).remove();
         },4000);
        }
       else if(data.error == true){
       $("#message").css("visibility","visible");
       $("#message").html("<div class='alert alert-success text-center'>Failed! Asset Not Deleted</div>");
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
  $('#assetupdate').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {         
      $('.progress').css('display','block');
      $('input[name=update-asset]').attr('disabled','disabled');
      formData = $('#assetupdate').serialize();
      $.ajax({
      url: "./updated-asset",
      method:"post",
      data:formData,
      success:function(data){
        if(data.error == false)
        {
          setTimeout(function(){ 
          $("#myModal").modal('hide'); 
          $("#assetupdate").get(0).reset();
          $("#message").css("visibility","visible");
          $("#message").html("<div class='alert alert-success text-center'>Success! Asset Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-asset]').removeAttr('disabled','disabled');  
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
          $("#message").html("<div class='alert alert-danger text-center'>Failed! Asset Not Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-asset]').removeAttr('disabled','disabled');  
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
