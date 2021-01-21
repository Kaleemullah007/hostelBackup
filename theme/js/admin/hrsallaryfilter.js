
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
	      url: "./get-staff-sallary-by-daterange",
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
	      url: "./get-staff-sallary-by-gender",
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
	      url: "./get-staff-sallary-by-monthyear",
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
	      url: "./get-staff-sallary-by-designation",
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

function forward_to_admin(elems)
{
	var filter = $('select[name=search-filter]').val();
	$('#inner-content').html('');
	$('#progress-content').css('display','block');
	$('select[name=search-filter]').attr('disabled','disabled');
	$('.btn').attr('disabled','disabled');
	      $.ajax({
	      url: "./hr-forward-to-admin-list",
	      method:"post",
	      data:{pending:elems},
	      success:function(data){
	         setTimeout(function(){
	         if(data[0].error == false){
	         $('#message').html('<div class="alert alert-success"><span class="fa fa-smile-o">&nbsp;</span>List Has Been Sent To Admin</div>');}
	     	 else{
	     	 $('#message').html('<div class="alert alert-danger"><span class="fa fa-frown-o">&nbsp;</span>Sorry Complete List Not Sent To Admin Try Again</div>');}
	         $('#message').css('display','block');
	         $('select[name=search-filter]').removeAttr('disabled','disabled');  
	         $('.btn').removeAttr('disabled','disabled');
	         $('#progress-content').css('display','none');
	         	if(filter == 'designation')
	         		search_by_designation();
	         	else if(filter == 'gender')
	         		search_by_gender();
	         	else if(filter == 'date-range')
	         		search_by_date_range();
	         	else if (filter == 'month-year')
	         		search_by_month_year();
	         },4000);
	        }     
    });
}


function forward_to_admin_single(elems)
{
	var filter = $('select[name=search-filter]').val();
	$('#inner-content').html('');
	$('#progress-content').css('display','block');
	$('select[name=search-filter]').attr('disabled','disabled');
	$('.btn').attr('disabled','disabled');
	      $.ajax({
	      url: "./hr-forward-to-admin-single",
	      method:"post",
	      data:{pending:elems},
	      success:function(data){
	         setTimeout(function(){
	         if(data.error == false){
	         $('#message').html('<div class="alert alert-success"><span class="fa fa-smile-o">&nbsp;</span>Request Has Been Sent To Admin</div>');}
	     	 else{
	     	 $('#message').html('<div class="alert alert-danger"><span class="fa fa-frown-o">&nbsp;</span>Sorry Request Not Sent To Admin Try Again</div>');}
	         $('#message').css('display','block');
	         $('select[name=search-filter]').removeAttr('disabled','disabled');  
	         $('.btn').removeAttr('disabled','disabled');
	         $('#progress-content').css('display','none');
	         	if(filter == 'designation')
	         		search_by_designation();
	         	else if(filter == 'gender')
	         		search_by_gender();
	         	else if(filter == 'date-range')
	         		search_by_date_range();
	         	else if (filter == 'month-year')
	         		search_by_month_year();
	         },4000);
	        }     
	  });
}