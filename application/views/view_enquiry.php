<section class="panel">
                <header class="panel-heading" style="padding:35px">
                  <h4> Enquiry Detail </h4>
				  <a href="<?php echo site_url('dashboard/enquiry');?>" style="float:right"class="btn btn-s-md btn-primary">Back</a>
                </header>
               
                <div class="table-responsive" style="padding:20px">
                  <div class="col-sm-12 col-md-12 ">
               
				
				  <div class="col-md-3 col-sm-6">
				  <label>Student Name </label>
				  <p><?php echo $enquiry['name'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Student Qualification </label>
				 <p><?php echo $enquiry['qualification'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Student Stream </label>
				 <p><?php echo $enquiry['stream'];?></p>
				  </div>
				 <div class="col-md-3 col-sm-6">
				  <label>Contact No. </label>
				 <p><?php echo $enquiry['conact_no'];?></p>
				  </div>
				  
				
                </div>
				  <div class="col-sm-12 col-md-12">
               
				
				 
				  <div class="col-md-3 col-sm-6">
				  <label>Alternative Contact No. </label>
				 <p><?php echo $enquiry['alternate_no'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Email </label>
				  <p><?php echo $enquiry['email'];?></p>
				  </div>
				   <div class="col-md-3 col-sm-6">
				  <label>Course Intrested </label>
				  <p><?php echo $enquiry['course_interested_1'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Preferred Timing</label>
				  <p><?php echo $enquiry['time_of_preferance'];?></p>
				  </div>
				  
				
                </div>
				  
               
				<div class="col-md-12">
				 
				  <div class="col-md-3 col-sm-6">
				  <label>Date Of Birth </label>
				   <p><?php echo $enquiry['dob'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>College </label>
				   <p><?php echo $enquiry['college'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Year Of Passing </label>
				  <p><?php echo $enquiry['year_of_passing'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Enquiry Date </label>
				  <p><?php echo $enquiry['created_date'];?></p>
				  </div>
				  
				</div>
                
				  
               
				
				<div class="col-md-12 col-sm-6">
				 <label>
				 HOW DID YOU COME TO KNOW ABOUT ARIFIN:</label>
				  <p><?php echo $enquiry['inflow_source'];?></p>
				  
				</div>
				
                </div>
				<p style="text-align:center"> <a href="<?php echo site_url('dashboard/convert_admission').'/'.$id;?>" class="btn btn-s-md btn-info">Convert To Admission</a></p>
                </div>
				</section>
               