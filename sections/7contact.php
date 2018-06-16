<div class="section" id="contact" data-anchor="section7">
	<div class="visible-xs-block" style="height:75px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>Contact</h2>
			</div>
		</div>
		<div class="row" style="height: 60px">
			<div class="col-sm-8 col-sm-offset-2">
				<?php if (isset($status)): ?>
				<div class="alert <?php echo $status['success'] ? 'alert-success' : 'alert-danger' ?>">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $status['message']; ?>
				</div>
				<?php endif ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-2">
				<form action="" method="POST" class="form-horizontal" role="form" id="mailform">
					<input type="hidden" name="action" id="action" value="sendmail">
					<div class="form-group form-group-lg">
						<label for="nom" class="col-sm-2 control-label">Pseudo</label>
						<div class="col-sm-10">
							<input type="text" name="nom" id="nom" class="form-control" placeholder="Pseudo">
  							<span class="help-block hide"></span>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label for="email" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
							<input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
  							<span class="help-block hide"></span>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label for="msg" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea name="msg" id="msg" class="form-control" rows="5" ></textarea>
  							<span class="help-block hide"></span>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-lg btn-info">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-2 withline">
				<a href="https://github.com/adesombergh/" rel="noopener">
					<svg class="soc-svg" aria-labelledby="simpleicons-github-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-github-icon">GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
				</a>
				<a href="https://www.linkedin.com/in/aldebaran-desombergh/" rel="noopener">
					<svg class="soc-svg" aria-labelledby="simpleicons-linkedin-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-linkedin-icon">LinkedIn icon</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
				</a>
				<a href="https://www.facebook.com/Aldebaran.Desombergh" rel="noopener">
					<svg class="soc-svg" aria-labelledby="simpleicons-facebook-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-facebook-icon">Facebook icon</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="visible-xs-block" style="height:75px;"></div>
</div>