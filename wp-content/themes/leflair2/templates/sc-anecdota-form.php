<form id="anecdota_form" class="custom_form" method="post" action="" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<div class="form_response">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<input name="pr_name" type="text" placeholder="Name" required />
			</div>
			<div class="col-md-6">
				<input name="pr_cancer_type" type="text" placeholder="Cancer Type" required />
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<textarea style="height: 100px;" name="pr_content" placeholder="Content" required></textarea>
			</div>
			
		</div>

		<div class="row">
		  <div class="col-md-6">
				 <div id="attach_file_content_anecdota" class="upload_box">
                       <div id="attachupload_anecdota" >
                            <p>
								<i class="fa fa-cloud-upload fa-3x"></i>
							</p>
							<p>Choose Image</p>
                    	</div>
                </div>
			</div>
			<div class="col-md-6">
				<input name="action" type="hidden" value="submition_ajax" />
				<input name="task" type="hidden" value="anecdota" />
				
				<input class="button_submit" type="submit" value="Enviar" />
			</div>
		</div>
</form>