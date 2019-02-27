@extends('website.layout.master')
@section('title','Liên hệ')
@section('content')
    <section class="main-content-section">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- CONTACT-US-FORM START -->
					<div class="contact-us-form">
						<div class="contact-form-center">
							<h3 class="contact-subheading">Gửi yêu cầu</h3>
							<!-- CONTACT-FORM START -->
							<form class="contact-form" id="contactForm" method="post" action="#">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
										<div class="form-group primary-form-group">
											<label>Subject Heading</label>
											<div class="con-form-select">
												<select id="conForm" name="conform">
													<option value="">Customar Service</option>
													<option value="">Webmaster</option>
												</select>												
											</div>
										</div>		
										<div class="form-group primary-form-group">
											<label>Email</label>
											<input type="text" class="form-control input-feild" id="contactEmail" name="contactemail" value="">
										</div>	
										<div class="form-group primary-form-group">
											<label>Order reference</label>
											<div class="con-form-select">
												<select id="orderRef" name="orderref">
													<option value="">Bootexpert</option>
													<option value="">Ohter</option>
												</select>												
											</div>
										</div>	
										<div class="form-group primary-form-group">
											<div class="file-uploader">
												<label>Tệp đính kèm</label>
												<input type="file" class="form-control" name="fileUpload">
												<span class="filename">No file selected</span>
												<span class="action">Choose File</span>
											</div>
										</div>	
										<span style="padding: 10px"  id="sendMessage" class="send-message main-btn">Gửi <i class="fa fa-chevron-right"></i></span>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
										<div class="type-of-text">
											<div class="form-group primary-form-group">
												<label>Nội dung</label>
												<textarea class="contact-text" name="ContactMessage"></textarea>
											</div>													
										</div>
									</div>
								</div>
							</form>
							<!-- CONTACT-FORM END -->
						</div>
					</div>
					<!-- CONTACT-US-FORM END -->
				</div>
			</div>
		</div>
	</section>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        addCart();
        deleteCart();
    });
</script>
@endsection