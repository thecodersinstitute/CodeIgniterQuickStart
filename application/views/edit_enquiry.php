 <section class="tab-pane" id="validation">
              <div class="row">
                <div class="col-sm-12">
                  <form data-validate="parsley" action="" method="post">
                    <section class="panel">
                      <header class="panel-heading" style="padding: 18px 15px;">
                        <span class="h4">Update Enquiry</span>
						 <a href="<?php echo site_url('dashboard/enquiry');?>" style="float:right"class="btn btn-s-md btn-primary">Back</a>
                      </header>
                      <div class="panel-body">
                        <p class="text-muted">Please fill the information to continue</p>
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>Enter Student Name</label>
                            <input type="text" class="form-control" data-required="true" id="name" name="student_name" value="<?php if(isset($enquiry['name'])) { echo $enquiry['name'];}?>">   
                          </div>
                          <div class="col-sm-4">
                            <label>Student Email</label>
                            <input type="email" class="form-control"  data-required="true" name="student_email" value="<?php if(isset($enquiry['email'])) { echo $enquiry['email'];}?>">      
                          </div> 
							  <div class="col-sm-4">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" data-required="true" id="contact_no" name="contact_number" value="<?php if(isset($enquiry['conact_no'])) { echo $enquiry['conact_no'];}?>">   
                          </div> 
                        </div>
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>Alternative Contact No.</label>
                            <input type="text" class="form-control" data-required="true" id="alternative" name="alternative" value="<?php if(isset($enquiry['alternate_no'])) { echo $enquiry['alternate_no'];}?>">   
                          </div>
                          <div class="col-sm-4">
                            <label>Qualification</label>
                            <input type="text" class="form-control"  data-required="true" name="qualification" value="<?php if(isset($enquiry['qualification'])) { echo $enquiry['qualification'];}?>">      
                          </div> 
							  <div class="col-sm-4">
                            <label>Stream</label>
                            <input type="text" class="form-control" data-required="true" id="stream" name="stream" value="<?php if(isset($enquiry['stream'])) { echo $enquiry['stream'];}?>">   
                          </div>  
                        </div>
						  
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>Course</label>
							  <select name="course" id="course" class="form-control" >
								  <option value="">Select Course</option>
								 <?php foreach($courses as $key =>$c){ ?>
								  <option value="<?php echo $c['name']; ?>" <?php if($enquiry['course_interested_1'] == $c['name']){echo "selected";} ?>><?php echo $c['name']; ?></option>
								  
								  <?php } ?>
							  </select>
							  
                             <input type="hidden" class="form-control" data-required="true" id="course_id" name="course_id">   
                          </div>
                          <div class="col-sm-4">
                            <label>Preferred Timing</label>
							  <select name="batch" id="batch" class="form-control">
								  <option value="">Select Preferred Timing</option>
								  <option value=" 7:00 am to 10:00 am" <?php if(isset($enquiry['time_of_preferance']) && $enquiry['time_of_preferance'] == ' 7:00 am to 10:00 am') {echo "selected";} ?>>7:00 am to 10:00 am</option>
								   <option value=" 10:00 am to 1:00 pm" <?php if(isset($enquiry['time_of_preferance']) && $enquiry['time_of_preferance'] == ' 10:00 am to 1:00 pm') {echo "selected";} ?>>10:00 am to 1:00 pm</option>
								    <option value=" 1:00 pm to 4:00 pm" <?php if(isset($enquiry['time_of_preferance']) && $enquiry['time_of_preferance'] == ' 1:00 pm to 4:00 pm') {echo "selected";} ?>> 1:00 pm to 4:00 pm</option>
									 <option value=" 4:00 pm to 7:00 pm" <?php if(isset($enquiry['time_of_preferance']) && $enquiry['time_of_preferance'] == ' 4:00 pm to 7:00 pm') {echo "selected";} ?>>4:00 pm to 7:00 pm</option>
									  <option value=" 7:00 pm to 10:00 pm" <?php if(isset($enquiry['time_of_preferance']) && $enquiry['time_of_preferance'] == ' 7:00 pm to 10:00 pm') {echo "selected";} ?>>7:00 pm to 10:00 pm</option>
									 
									   
								 
							  </select>
                                 
                          </div> 
							  <div class="col-sm-4">
                            <label>Date of Birth</label>
                            <input type="text" class="datepicker form-control" data-required="true" id="dob" name="dob" value="<?php if(isset($enquiry['dob'])) { echo $enquiry['dob'];}?>">   
                          </div>   
                        </div>
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-6">
                            <label>College</label>
                            <input type="text" class="form-control" data-required="true" id="college" name="college" value="<?php if(isset($enquiry['college'])) { echo $enquiry['college'];}?>">   
                          </div>
                          <div class="col-sm-6">
                            <label>Year of Passing</label>
                            <input type="text" class="form-control"  data-required="true" name="passing_year" value="<?php if(isset($enquiry['year_of_passing'])) { echo $enquiry['year_of_passing'];}?>">      
                          </div>   
                        </div>
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-12">
                            <label>HOW DID YOU COME TO KNOW ABOUT ARIFIN:</label>
							  <textarea class="form-control" row="5"style="height:150px" name="inflow_source"><?php if(isset($enquiry['inflow_source'])) { echo $enquiry['inflow_source'];}?></textarea>   
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
         dataType: "text",  
         cache:false,
         success: 
              function(data){
                $('#batch').html(data);
              }
          });
		   
	   }   
	   
	   
	   
</script>
            