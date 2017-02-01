<section class="panel">
                <header class="panel-heading" style="padding:35px">
                  <h4> Student Admission Detail </h4>
				  <a href="<?php echo site_url('dashboard/admission');?>" style="float:right"class="btn btn-s-md btn-primary">Back</a>
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
					<div class="col-sm-12 col-md-12 ">
               
				
				  <div class="col-md-3 col-sm-6">
				  <label>Student Father Name </label>
				  <p><?php echo $enquiry['father_name'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Student Mother Name </label>
				 <p><?php echo $enquiry['mother_name'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label> Total Fees </label>
				 <p><?php echo $enquiry['dues'];?></p>
				  </div>
				 <div class="col-md-3 col-sm-6">
				  <label>Fees Paid</label>
				 <p><?php  if(isset($enquiry['fees_paid'])) { echo $enquiry['fees_paid']; }?></p>
				  </div>
				  
				
                </div>
					<div class="col-sm-12 col-md-12 ">
               
				
				  <div class="col-md-3 col-sm-6">
				  <label>Pending Fees</label>
				  <p><?php echo $enquiry['pending_due'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Pending Fees Date </label>
				 <p><?php echo $enquiry['pending_due_date'];?></p>
				  </div>
				  <div class="col-md-6 col-sm-6">
				  <label> Address</label>
				 <p><?php echo $enquiry['Address'];?></p>
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
				  <p><?php echo $enquiry['course'];?></p>
				  </div>
				  <div class="col-md-3 col-sm-6">
				  <label>Batch</label>
				  <p><?php echo $enquiry['batch_id'];?></p>
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
				  <label>Admission Date </label>
				  <p><?php echo $enquiry['created_date'];?></p>
				  </div>
				  
				</div>
                
				  
               
				
				<div class="col-md-12 col-sm-6">
				 <label>
				 Friends intrested for the same course</label>
				  <p><?php echo $enquiry['friend_intrested'];?></p>
				  
				</div>
				
                </div>
				
                </div>
				</section>
               