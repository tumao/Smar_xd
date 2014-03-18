<?php echo $this->load->view('common_header'); ?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-8 column">
			<form role="form">
				<div class="form-group">
					 <label for="exampleInputEmail1">用户名：</label><input type="text" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">邮箱：</label><input type="email" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">密码：</label><input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">确认密码：</label><input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">QQ：</label><input type="text" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">电话：</label><input type="text" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="checkbox">
					 <label><input type="checkbox" /> 同意协议</label>
				</div> <button type="submit" class="btn btn-default">注册</button>
			</form>
			<div class="alert alert-dismissable alert-warning">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4>
					Alert!
				</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
			</div>
		</div>
		<div class="col-md-4 column">
			<blockquote>
				<p>
					已经注册，<a href="">登陆</a>
				</p> 
			</blockquote>
			<h2>
				协议
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
	</div>
</div>
<?php echo $this->load->view('common_footer'); ?>