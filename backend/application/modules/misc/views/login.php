<?php echo $this->load->view('common_header'); ?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-8 column">
			<div class="media">
				 <a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/" class="media-object" alt='' /></a>
				<div class="media-body">
					<h4 class="media-heading">
						Nested media heading
					</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
					<div class="media">
						 <a href="#" class="pull-left"><img src="http://lorempixel.com/64/64/" class="media-object" alt='' /></a>
						<div class="media-body">
							<h4 class="media-heading">
								Nested media heading
							</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
						</div>
					</div>
				</div>
			</div>
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
<!-- 			<form class="form-horizontal" role="form"> -->
			<?php echo form_open('login',array('class'=>"form-horizontal", 'role'=>"form"));?>
				<div class="form-group">
<!-- 					 <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label> -->
					 <?php echo form_label('邮箱','email',array('class'=>"col-sm-2 control-labe"))?>
					<div class="col-sm-10">
<!-- 						<input type="email" class="form-control" id="inputEmail3" /> -->
						<?php echo form_input(array(
								'name'	=>	'email',
								'class'	=>	'form-control',
								'id'	=>	'email',
								'value' => set_value('email')
						));
						?>
						<?php echo form_error('email');?>
					</div>
				</div>
				<div class="form-group">
<!-- 					 <label for="inputPassword3" class="col-sm-2 control-label">密码</label> -->
					 <?php echo form_label('密码','password',array('class'=>'col-sm-2 control-label')); ?>
					<div class="col-sm-10">
<!-- 						<input type="password" class="form-control" id="inputPassword3" /> -->
						<?php echo form_input(array(
								'name'	=>	'password',
								'type'	=>	'password',
								'class'	=>	'form-control',
								'id'	=>	'password',
								'value' => set_value('password')
						));?>
						<?php echo form_error('password'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">登录</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php echo $this->load->view('common_footer'); ?>