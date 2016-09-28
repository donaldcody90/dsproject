<form id="protolos_form" class="custom_form" method="post" action="" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<div class="form_response">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<input name="pr_name" type="text" placeholder="Name" required />
			</div>
			<div class="col-md-3">
				<input name="pr_edad" type="text" placeholder="Edad" required />
			</div>
			<div class="col-md-6">
				<input name="pr_cancer_type" type="text" placeholder="Razon" required />
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<textarea name="pr_diet" placeholder="Diet" required></textarea>
			</div>
			<div class="col-md-6">
				<textarea name="pr_exercise" placeholder="Exercise" required></textarea>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<textarea name="pr_spiritual" placeholder="Spiritual" required></textarea>
			</div>
			<div class="col-md-6">
				<textarea name="pr_frankincense" placeholder="Como uso el incienso" required></textarea>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-6">
				 <div id="attach_file_content" class="upload_box">
                       <div id="attachupload" >
                            <p>
								<i class="fa fa-cloud-upload fa-3x"></i>
							</p>
							<p>Choose Image</p>
                    	</div>
                </div>
			</div>
			<div class="col-md-6">
				<input name="action" type="hidden" value="submition_ajax" />
				<input name="task" type="hidden" value="protolo" />
				
				<input class="button_submit" type="submit" value="Enviar" />
			</div>
		</div>
</form>