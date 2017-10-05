<div class="section" id="contact" data-anchor="section1">
	<div class="visible-xs-block" style="height:75px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>Contact</h2>
			</div>
		</div>
		<div class="row" style="height: 60px">
			<?php if (isset($status)): ?>
			<div class="alert <?php echo $status['success'] ? 'alert-success' : 'alert-danger' ?>">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $status['message']; ?>
			</div>
			<?php endif ?>
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<form action="" method="POST" class="form-horizontal" role="form">
					<input type="hidden" name="action" id="action" value="sendmail">
					<div class="form-group form-group-lg">
						<label for="nom" class="col-sm-2 control-label">Pseudo</label>
						<div class="col-sm-10">
							<input type="text" name="nom" id="nom" class="form-control" placeholder="Pseudo">
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label for="email" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
							<input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label for="msg" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea name="msg" id="textarea" class="form-control" rows="5" ></textarea>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="visible-xs-block" style="height:75px;"></div>
</div>