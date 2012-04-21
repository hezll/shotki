<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title><?php echo C("admin_name");?> 管理面版 v<?php echo C("admin_var");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo C("admin_keywords");?>">
<meta name="description" content="<?php echo C("admin_description");?>">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin.css'>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="__PUBLIC__/js/admin.js"></script>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
</head>
<body>
<div class="right">
  <div class="right_top"><?php echo C("admin_welcome");?></div>
  <div class="right_main">
<?php if(strtolower(ACTION_NAME) == show ): ?><form action="index.php?s=Admin-List-Editall" method="post" name="myform">
    <table width="98%" border="0" cellpadding="5" cellspacing="1" class="tableoutline">
      <tr class="tb_head">
        <td colspan="7"><h2>分类列表：排序ID如果设为0 将在导航栏中隐藏该分类</h2></td>
      </tr>
      <tr align="center" class="tb_title">
        <td width="50">选中</td>
        <td width="100">系统模块</td>
        <td width="180">分类名称</td>
        <td width="100">排序ID</td>
        <td width="150">分类模板</td>
        <td >栏目别名或外部链接</td>
        <td width="100">编辑</td>
      </tr>
      <?php if(is_array($listtree)): $i = 0; $__LIST__ = $listtree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><tr class="firstalt">
        <td align="center"><input name='list_id[<?php echo ($pp["list_id"]); ?>]' type='checkbox' value='<?php echo ($pp["list_id"]); ?>' style='border:none' checked><font color="blue">(<?php echo ($pp["list_id"]); ?>)</font></td>
        <td align="center"><select name="list_sid[<?php echo ($pp["list_id"]); ?>]"><option value="1" <?php if(($pp["list_sid"])  ==  "1"): ?>selected<?php endif; ?>>视频模块</option><option value="2" <?php if(($pp["list_sid"])  ==  "2"): ?>selected<?php endif; ?>>新闻模块</option><option value="9" <?php if(($pp["list_sid"])  ==  "9"): ?>selected<?php endif; ?>>外部链接</option></select></td>
        <td align="center"><input type='text' name='list_name[<?php echo ($pp["list_id"]); ?>]' value='<?php echo ($pp["list_name"]); ?>' class="tbpinput" size=25></td>
        <td align="center"><input type='text' name='list_oid[<?php echo ($pp["list_id"]); ?>]' value='<?php echo ($pp["list_oid"]); ?>' class="tbpinput" size=10></td>
        <td align="center"><input type='text' name='list_skin[<?php echo ($pp["list_id"]); ?>]' value='<?php echo ($pp["list_skin"]); ?>' class="tbpinput" size=20></td>
        <td ><input type='text' name='list_dir[<?php echo ($pp["list_id"]); ?>]' value='<?php echo ($pp["list_dir"]); ?>' class="tbpinput" style="width:98%;text-align:left"></td>
        <td align="center"><a href="index.php?s=Admin-List-Add-list_id-<?php echo ($pp["list_id"]); ?>"><img src="__PUBLIC__/images/edit.gif" alt="编辑" width="14" height="14" border="0" title="编辑"></a> <a href="index.php?s=Admin-List-Del-list_id-<?php echo ($pp["list_id"]); ?>" onClick="return confirm('确定删除?')"><img src="__PUBLIC__/images/del.gif" alt="删除" width="14" height="14" border="0" title="删除"></a> <a href="index.php?s=Admin-List-Add-list_pid-<?php echo ($pp["list_id"]); ?>" ><img src="__PUBLIC__/images/add.gif" alt="添加二级分类" width="14" height="14" border="0" title="添加二级分类"></a></td>
      </tr>
      <?php if(is_array($pp['son'])): $i = 0; $__LIST__ = $pp['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><tr class="firstalt">
        <td align="center"><input name='list_id[<?php echo ($pp["list_id"]); ?>]' type='checkbox' value='<?php echo ($pp["list_id"]); ?>' style='border:none' checked>(<?php echo ($pp["list_id"]); ?>)</td>
        <td align="center"><select name="list_sid[<?php echo ($pp["list_id"]); ?>]" class="tbsselect"><option value="1" <?php if(($pp["list_sid"])  ==  "1"): ?>selected<?php endif; ?>>视频模块</option><option value="2" <?php if(($pp["list_sid"])  ==  "2"): ?>selected<?php endif; ?>>新闻模块</option></select></td>
        <td align="center"><input type='text' name='list_name[<?php echo ($pp["list_id"]); ?>]' value='<?php echo ($pp["list_name"]); ?>' class="tbsinput" size=25></td>
        <td align="center"><input type='text' name='list_oid[<?php echo ($pp["list_id"]); ?>]' value='<?php echo ($pp["list_oid"]); ?>' class="tbsinput" size=10></td>
        <td align="center"><input type='text' name='list_skin[<?php echo ($pp["list_id"]); ?>]' value='<?php echo ($pp["list_skin"]); ?>' class="tbsinput" size=20></td>
        <td ><input type='text' name='list_dir[<?php echo ($pp["list_id"]); ?>]' value='<?php echo ($pp["list_dir"]); ?>' class="tbsinput" style="width:98%; text-align:left"></td>
        <td align="center"><a href="index.php?s=Admin-List-Add-list_id-<?php echo ($pp["list_id"]); ?>"><img src="__PUBLIC__/images/edit.gif" alt="编辑" width="14" height="14" border="0" title="编辑"></a> <a href="index.php?s=Admin-List-Del-list_id-<?php echo ($pp["list_id"]); ?>" onClick="return confirm('确定删除?')"><img src="__PUBLIC__/images/del.gif" alt="删除" width="14" height="14" border="0" title="删除"></a></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
      <tr>
        <td colspan="7"><input type="button" value="全/反选" onClick="CheckAll(this.form)" /> <select name="list_type" id="list_type" onChange="ChangeAction(this.value)"><option value="index.php?s=Admin-List-Editall" >批量修改</option><option value="index.php?s=Admin-List-Delall">批量删除</option></select> <input class="mininput" type="submit" value="提交操作"> 注：删除分类将删除该分类下面的所有影片</td>
      </tr>
    </table>
    </form>     
<?php elseif(strtolower(ACTION_NAME) == add): ?>
	<script language="javascript">
		function ChangeModel(str){
			if(str==1){
				$('#list_skin').val('pp_vodlist');
				$('#listseo').css({display:"block"});
			}else if(str==2){
				$('#list_skin').val('pp_newslist');
				$('#listseo').css({display:"block"});	
			}else{
				$('#listseo').css({display:"none"});
			}	
		}		
    </script>
    <?php if(($list_id)  >  "0"): ?><form name="form1" action="index.php?s=Admin-List-Update" method="post"><?php else: ?><form name="form1" action="index.php?s=Admin-List-Insert" method="post"><?php endif; ?>
      <table width="98%" border="0" cellpadding="5" cellspacing="1" class="tableoutline">
        <tr class="tb_head"><td colspan="2"><h2>添加/修改分类：</h2></td></tr>
        <tr class="firstalt"><td width="12%" style="text-align:right">选择系统模型与分类：</td><td ><select name="list_sid" onChange="ChangeModel(this.value)" style="width:132px">
          <option value="1" <?php if(($list_sid)  ==  "1"): ?>selected<?php endif; ?>>视频模块 | vod</option>
          <option value="2" <?php if(($list_sid)  ==  "2"): ?>selected<?php endif; ?>>新闻模块 | news</option>
          <option value="9" <?php if(($list_sid)  ==  "9"): ?>selected<?php endif; ?>>外部链接 | url</option>
          </select> <select name="list_pid" style="width:132px">
          <option value="0">作为一级分类</option>
          <?php if(is_array($listvod)): $i = 0; $__LIST__ = $listvod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($admin["list_id"]); ?>" <?php if(($admin["list_id"])  ==  $list_pid): ?>selected<?php endif; ?>><?php echo ($admin["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          <?php if(is_array($listnews)): $i = 0; $__LIST__ = $listnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($admin["list_id"]); ?>" <?php if(($admin["list_id"])  ==  $list_pid): ?>selected<?php endif; ?>><?php echo ($admin["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td></tr>
        <tr class="firstalt"><td style="text-align:right">分类名称与排序：</td><td ><input type="text" name="list_name" id="list_name" value="<?php echo ($list_name); ?>" size="35" maxlength="35"> <input type="text" name="list_oid"  id="list_oid" value="<?php echo ($list_oid); ?>" size="5" maxlength="5" style="text-align:center"></td></tr>
        <tr class="firstalt">
          <td style="text-align:right">分类别名或外部链接：</td>
          <td><input type="text" name="list_dir" id="list_dir" value="<?php echo ($list_dir); ?>" maxlength="100" style="width:400px"></td>
        </tr>
        <tbody id="listseo">
            <tr class="firstalt"><td style="text-align:right">选择分类模板：</td>
            <td><input type="text" name="list_skin" id="list_skin" value="<?php echo ($list_skin); ?>" maxlength="100" style="width:400px"></td>
            </tr>       
            <tr class="firstalt"><td style="text-align:right">栏目SEO标题：</td>
            <td ><input type="text" name="list_title" id="list_title" value="<?php echo ($list_title); ?>" maxlength="100" style="width:400px"></td>
            </tr> 
            <tr class="firstalt"><td style="text-align:right">栏目SEO关键词：</td>
            <td><input type="text" name="list_keywords" id="list_keywords" value="<?php echo ($list_keywords); ?>" maxlength="100" style="width:400px"></td>
            </tr> 
            <tr class="firstalt"><td style="text-align:right">栏目SEO简介：</td>
            <td><textarea name="list_description" id="list_description"  style="width:400px; height:40px"><?php echo ($list_description); ?></textarea></td>
            </tr>
        </tbody>
        <tr class="firstalt">
          <td colspan="2" align="center"><input type="hidden" name="list_id" id="list_id" value="<?php echo ($list_id); ?>">
            <input class="bginput" type="submit" name="submit" value=" 提交 " >
            <input class="bginput" type="reset" name="Input" value=" 重置 " >
          </td>
        </tr>
      </table>
    </form><?php endif; ?>
  </div>
</div>
<br /><center>Powered by： <a href="<?php echo C("admin_url");?>" target="_blank"><?php echo C("admin_name");?></a> v<?php echo C("admin_var");?></center>
</body>
</html>