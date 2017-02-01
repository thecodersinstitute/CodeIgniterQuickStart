 <section class="tab-pane" id="validation">
              <div class="row">
                <div class="col-sm-12">
                  <form data-validate="parsley" action="" method="post">
                    <section class="panel">
                      <header class="panel-heading">
                        <span class="h4">New Batch</span>
                      </header>
                      <div class="panel-body">
                        <p class="text-muted">Please fill the information to continue</p>
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>Batch Name</label>
                            <input type="text" class="form-control" data-required="true" id="name" name="batch_name">   
                          </div>
                          <div class="col-sm-4">
                            <label>Batch Timing</label>
                            <input type="text" class="form-control"  data-required="true" name="batch_timing">      
                          </div> 
							  <div class="col-sm-4">
                            <label>Batch Duration</label>
                            <input type="text" class="form-control" data-required="true" id="contact_no" name="duration">   
                          </div> 
                        </div>
						  <div class="form-group pull-in clearfix">
                          <div class="col-sm-4">
                            <label>Batch Course.</label>
							<select class="form-control" data-required="true" id="alternative" name="course">
							<option value="">Select Course </option>
							<?php foreach($courses as $c){ ?>
							<option value="<?php echo $c['name']; ?>"><?php echo $c['name']; ?></option>
							<?php } ?>
							</select>
                             
                          </div>
                          <div class="col-sm-4">
                            <label></label>
                           
                          </div> 
							  <div class="col-sm-4">
                           
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
            