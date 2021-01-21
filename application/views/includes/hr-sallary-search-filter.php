<!--************* search portion for range between two dates **************-->
<div id="date-range" style="display:none;" class="filters">
	<div class="col-md-5">
	<div class="form-group">
	<label>Select Start Date</label>
	  <input type="text" class="form-control" name="start-date" id="start-date"  data-date-format="yyyy-mm-dd" data-position="bottom left" data-language='en'>
	 </div>
	 </div>

	<div class="col-md-5">
	<div class="form-group">
	<label>Select End Date</label>
	  <input type="text" class="form-control" name="end-date" id="end-date" data-date-format="yyyy-mm-dd" data-position="bottom left" data-language='en'>
	 </div>
	 </div>

	<div class="col-md-2">
	<div class="form-group">
	 <button class="btn btn-primary outer-top-25" name="btn-date-range" onclick="search_by_date_range()"><span class="fa fa-search"></span></button>
	</div>
	</div>
</div>
<!--************* end of search portion for range between two dates **************-->

<!--************* search portion for designation **************-->
<div id="designation" class="filters">
	<div class="col-md-5">
	<div class="form-group">
	<label>Select Designation</label>
	  <select class="form-control" name="designation">
	  <?php foreach ($designation as $desig){ ?>
	      <option value="<?php echo $desig->staff_designation; ?>"><?php echo $desig->staff_designation; ?></option>
	  <?php } ?>
	  </select>
	 </div>
	 </div>

	<div class="col-md-2">
	<div class="form-group">
	 <button class="btn btn-primary outer-top-25" name="btn-designation" onclick="search_by_designation()"><span class="fa fa-search"></span></button>
	</div>
	</div>
</div>
<!--************* end of search portion for designation based **************-->

<!--************* search portion based on gender *********************************-->
<div id="gender" style="display:none;" class="filters">
	<div class="col-md-5">
	<div class="form-group">
	<label>Select Gender</label>
	  <select class="form-control" name="gender">
	      <option value="male">Male</option>
	      <option value="female">Female</option>
	  </select>
	 </div>
	 </div>

	<div class="col-md-2">
	<div class="form-group">
	 <button class="btn btn-primary outer-top-25" name="btn-gender" onclick="search_by_gender()"><span class="fa fa-search"></span></button>
	</div>
	</div>
</div>
<!--************* end of search portion based on gender **************-->


<!--************* search portion for month an year *******************-->
<div id="month-year" style="display:none;" class="filters">
	<div class="col-md-5">
	<div class="form-group">
	<label>Select Year</label>
	  <select class="form-control" name="year">
	      <?php $year = date('Y');
	      for($i = $year;$i>=1990;$i--){ ?>
	      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	      <?php } ?>
	  </select>
	 </div>
	 </div>

	<div class="col-md-5">
	<div class="form-group">
	<label>Select Month</label>
	  <select class="form-control" name="month">
	      <?php $months = array('January'=>'01','February'=>'02','March'=>'03','April'=>'04','May'=>'05','June'=>'06','July'=>'07','August'=>'08','September'=>'09','October'=>'10','November'=>'11','December'=>'12');
	      foreach($months as $key => $value){ ?>
	      <option value="<?php echo $value; ?>"><?php echo $key; ?></option>
	      <?php } ?>
	  </select>
	 </div>
	 </div>

	<div class="col-md-2">
	<div class="form-group">
	 <button class="btn btn-primary outer-top-25" name="btn-month-year" onclick="search_by_month_year()"><span class="fa fa-search"></span></button>
	</div>
	</div>
</div>
<!--************* end of search portion for range between two dates **************-->