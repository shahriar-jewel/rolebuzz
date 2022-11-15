<style type="text/css">
	.modal-fullscreen{
		width: 80%;
		/*height: 100%;*/
		margin: auto;
		top: 30px !important;
		left: 0;
	}
	.cursor-pointer{
		cursor: pointer;
	}
	.form-control{
		margin: 2px 0px !important;
	}
	.thumbnail {
    display: block;
    height: 110px;
    border: 1px solid #ddd;
    -webkit-transition: border 0.2s ease-in-out;
    -o-transition: border 0.2s ease-in-out;
    transition: border 0.2s ease-in-out;
}
.inline-flex{
	display: inline-flex;
	align-items: center;
	justify-content: center;
}
.pt-10{
	padding-top: 10px;
}
</style>

<form  method="post" id="customer_form" enctype="multipart/form-data" autocomplete="off">
	{{ csrf_field() }}
<div class="modal fade" id="customer">
	<div class="modal-dialog modal-lg modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-user"></i> Customer Enrollment</h4>
				</div>
				<div class="modal-body" style="padding: 1px">

					<section class="content">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6">
									<div class="box-body" style="padding: 4px;">
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Enter customer name">
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Phone</label>
											<div class="col-sm-9">
												<input type="number" class="form-control" name="phone" id="phone" placeholder="Enter mobile no">
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Email</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Profession</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="profession" id="profession" placeholder="Enter your profession">
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Date Of Birth</label>
											<div class="col-sm-9">
												<input type="date" class="form-control" name="date" id="date" placeholder="Enter dob">
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Address</label>
											<div class="col-sm-9">
												<textarea class="form-control" rows="3" name="address" id="address" placeholder="Enter address"></textarea>
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">NID</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nid" id="nid" placeholder="Enter national id">
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Nationality</label>
											<div class="inline-flex">
												<input class="nationality_check" checked="true" style="width: 20px;height: 20px;" name="nationality_check" value="N" type="radio">
												<label for="inputPassword3" class="col-sm-1 control-label pt-10">Native</label>
											</div>
											<div class="inline-flex">
												<input class="nationality_check" style="width: 20px;height: 20px;" name="nationality_check" value="F" type="radio">
												<label for="inputPassword3" class="col-sm-1 control-label pt-10">Foreigner</label>
											</div>
										</div>

										

									</div>
								</div>

								<div class="col-md-6">

									<div class="box-body" style="padding: 4px;">
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Customer Image</label>
											<div class="col-sm-9">
												<input type="file" onchange="readURL(this);" style="background-color: lavender;" class="form-control" name="image" id="image" placeholder="Enter customer image">
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Image Preview</label>
											<div class="col-sm-9">
												<div class="">
													<img id="uploaded_image" src="{{ asset('public/assets/images/avatar.png') }}" class="profile-user-img img-responsive img-circle img-lg" alt="Customer Image">
												</div>
											</div> 
										</div>

										<div class="form-group nationality">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Nationality</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter nationality">
											</div>
										</div>

										<div class="form-group reg_no">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Visa/Reg No.</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Enter visa/reg no.">
											</div>
										</div>

										<div class="form-group passport">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Passport No.</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="passport" id="passport" placeholder="Enter passport no">
											</div>
										</div>

										<div class="form-group purpose">
											<label for="inputPassword3" class="col-sm-3 control-label pt-10">Purpose</label>
											<div class="inline-flex">
												<input id="purpose" checked="true" style="width: 20px;height: 20px;" name="purpose" value="0" type="radio">
												<label for="inputPassword3" class="col-sm-1 control-label pt-10">Tourist</label>
											</div>
											<div class="inline-flex">
												<input id="purpose" style="width: 20px;height: 20px;" name="purpose" value="0" type="radio">
												<label for="inputPassword3" class="col-sm-1 control-label pt-10">Business</label>
											</div>
											<div class="inline-flex">
												<input id="purpose" style="width: 20px;height: 20px;" name="purpose" value="0" type="radio">
												<label for="inputPassword3" class="col-sm-1 control-label pt-10">Official</label>
											</div>
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
					<button type="submit" class="btn btn-primary">Save</button>
				</div>

			</div>
		</div>
	</div>
	</form>