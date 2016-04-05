<?php /* Smarty version 2.6.18, created on 2016-04-05 08:22:43
         compiled from showCompany.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="fmEdit" id="fmEdit" method="post" action="company.php?action=save" enctype="multipart/form-data">
    <table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
    	<tr>
			<td colspan="2" class="head">公司简介</td>
        </tr>
        <tr>
			<td width="15%" class="b">公司简介</td>
			<td class="b">
                <textarea name="content1" id="content1" style="width:100%;height:350px;resize: none;"><?php echo $this->_tpl_vars['company']['introduce']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">公司简介(无格式)</td>
			<td class="b">
                <textarea name="introduce_advpage" id="introduce_advpage" style="width:100%;height:150px;resize: none;"><?php echo $this->_tpl_vars['company']['introduce_advpage']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" class="b">
				<input type="submit" value="提交">
				<input type="reset" value="重置">
			</td>
		</tr>
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>