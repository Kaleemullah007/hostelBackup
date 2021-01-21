
///////////////////////////////////// username validate /////////////////////////

$(document).ready(function(){
	$('input[name=staff-name]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});

$(document).ready(function(){
  $('input[name=father-name]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});
$(document).ready(function(){
  $('input[name=gender]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});
$(document).ready(function(){
  $('input[name=desig]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});

// $(document).ready(function(){
//   $('input[name=tel]').on('keypress',function(){dontallowalphabets(this.name,event);});
// });
// $(document).ready(function(){
//   $('input[name=sallary]').on('keypress',function(){dontallowalphabets(this.name,event);});
// });





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
                {name:'staff-name',message:'Staff name is required'},
                {name:'father-name',message:'Father name is required'},
                {name:'tel',message:'Phone is required'},
                {name:'sallary',message:'Sallary is required'}
                
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
  $('#staff').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {
              $('.progress').css('display','block');
              $('input[name=add-staff]').attr('disabled','disabled');
              formData = $('#staffupdate').serialize();
              $.ajax({
              url: "./insert-staff",
              method:"post",
              data:formData,
              success:function(data){
               if(data.error == false)
               { 
                 setTimeout(function(){
                 $("#staff").get(0).reset();
                 $("#message").css("visibility","visible");
                 $("#message").html("<div class='alert alert-success text-center'>Success! Asset Added</div>");
                 $('.progress').css('display','none');
                 $('input[name=add-staff]').removeAttr('disabled','disabled');  
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


function updatestaff(id){
    $("#myModal").show();
      $.ajax({
        url: "./update-staff",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#staff-name').val(data.staff_name);
         $('#id').val(data.staff_id);
        $('#father-name').val(data.staff_father_or_husband);
        $('#sallary').val(data.staff_sallary);
        $('#tel').val(data.staff_phone);
        $('#email-staff').val(data.staff_email);
        $('#cnic').val(data.staff_cnic);
        $('#address').val(data.staff_address);
        $('#desig').val(data.staff_designation);
      /// $('#gender').val(data.staff_gender);
        }              
      });
}
function get_all(){
     $.ajax({
      url: "./all-staff-ajax",
      method:"get",
      success:function(data){
      $('#replace').html(data.message);
    }              
  });
}

function search_staff(){
  var val2 = $("#search").val();
 if(val2.length>0){
  $.ajax({
      url: "./search-staff",
      method:"post",
      data :{name:val2},
      success:function(data){
      $('#replace').html(data.message);
    }              
  });
}
}

function viewstaff(id){
    $("#viewsingle-staff").show();
      $.ajax({
        url: "./view-staff",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#staff-name1').html(data.staff_name);
        $('#father-name1').html(data.staff_father_or_husband);
        $('#sallary1').html(data.staff_sallary);
        $('#phone1').html(data.staff_phone);
        $('#email-staff1').html(data.staff_email);
        $('#cnic1').html(data.staff_cnic);
        $('#address1').html(data.staff_address);
        $('#desig1').html(data.staff_designation);
        $('#gender1').html(data.staff_gender);
        $('#doa1').html(data.staff_date_of_appointment);



        }              
      });
}

function deletestaff(id){
 confrm = confirm("Do You want to delete Staff");
 if(confrm==true){
  $.ajax({
        url: "./delete-staff",
        method:"post",
        data:{id1:id},
        success:function(data){
         if(data.error == false){
         $("#message").css("visibility","visible");
         $("#message").html("<div class='alert alert-success text-center'>Success! Staff Deleted</div>");
         setTimeout(function(){
         $("#message").css("visibility","hidden");
         $("#message").html(""); 
         $('.staff-'+id).remove();
         },4000);
        }
       else if(data.error == true){
       $("#message").css("visibility","visible");
       $("#message").html("<div class='alert alert-success text-center'>Failed! Staff Not Deleted</div>");
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
  $('#staffupdate').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {         
      $('.progress').css('display','block');
      $('input[name=update-staff]').attr('disabled','disabled');
      formData = $('#staffupdate').serialize();
      $.ajax({
      url: "./updated-staff",
      method:"post",
      data:formData,
      success:function(data){
        if(data.error == false)
        {
          setTimeout(function(){ 
          $("#myModal").modal('hide'); 
          $("#staffupdate").get(0).reset();
          $("#message").css("visibility","visible");
          $("#message").html("<div class='alert alert-success text-center'>Success! Staff Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-staff]').removeAttr('disabled','disabled');  
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
          $("#message").html("<div class='alert alert-danger text-center'>Failed! staff Not Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-staff]').removeAttr('disabled','disabled');  
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
