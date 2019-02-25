	<div id="popup">
		@if (session('notification')) {{session('notification')}}
		<script>
			document.getElementById('popup').style.display = "block";
		</script> @endif
	</div>
	<div id="login-page">
		<div class="background-lg"></div>
		<div class="container">
			<form class="form-login" action="" method="post">
				{{csrf_field()}}
				<h2 style="position: relative;" class="form-login-heading">Đăng nhập
					<a onclick="hidden_login()" id="close-login">
						<i class="fa fa-times"></i>
					</a>
				</h2>
				<br>
				<div style="padding: 0 30px;">
					<input type="text" class="form-control" name="email" placeholder="Email">
					<br>
					<input type="password" class="form-control" name="password" placeholder="Password">
					<label id="error_acc" class="col-lg-12 control-label regist-lable text-red" style="padding-top: 10px;">
					</label>
					<label class="checkbox">
						<input type="checkbox" name="remember" class="pull-left" style="margin: 2px 0 0;position:unset;">
						<span class="pull-left">Nhớ mật khẩu</span>
						<span class="pull-right">
							<a data-toggle="modal" href="login.html#myModal"> Quên mật khẩu</a>
						</span>
					</label>
					<button id="login" class="btn btn-theme btn-block" type="button">
						<i class="fa fa-lock"></i> ĐĂNG NHẬP</button>
					<hr>
					<div class="login-social-link centered">
						<p>hoặc</p>
						<a href="redirect/facebook" class="btn btn-facebook" type="submit">
							<i class="fa fa-facebook"></i> Facebook</a>
						<a href="redirect/google" class="btn btn-twitter" type="submit">
							<i class="fa fa-google"></i> Google</a>
					</div>
					<div class="registration" style="text-align: center;padding-bottom: 20px;">
						Bạn chưa có tài khoản
						<br/>
						<a class="" href="{{route('web.get.register')}}">
							Đăng ký
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>