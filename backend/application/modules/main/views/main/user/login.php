<?php echo $this->load->view('header'); ?>
<div style="background:#fafafa;padding:10px;width:300px;height:300px;">
    <form id="ff" method="post" novalidate>
        <div>
            <label for="name">邮箱:</label>
            <input class="easyui-validatebox" type="text" name="email" value="<?php echo set_value('email'); ?>"></input>
        </div>
        <div>
            <label for="email">密码:</label>
            <input class="easyui-validatebox" type="password" name="password" value="<?php echo set_value('password'); ?>" ></input>
        </div>
        <div>
            <input type="submit" value="提交">
        </div>
    </form>
</div>
<?php echo $this->load->view('footer'); ?>