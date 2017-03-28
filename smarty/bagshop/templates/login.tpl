{extends file="base_temp.tpl"}

{block name=title}BagShop | Login{/block}

{block name=body}

<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form action="login.php" method="POST">
						<input type="text" placeholder="Name" name="username" value="">
						<input type="password" placeholder="Password" name="passwd" value="">
						
						<button type="submit" name="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			<!--div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form>
					<h2>New User Signup!</h2>
					<form action="#">
						<input type="text" placeholder="Name"/>
						<input type="email" placeholder="Email Address"/>
						<input type="password" placeholder="Password"/>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form>
			</div-->
		</div>
	</div>
</section><!--/form-->

{/block}