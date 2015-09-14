				<!-- start: LOGIN BOX -->
				<div class="box-login">
					<h3>Sign in to your account</h3>
					<p>
						Please enter your name and password to log in.
					</p>
					<form class="form-login" action="index.html">
						<div class="errorHandler alert alert-danger <? if(!$this->error) echo 'no-display'?> ">
							<i class="fa fa-remove-sign"></i> <? if($this->error) echo $this->translate($this->error) ?>
						</div>
						<fieldset>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $this->getParam('email')?>">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									<a class="forgot" href="#">
										I forgot my password
									</a> </span>
							</div>
							<div class="form-actions">
								<label for="remember" class="checkbox-inline">
									<input type="checkbox" class="grey remember" id="remember" name="remember">
									Keep me signed in
								</label>
								<button type="submit" class="btn btn-green pull-right">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Don't have an account yet?
								<a href="#" class="register">
									Create an account
								</a>
							</div>
						</fieldset>
					</form>
					<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_copyright.php") ; ?>
				</div>
				<!-- end: LOGIN BOX -->