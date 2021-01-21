
function get(){


}


function search_by_date_range(){

	var start = $('#start-date').val();
	var end = $('#end-date').val();
	if(start<end){

		$('.progress').css('display','block');
		$('input[name=btn-date-range]').attr('disabled','disabled');
		$.ajax({
		url: "./incomestatementajax",
		method:"post",
		data:{start1:start,end1:end},
		success:function(data){
			setTimeout(function(){
           $('.progress').css('display','none');
			},1000);
        $('#replace').html(data.message);
		}        
		});
	}
	else{
		 $("#message").css("visibility","visible");
          $("#message").html("<div class='alert alert-danger text-center'>Start date is always smaller than end date</div>");
          setTimeout(function(){
          $("#message").css("visibility","hidden");
          $("#message").html("");
          },4000);

	}
    

}