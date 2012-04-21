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
  <?php if(strtolower(ACTION_NAME) == main): ?><table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
      <tr class="tb_head" ><td><h2>请选择中意的资源库：</h2></td></tr>
      <tr class="firstalt"><td><script language="JavaScript" charset="utf-8" type="text/javascript" src="http://union.ff84.com/up/ppvod_data_search.js"></script></td></tr>
    </table>
    <script language="JavaScript" charset="utf-8" type="text/javascript" src="http://union.ff84.com/up/ppvod_data_list.js"></script>  
  <?php else: ?>
  <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
    <tr class="tb_head" ><td><h2>请选择要导出的采集规则：</h2></td></tr>
    <tr class="firstalt"><td><form name='myform' method='post' action='index.php?s=Admin-Collect-Exportsql'>
      <table width="70%" border='0' align="center" cellpadding='0' cellspacing='0'>
          <tr>
          <td><select name='id[]' id="id" size='2' multiple style='height:300px;width:450px;'>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value='<?php echo ($ppvod["collect_id"]); ?>'><?php echo ($ppvod["collect_title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
           </td>
           <td align='left'><input type='button' name='Submit' value=' 选定所有 ' class="bginput" onclick='SelectAll()'><br><br><input type='button' name='Submit' value=' 取消选定 ' class="bginput" onclick='UnSelectAll()'><br><br><br><b>&nbsp;提示：按住“Ctrl”或“Shift”键可以多选</b></td>
          </tr>
          <tr height='50'>
            <td colspan='2' align='center'><?php if(strtolower(ACTION_NAME) == import): ?><input type='submit' class="bginput" name='Submit' value='导入采集规则' onClick="ChangeAction('index.php?s=Admin-Collect-Importsql')"><?php else: ?><input type='submit' class="bginput" name='Submit' value='执行导出操作'><?php endif; ?></td>
          </tr>
        </table>
  </form></td></tr></table> 
	<script language='javascript'>
    function SelectAll(){
      for(var i=0;i<document.myform.id.length;i++){
        document.myform.id.options[i].selected=true;}
    }
    function UnSelectAll(){
      for(var i=0;i<document.myform.id.length;i++){
        document.myform.id.options[i].selected=false;}
    }
    </script><?php endif; ?>
  </div>
</div>
<br /><center>Powered by： <a href="<?php echo C("admin_url");?>" target="_blank"><?php echo C("admin_name");?></a> v<?php echo C("admin_var");?></center>
</body>
</html>