  <section class="panel">
                <header class="panel-heading" style="padding: 18px 15px;">
                  Batch List
				   <a href="<?php echo site_url('dashboard/new_batch');?>" style="float:right"class="btn btn-s-md btn-primary">New Batch</a>
                </header>
                <div class="row text-sm wrapper">
				<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php }else if($this->session->flashdata('warning')){  ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php }else if($this->session->flashdata('info')){  ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>
                  <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control input-s-sm inline">
                      <option value="0">Bulk action</option>
                      <option value="1">Delete selected</option>
                      <option value="2">Bulk edit</option>
                      <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-white">Apply</button>                
                  </div>
                  <div class="col-sm-4 m-b-xs">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-sm btn-white active">
                        <input type="radio" name="options" id="option1"> Day
                      </label>
                      <label class="btn btn-sm btn-white">
                        <input type="radio" name="options" id="option2"> Week
                      </label>
                      <label class="btn btn-sm btn-white">
                        <input type="radio" name="options" id="option2"> Month
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-white" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped b-t text-sm">
                    <thead>
                      <tr>
                        <th width="20"><input type="checkbox"></th>
						  <th>Batch Name </th>
                        <th class="th-sortable" data-toggle="class">Batch Time </th>
                        <th>Course</th>
                        <th>Duration</th>
						<th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
					<?php foreach($batch as $key =>$c){ ?>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="2"></td>
                        
                        <td><?php echo $c['batch_name'];?></td>
                        <td><?php echo $c['batch_timing'];?></td>
                        <td><?php echo $c['course'];?></td>
						<td><?php if(isset($c['duration'])) { echo $c['duration']; }?></td>
						<td><a href="<?php echo site_url('dashboard/delete_batch').'/'.$key; ?>"><i class="fa fa-trash-o"></i></a></td>
						
                        
                      </tr>
					<?php } ?>
                    </tbody>
                  </table>
                </div>
               