var Admin = (function($){
	this.save = function(){
		var oldpass = $('#oldpass').val();
		var newpass = $('#newpass').val();
		var sur_pass = $('#sur_pass').val();
		var id = $('#id').val();
		if( newpass == ''){
			alert('密码不可为空');
			return false;
		}
		if( newpass != sur_pass){
			alert('新密码与确认密码不一致');
			return false;
		}

		$.ajax({
			'url' 	:"/redbud_admin/changepass",
			'type'	:'POST',	
			'data'	: {'newpass':newpass,'oldpass':oldpass,'uid':id},
			'success':function(txt){
				if( txt ==1){
					window.location.href='/redbud_admin/editaccount';
				}else{
					alert('旧密码输入不正确');
					return false;
				}
			}
		});
	};
	return this;
})(jQuery);