<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="col bg-main p-0 d-flex">
	<div class="col-md-6 my-auto p-3">
		<div class="col-md-9 mx-auto my-3 container-login">

			<div class="row">
				<?php echo form_open( base_url('Login/Process'), $login['open'], array( 'confirm' => 'cancel', 'validate' => base_url('Login/Validasi') ) ) ?>

				<div class="col text-center">
					<h1>Login</h1>
				</div>

				<div class="w-100 mb-4"><hr></div>

				<div class="col">
					<?php echo form_label('email','email') ?>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="email-addon">
								<i class="fas fa-user mx-auto"></i>
							</span>
						</div>
						<?php echo form_input( $login['email'] ) ?>
					</div>
					<div class="text-success" id="error-email"></div>
				</div>

				<div class="w-100 mb-3"></div>

				<div class="col">
					<?php echo form_label('password','password') ?>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="password-addon">
								<i class="fas fa-key mx-auto"></i>
							</span>
						</div>
						<?php echo form_input($login['password']) ?>
					</div>
					<div class="text-success" id="error-password"></div>
				</div>

				<div class="w-100 mb-3"></div>

				<div class="col">
					<label class="container-checkbox"> Tampilkan Password
						<?php echo form_checkbox( $login['showpassword'] ) ?>
						<span class="checkmark"></span>
					</label>
				</div>

				<div class="w-100 mb-4"></div>

				<div class="col">
					<button type="submit" class="btn btn-success" name="submit">Login</button>
				</div>
			</form>

			<div class="w-100"></div>

			<div class="col">
				<a href="<?php echo base_url('Lupa-Password') ?>" class="nav-link p-0">Lupa Password ?</a>
			</div>

			<div class="w-100 mb-4"></div>

			<div class="col text-center">
				<p class="m-0">Belum punya akun?</p>
				<a href="<?php echo base_url('Daftar') ?>" class="nav-link p-0">Daftar Sekarang</a>
			</div>

		</div>

	</div>

</section>
