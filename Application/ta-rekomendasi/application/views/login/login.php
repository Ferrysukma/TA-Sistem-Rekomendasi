<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure><img src="<?= base_url(); ?>assets/images/signin-image.jpg" alt="sing up image"></figure>
						<a href="<?= base_url(); ?>login/registration" class="signup-image-link">Create an account</a>
					</div>

					<div class="signin-form">
						<h2 class="form-title">Sign in</h2>
						<?= $this->session->flashdata('message'); ?>
						<form method="POST" class="register-form" id="login-form" method="<?= base_url(); ?>login">
							<div class="form-group">
								<label for="email"><i class="zmdi zmdi-email"></i></label>
								<input type="text" name="email" id="email" placeholder="Your email" />
							</div>
							<div class="form-group">
								<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
								<input type="password" name="password" id="password" placeholder="Password" />
							</div>
							<div class="form-group form-button">
								<input type="submit" name="submit" id="signin" class="form-submit" value="Log in" />
							</div>
						</form>
					</div>
				</div>
			</div>