
///////////////////////////////////// username validate /////////////////////////

$(document).ready(function(){
  $('input[name=name]').on('keypress',function(){dontallowspecialchars(this.name,event);});
});

$(document).ready(function(){
  $('input[name=price]').on('keypress',function(){dontallowalphabets(this.name,event);});
});

$(document).ready(function(){
  $('input[name=qty]').on('keypress',function(){dontallowalphabets(this.name,event);});
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
                {name:'name',message:'Item name is required'},
                {name:'brand',message:'Brand is required'},
                {name:'qty',message:'Qty is required'},
                {name:'price',message:'Price is required'},
                {name:'supplier',message:'Supplier is required'},
                {name:'invoice',message:'Invoice is required'},                
                {name:'date',message:'Date is required'}
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

///////////////////////////////////// Add Inventory Record ///////////////////////// 

$(document).ready(function(){
  $('#add-inventory').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {
              $('.progress').css('display','block');
              $('input[name=add-inventory]').attr('disabled','disabled');
              formData = $('#add-inventory').serialize();
              $.ajax({
              url: "./insert-inventory",
              method:"post",
              data:formData,
              success:function(data){
               if(data.error == false)
               { 
                 setTimeout(function(){
                 $("#add-inventory").get(0).reset();
                 $("#message").css("visibility","visible");
                 $("#message").html("<div class='alert alert-success text-center'>Success! Inventory Added</div>");
                 $('.progress').css('display','none');
                 $('input[name=add-inventory]').removeAttr('disabled','disabled');  
                  setTimeout(function(){
                  $("#message").css("visibility","hidden");
                  $("#message").html(""); 
                  },4000); },4000);
                }
               else
               {
               $('.progress').css('display','none');
               $('input[name=add-inventory]').removeAttr('disabled','disabled');  
               $("#message").css("visibility","visible");
               $("#message").html("<div class='alert alert-danger text-center'>Failed! Inventory Not Added try again</div>");
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
///////////////////////////////////// End Add Inventory Record ///////////////////////// 


/*************************************Show data on  Inventory form modal *******************************/ 

function updateinventory(id){
    // $("#myModal").show();
      $.ajax({
        url: "./update-inventory",
        method:"post",
        data:{id1:id},
        success:function(data){
          //alert(data.itemin_name);
        $('#name1').val(data.itemin_name);
        $('#id').val(data.stock_id);
        $('#iteminid').val(data.itemin_id);
        $('#price1').val(data.itemin_purchase_price);
        $('#brand1').val(data.itemin_brand);
        $('#remain').val(data.itemin_quantity);
        $('#remain1').val(data.itemin_quantity);
        $('#remain2').val(data.stock_remain_quantity);
        $('#supplier1').val(data.itemin_supplier);
        $('#invoice1').val(data.itemin_invoice_no);
        $('#datepicker').val(data.itemin_date);
        }              
      });
}
/*************************************Enf  show data on  Inventory form modal **************************/ 


/****************Show specifc data on  Inventory form modal to draw amount *******************************/ 
function withdrawinventory(id){
    // $("#myModal").show();
      $.ajax({
        url: "./withdraw-inventory",
        method:"post",
        data:{id1:id},
        success:function(data){
       $('#remain0').val(data.stock_remain_quantity);
        $('#remaining').val(data.stock_remain_quantity);
        $('#id4').val(data.stock_id);
       
        }              
      });
}

/****************End of specifc data on  Inventory form modal to draw amount *******************************/ 

/****************Show all data to replace div after update *******************************/ 
function get_all(){
     $.ajax({
      url: "./all-inventory-ajax",
      method:"get",
      success:function(data){
      $('#inventory-replacable').html(data.message);
    }              
  });
}
/****************end of show all data to replace div after update *******************************/ 

/*********************************Show single record  ******************************************/ 
function viewinventory(id){
      $.ajax({
        url: "./view-inventory",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#name').html(data.itemin_name);
        $('#price').html(data.itemin_purchase_price);
        $('#brand').html(data.itemin_brand);
        $('#qty').html(data.itemin_quantity+data.itemin_unit);
        $('#remain-qty').html(data.stock_remain_quantity+data.itemin_unit);
        $('#suplier').html(data.itemin_supplier);
        $('#invoice').html(data.itemin_invoice_no);
        $('#date').html(data.itemin_date);
        }              
      });
}

/*********************************End show single record  ******************************************/ 

/*********************************Delete specific record  ******************************************/ 
function deleteinventory(id){
 confrm = confirm("Do You want to delete Inventory");
 if(confrm==true){
  $.ajax({
        url: "./delete-inventory",
        method:"post",
        data:{id1:id},
        success:function(data){
         if(data.error == false){
         $("#message").css("visibility","visible");
         $("#message").html("<div class='alert alert-success text-center'>Success! Inventory Deleted</div>");
         setTimeout(function(){
         $("#message").css("visibility","hidden");
         $("#message").html(""); 
         $('.inventory-'+id).remove();
         },4000);
        }
       else if(data.error == true){
       $("#message").css("visibility","visible");
       $("#message").html("<div class='alert alert-success text-center'>Failed! Inventory Not Deleted</div>");
       setTimeout(function(){
       $("#message").css("visibility","hidden");
       $("#message").html(""); 
       },4000);
      }
     }
    });  
   }
 }
/*********************************end of Delete specific record  ******************************************/ 
 
/*********************************Update the record and submit specific record  ****************************/ 
$(document).ready(function(){
  $('#inventoryupdate').on('submit',function(event){
   event.preventDefault();
   checkrequired();
   if(checkrequired() == true)
   {         
      $('.progress').css('display','block');
      $('input[name=update-inventory]').attr('disabled','disabled');
      formData = $('#inventoryupdate').serialize();
      $.ajax({
      url: "./updated-inventory",
      method:"post",
      data:formData,
      success:function(data){
        if(data.error == false)
        {
          setTimeout(function(){ 
          $("#myModal").modal('hide'); 
          $("#inventoryupdate").get(0).reset();
          $("#message").css("visibility","visible");
          $("#message").html("<div class='alert alert-success text-center'>Success! Inventory Detail Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-inventory]').removeAttr('disabled','disabled');  
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
          $("#message").html("<div class='alert alert-danger text-center'>Failed! Inventory Detail Not Updated</div>");
          $('.progress').css('display','none');
          $('input[name=update-inventory]').removeAttr('disabled','disabled');  
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

/*********************************End update the record and submit specific record  ****************************/ 

/*********************************validation for stock and available amount **** ****************************/ 
function withdrawcheck(){
  var val1 = $("#remain0").val();
  var val2 = $("#with").val();
  if(parseInt(val1)>parseInt(val2)){
    return true;
  }
  else{
    return false;
  }
}

/*********************************End of validation  ******************************************************/ 

/*********************************End of Add withdraw amount ******************************************************/ 
$(document).ready(function(){
  $('#addwithdraw').on('submit',function(event){
   event.preventDefault();  
   if(withdrawcheck() == true)
   { 
              $('.progress').css('display','block');
              $('input[name=add-withdraw]').attr('disabled','disabled');
              formData = $('#addwithdraw').serialize();
              $.ajax({
              url: "./insert-withdraw",
              method:"post",
              data:formData,
              success:function(data){
               if(data.error == false)
               { 
                 setTimeout(function(){
                  $("#add-withdraw").modal('hide'); 
                 $("#addwithdraw").get(0).reset();
                 $("#message").css("visibility","visible");
                 $("#message").html("<div class='alert alert-success text-center'>Success! Withdraw and Updated</div>");
                 $('.progress').css('display','none');
                 $('input[name=add-withdraw]').removeAttr('disabled','disabled');  
                  setTimeout(function(){
                  $("#message").css("visibility","hidden");
                  $("#message").html(""); 
                  get_all();
                  },4000); },4000);
                }
               else
               {
               $('.progress').css('display','none');
               $('input[name=add-withdraw]').removeAttr('disabled','disabled');  
              setTimeout(function(){
                 $("#add-withdraw").modal('hide'); 
               $("#message").css("visibility","visible");
               $("#message").html("<div class='alert alert-danger text-center'>Failed! Withdraw !!! try again</div>");
               setTimeout(function(){
                $("#message").css("visibility","hidden");
                $("#message").html("");
                },4000)},4000);
               }
              }        
           });
        }
         else
               {
                $("#addwithdraw").get(0).reset();
               $('.progress').css('display','none');
               $('input[name=add-withdraw]').removeAttr('disabled','disabled');  
                $("#add-withdraw").modal('hide'); 
               $("#message").css("visibility","visible");
               $("#message").html("<div class='alert alert-danger text-center'>Failed! Withdraw amount can not be greater than Remaining !!! try again</div>");
               setTimeout(function(){
                $("#message").css("visibility","hidden");
                $("#message").html("");
                },4000);
               }
   });
  // end of form ajax request ////////////// 
});
/*********************************End of add withdraw function  ******************************************************/ 




/////////////////////////////////17-02-2016//////////////////////////////////////////////////////////
