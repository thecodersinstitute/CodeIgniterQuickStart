 <section class="tab-pane" id="validation">
              <div class="row">
                <div class="col-sm-12">
                  <form data-validate="parsley" action="" method="post">
                    <section class="panel">
                      <header class="panel-heading">
                        <span class="h4">New Admission Form</span>
                      </header>
                      <div class="panel-body">
                       
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>Enter Student Name</label>
                            <input type="text" class="form-control" data-required="true" id="name" name="student_name" value="<?php  if(isset($enquiry['name'])) {echo $enquiry['name'];}else { echo "";} ?>">   
                          </div>
                          <div class="col-sm-4">
                            <label>Father Name</label>
                            <input type="text" class="form-control"  data-required="true" name="father_name" >      
                          </div> 
							  <div class="col-sm-4">
                            <label>Mother Number</label>
                            <input type="text" class="form-control" data-required="true" id="mother_name" name="mother_name">   
                          </div> 
                        </div>
						 <div class="form-group pull-in clearfix">
                          
                          <div class="col-sm-4">
                            <label>Student Email</label>
                            <input type="email" class="form-control"  data-required="true" name="student_email" value="<?php  if(isset($enquiry['email'])) {echo $enquiry['email'];}else { echo "";} ?>" >      
                          </div> 
							  <div class="col-sm-4">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" data-required="true" id="contact_no" name="contact_number" value="<?php  if(isset($enquiry['conact_no'])) {echo $enquiry['conact_no'];}else { echo "";} ?>">   
                          </div> 
						   <div class="col-sm-4">
                            <label>Alternative Contact No.</label>
                            <input type="text" class="form-control" data-required="true" id="alternative" name="alternative" value="<?php  if(isset($enquiry['alternate_no'])) {echo $enquiry['alternate_no'];}else { echo "";} ?>">   
                          </div>
                        </div>
						  <div class="form-group pull-in clearfix">
                         
                          <div class="col-sm-4">
                            <label>Qualification</label>
                            <input type="text" class="form-control"  data-required="true" name="qualification" value="<?php  if(isset($enquiry['qualification'])) {echo $enquiry['qualification'];}else { echo "";} ?>">      
                          </div> 
							  <div class="col-sm-4">
                            <label>Stream</label>
                            <input type="text" class="form-control" data-required="true" id="stream" name="stream"value="<?php  if(isset($enquiry['stream'])) {echo $enquiry['stream'];}else { echo "";} ?>">   
                          </div>  
						   <div class="col-sm-4">
                            <label>Date of Birth</label>
                            <input type="text" class="datepicker form-control" data-required="true" id="dob" name="dob" value="<?php  if(isset($enquiry['dob'])) {echo $enquiry['dob'];}else { echo "";} ?>">   
                          </div> 
                        </div>
						  
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>Course</label>
							  <select name="course" id="course" class="form-control" onchange="set_batch(this.value)">
								  <option value="">Select Course</option>
								 <?php foreach($courses as $key =>$c){ ?>
								  <option value="<?php echo $c['name']; ?>"><?php echo $c['name']; ?></option>
								  
								  <?php } ?>
							  </select>
							  
                             <input type="hidden" class="form-control" data-required="true" id="course_id" name="course_id">   
                          </div>
                          <div class="col-sm-4">
                            <label>Preferred Timing</label>
							  <select name="batch" id="batch" class="form-control">
								  <option value="">Select Batch</option>
								  
									   
								 
							  </select>
                            <input type="hidden" class="form-control"  data-required="true" name="batch_id">      
                          </div> 
							<div class="col-sm-4">
                            <label>Course Fees</label>
                            <input type="text" class="form-control" data-required="true" id="fees" name="fees">   
                          </div>   
                        </div>
						 <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>Fees Paid</label>
                            <input type="text" class="form-control" data-required="true" id="fees_paid" name="fee_paid" onchange="set_pending(this.value)">   
                          </div>
                          <div class="col-sm-4">
                            <label>Pending Fees Amount</label>
                            <input type="text" class="form-control"  data-required="true" name="pending_fee" id="pending_fee">      
                          </div>
                         <div class="col-sm-4">
                            <label>Pending  Due date</label>
                            <input type="text" class="datepicker form-control"   name="pending_fee_date">    
                          </div>						  
                        </div>
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>College</label>
                            <input type="text" class="form-control" data-required="true" id="college" name="college" value="<?php  if(isset($enquiry['college'])) {echo $enquiry['college'];}else { echo "";} ?>">   
                          </div>
                          <div class="col-sm-4">
                            <label>Year of Passing</label>
                            <input type="text" class="form-control"  data-required="true" name="passing_year" value="<?php  if(isset($enquiry['year_of_passing'])) {echo $enquiry['year_of_passing'];}else { echo "";} ?>">      
                          </div>
                         <div class="col-sm-4">
                            <label>Address</label>
                              <input type="text" class="form-control"  data-required="true" name="address">  
                          </div>						  
                        </div>
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-12">
                            <label>Do u know any of your friend who is interested for the same course please refer his/ her name and contact:</label>
							  <textarea class="form-control" row="5" name="friend"></textarea>   
                          </div>
                           
                        </div>
						  
                        
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
                      </footer>
                    </section>
                  </form>
                </div>
				  </div>
</section>
   <script>
	  function set_batch(val)
	   {
		if(val == '')
		{
			
		return false;	
		}
		   $.ajax({
         type: "POST",
         url: '<?php echo site_url('dashboard/get_batch');?>',
         data: {course: val},
         dataType: "json",  
         cache:false,
         success: 
              function(data){
				
                $('#batch').html(JSON.stringify(data.batch));
				 $('#fees').val(JSON.stringify(data.fees));
              }
          });
		   
	   }   
	   
	  function set_pending(amount)
	  {
		  if(amount == '')
		  {
			  return false;
		  }
		 
		  var total=$('#fees').val();
		   if(amount < total) {
		  var pending= parseFloat(total) - parseFloat(amount);
		   }
		   else{
			   var pending=0;
		   }
		  $('#pending_fee').val(pending);
	  }	  
	   
</script>
            