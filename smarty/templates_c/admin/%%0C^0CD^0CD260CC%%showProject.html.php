<?php /* Smarty version 2.6.18, created on 2016-01-01 14:39:26
         compiled from showProject.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
  <tr>
    <td class="head" colspan="2"><b>操作菜单</b></td>
  </tr>
  <tr>
    <td class="b_title">
    	<a href="project.php?action=new" target="_self">添加项目信息</a>&nbsp;
    	<a href="project.php" target="_self">项目信息管理</a>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" action="project.php?action=delete" method="post">
    <table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
        	<td colspan="5" class="head">项目信息管理</td>
        </tr>
        <tr>
			<td width="5%" class="head_2">教师编号</td>
			<td width="15%" class="head_2">项目名</td> 
			<td width="50%" class="head_2">项目内容</td>         	
	  	  	<td width="10%" class="head_2">管理</td>
			<td width="20%" class="head_2">删除</td>
		</tr>
		<?php $_from = $this->_tpl_vars['cooperation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cooperation'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cooperation']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cooperation']):
        $this->_foreach['cooperation']['iteration']++;
?>
		<tr>
			<td width="5%" class="b"><?php echo $this->_tpl_vars['cooperation']['pid']; ?>
</td>
			<td width="15%" class="b"><?php echo $this->_tpl_vars['cooperation']['pname']; ?>
</td>    
			<td width="50%" class="b"><?php echo $this->_tpl_vars['cooperation']['introduce']; ?>
</td>			
   			<td width="10%" class="b">
            	<a href='project.php?action=new&pid=<?php echo $this->_tpl_vars['cooperation']['pid']; ?>
'>修改</a>
		  	</td>
			<td width="20%" class="b">
				<input type="checkbox" name="chk1[]" id="chk1" value="<?php echo $this->_tpl_vars['cooperation']['pid']; ?>
" />
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="4" class="b">
				<input type="submit" name="Submit" value="删除" />
			</td>
			<td width="20%" class="b">
				全选/全不选<input type="checkbox" name="chk2" id="chk2" />
			</td>
		</tr>
		<tr>
			<td colspan="5" class="b"><?php echo $this->_tpl_vars['paggingbar']; ?>
</td>
		</tr>  
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>