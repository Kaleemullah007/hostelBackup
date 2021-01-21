
function show_form(elem)
{
	$('.filters').css('display','none');
	$('#'+elem).css('display','block');
}

function search_by_date_range()
{
	start1 = $('input[name=start-date]').val();
	end1 = $('input[name=end-date]').val();
	if(start1 != '' && end1 != ''){
	$('#inner-content').html('');
	$('#progress-content').css('display','block');
	$('select[name=search-filter]').attr('disabled','disabled');
	$('button[name=btn-date-range]').attr('disabled','disabled');
	      $.ajax({
	      url: "./accounts-pending-staff-sallary-by-daterange",
	      method:"post",
	      data:{start:start1,end:end1},
	      success:function(data){
	         setTimeout(function(){
			 $('#message').css('display','none');	         	
	         $('select[name=search-filter]').removeAttr('disabled','disabled');  
	         $('button[name=btn-date-range]').removeAttr('disabled','disabled');
	         $('#progress-content').css('display','none');
	         $('#inner-content').html(data.message);
	         },4000);
	      }        
	   });
    }	
}

function search_by_gender()
{
  gender1 = $('select[name=gender]').val();
	if(gender1 != ''){
	$('#inner-content').html('');
	$('#progress-content').css('display','block');
	$('select[name=search-filter]').attr('disabled','disabled');
	$('button[name=btn-gender]').attr('disabled','disabled');
	      $.ajax({
	      url: "./accounts-pending-staff-sallary-by-gender",
	      method:"post",
	      data:{gender:gender1},
	      success:function(data){
	         setTimeout(function(){
	         $('#message').css('display','none');
	         $('select[name=search-filter]').removeAttr('disabled','disabled');  
	         $('button[name=btn-gender]').removeAttr('disabled','disabled');
	         $('#progress-content').css('display','none');
	         $('#inner-content').html(data.message);
	         },4000);
	      }        
	   });
    }
}

function search_by_month_year()
{
	year1 = $('select[name=year]').val();
	month1 = $('select[name=month]').val();
	if(year1 != '' && month1 != ''){
	$('#inner-content').html('');
	$('#progress-content').css('display','block');
	$('select[name=search-filter]').attr('disabled','disabled');
	$('button[name=btn-month-year]').attr('disabled','disabled');
	      $.ajax({
	      url: "./accounts-pending-staff-sallary-by-monthyear",
	      method:"post",
	      data:{month:month1,year:year1},
	      success:function(data){
	         setTimeout(function(){
	         $('#message').css('display','none');
	         $('select[name=search-filter]').removeAttr('disabled','disabled');  
	         $('button[name=btn-month-year]').removeAttr('disabled','disabled');
	         $('#progress-content').css('display','none');
	         $('#inner-content').html(data.message);
	         },4000);
	      }        
	   });
    }
}

function search_by_designation()
{
	desig1 = $('select[name=designation]').val();
	if(desig1 != ''){
	$('#inner-content').html('');
	$('#progress-content').css('display','block');
	$('select[name=search-filter]').attr('disabled','disabled');
	$('button[name=btn-designation]').attr('disabled','disabled');
	      $.ajax({
	      url: "./accounts-pending-staff-sallary-by-designation",
	      method:"post",
	      data:{desig:desig1},
	      success:function(data){
	         setTimeout(function(){
	         $('#message').css('display','none');
	         $('select[name=search-filter]').removeAttr('disabled','disabled');  
	         $('button[name=btn-designation]').removeAttr('disabled','disabled');
	         $('#progress-content').css('display','none');
	         $('#inner-content').html(data.message);
	         },4000);
	      }        
	   });
    }
}

function approve_single(elems)
{
	var filter = $('select[name=search-filter]').val();
	$('#message1').css('display','none');
	$('#progress-single').css('display','block');
	$('select[name=search-filter]').attr('disabled','disabled');
	$('.btn').attr('disabled','disabled');
	      $.ajax({
	      url: "./accounts-approve-sallary",
	      method:"post",
	      data:{pending:elems},
	      success:function(data){
	         setTimeout(function(){
	         if(data.error == false){
	         $('#message1').html('<div class="alert alert-success"><span class="fa fa-smile-o">&nbsp;</span>Request Approved Successfully</div>');
	         approve_sallary(elems);
	         $('#inner-content').html('');
	         if(filter == 'designation')
         		search_by_designation();
             else if(filter == 'gender')
         		search_by_gender();
         	 else if(filter == 'date-range')
         		search_by_date_range();
         	 else if (filter == 'month-year')
         		search_by_month_year();
	         }
	     	 else{
	     	 $('#message1').html('<div class="alert alert-danger"><span class="fa fa-frown-o">&nbsp;</span>Sorry Request Failed Try Again</div>');}
	         $('#message1').css('display','block');
	         $('select[name=search-filter]').removeAttr('disabled','disabled');  
	         $('.btn').removeAttr('disabled','disabled');
	         $('#progress-single').css('display','none');
	         },4000);
	        }     
	  });
}


function approve_sallary(id){
	 $('#payroll').html('');
	 $('#message1').css('display','none');
      $.ajax({
        url: "./accounts-single-sallary-view",
        method:"post",
        data:{id1:id},
        success:function(data){
        $('#payroll').html(data.message);
        }              
      });
}