
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
                {name:'name',message:'Expense name is required'},
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
  $('#expense').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {
              $('.progress').css('display','block');
              $('input[name=add-expense]').attr('disabled','disabled');
              formData = $('#expense').serialize();
              $.ajax({
              url: "./insert-expense",
              method:"post",
              data:formData,
              success:function(data){
               if(data.error == false)
               { 
                 setTimeout(function(){
                 $("#expense").get(0).reset();
                 $("#message").css("visibility","visible");
                 $("#message").html("<div class='alert alert-success text-center'>Success! Expense Added</div>");
                 $('.progress').css('display','none');
                 $('input[name=add-expense]').removeAttr('disabled','disabled');  
                  setTimeout(function(){
                  $("#message").css("visibility","hidden");
                  $("#message").html(""); 
                  },4000); },4000);
                }
               else
               {
               $("#message").css("visibility","visible");
               $("#message").html("<div class='alert alert-danger text-center'>Failed! Expense Not Added try again</div>");
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


function updateexpense(id){
    $("#myModal").show();
      $.ajax({
        url: "./update-expense",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#name').val(data.expense_name);
        $('#amount').val(data.expense_amount);

        $('#id').val(data.expense_id);
        }              
      });
}


function get_all(){
     $.ajax({
      url: "./all-expense-ajax",
      method:"get",
      success:function(data){
      $('#expense-replacable').html(data.message);
    }              
  });
}

function viewexpense(id){
    $("#viewsingle-expense").show();
      $.ajax({
        url: "./view-expense",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#name1').html(data.expense_name);
        $('#amount1').html(data.expense_amount);
        $('#month1').html(data.expense_month);
        $('#date1').html(data.expense_date);
        }              
      });
}

function deleteexpense(id){
 confrm = confirm("Do You want to delete Asset");
 if(confrm==true){
  $.ajax({
        url: "./delete-expense",
        method:"post",
        data:{id1:id},
        success:function(data){
         if(data.error == false){
         $("#message").css("visibility","visible");
         $("#message").html("<div class='alert alert-success text-center'>Success! Expense Deleted</div>");
         setTimeout(function(){
         $("#message").css("visibility","hidden");
         $("#message").html(""); 
         $('.expense-'+id).remove();
         },4000);
         
        }
       else if(data.error == true){
       $("#message").css("visibility","visible");
       $("#message").html("<div class='alert alert-success text-center'>Failed! Expense Not Deleted</div>");
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
  $('#expenseupdate').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {         
      $('.progress').css('display','block');
      $('input[name=update-expense]').attr('disabled','disabled');
      formData = $('#expenseupdate').serialize();
      $.ajax({
      url: "./updated-expense",
      method:"post",
      data:formData,
      success:function(data){
        if(data.error == false)
        {
          setTimeout(function(){ 
          $("#myModal").modal('hide'); 
          $("#expenseupdate").get(0).reset();
          $("#message").css("visibility","visible");
          $("#message").html("<div class='alert alert-success text-center'>Success! Expense Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-expense]').removeAttr('disabled','disabled');  
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
          $("#message").html("<div class='alert alert-danger text-center'>Failed! Expense Not Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-expense]').removeAttr('disabled','disabled');  
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
