<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="col bg-darklight p-0 d-flex">
	<div class="col-md-6 my-auto p-3 mx-auto">
		<div class="col-md-9 mx-auto my-3 container-daftar">

			<div class="row">
				<?php echo form_open( base_url('Daftar/process'), $regis['open']) ?>
				<?php echo form_hidden('validate', base_url('Daftar/Validasi')) ?>
				<?php echo form_hidden('confirm', 'cancel') ?>

				<div class="col text-center">
					<h1>registrasi</h1>
				</div>

				<div class="w-100 mb-4"><hr></div>
				<div class="w-100 mb-4 validate-here"></div>

				<div class="col">
					<?php echo form_label('email', 'email') ?>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="email-addon">
								<i class="fas fa-envelope mx-auto"></i>
							</span>
						</div>
						<?php echo form_input( $regis['email'] ) ?>
					</div>
					<div class="text-success" id="error-email"></div>
				</div>

				<div class="w-100 mb-3"></div>

				<div class="col">
					<?php echo form_label('password', 'password') ?>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="password-addon">
								<i class="fas fa-key mx-auto"></i>
							</span>
						</div>
						<?php echo form_password( $regis['password'] ) ?>
					</div>
					<div class="text-success" id="error-password"></div>
				</div>

				<div class="w-100 mb-3"></div>

				<div class="col">
					<?php echo form_label( 'Password Ulang' , 'repassword' ) ?>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="reapassword-addon">
								<i class="fas fa-key mx-auto"></i>
							</span>
						</div>
						<?php echo form_password( $regis['repassword'] ) ?>
					</div>
					<div class="text-success" id="error-repassword"></div>
				</div>

				<div class="w-100 mb-3"></div>

				<div class="col">
					<label class="container-checkbox"> Tampilkan Password
						<?php echo form_checkbox( $regis['showpassword'] ) ?>
						<span class="checkmark"></span>
					</label>
				</div>

				<div class="w-100"></div>

				<div class="col mt-5">
					<button type="submit" class="btn btn-success" name="submit">
						<strong>Daftar</strong>
					</button>
				</div>

				<?php echo form_close() ?>

				<div class="w-100 mb-4"></div>

				<div class="col text-center">
					<p class="m-0">Sudah punya akun?</p>
					<a href="<?php echo base_url('Login') ?>" class="nav-link p-0">Masuk Sekarang</a>
				</div>

			</div>

		</div>
	</div>
</section>
