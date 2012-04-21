<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title><?php echo C("admin_name");?> 管理面版 v<?php echo C("admin_var");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo C("admin_keywords");?>">
<meta name="description" content="<?php echo C("admin_description");?>">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin.css'>
<style type="text/css">.dingshi{display:none;}.dingshi input{ border:none}</style>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="__PUBLIC__/js/admin.js"></script>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
function collecttab(no,n){
	for(var i=1;i<=n;i++){
		$('#collect'+i).hide();
		$('#collect'+i+'str').hide();
	}
	if(no==1){
	    $('#collect1').show();
		$('#collect2str').show();
	}else if(no==2){
	    $('#collect2').show();
		$('#collect2str').show();
	    $('#collectpagename').html("批量生成列表页");
	}else if(no==3){
	    $('#collect2').show();
	    $('#collectpagename').html("批量生成内容页");
	}else if(no==4){
	    $('#collect1').show();
	    $('#collectpagename').html("手工生成内容页");
	}	
}
function CheckDingshi(str){
	if(str=='index.php?s=Admin-Collect-Dingshi'){
		$('#dingshi').show();
	}else{
		$('#dingshi').hide();
	}
} 
</script> 
</head>
<body>
<div class="right">
  <div class="right_top"><?php echo C("admin_welcome");?></div>
  <div class="right_main">
  <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
  <tr class="tb_head" ><td><h2>操作导航：</h2></td></tr>
  <tr class="firstalt"><td><ul class="do_nav"><li><a href="index.php?s=Admin-Collect-Show">采集节点列表</a></li><li><a href="index.php?s=Admin-Collect-Add">添加采集节点</a></li></ul></td></tr>
  </table>  
<?php if(strtolower(ACTION_NAME) == show ): ?><form action="index.php?s=Admin-Collect-Ing" method="post" name="myform">
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
      <tr class=tb_head >
        <td colspan="3"><h2>采集节点列表：</h2></td>
      </tr>
      <tr align="center" class="tb_title">
        <td width="50">ID</td>
        <td >采集节点名称</td>
        <td width="200">操作</td>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><tr class="firstalt">
        <td><input name='collect_id[]' type='checkbox' value='<?php echo ($ppvod["collect_id"]); ?>' style='border:none' checked><?php echo ($ppvod["collect_id"]); ?></td>
        <td><?php echo ($ppvod["collect_title"]); ?></td>
        <td align="center"><a href="index.php?s=Admin-Collect-Ing-collect_id-<?php echo ($ppvod["collect_id"]); ?>">采集</a>｜<a href="index.php?s=Admin-Collect-Add-collect_id-<?php echo ($ppvod["collect_id"]); ?>">修改</a>｜<a href="index.php?s=Admin-Collect-Cop-collect_id-<?php echo ($ppvod["collect_id"]); ?>" onClick="return confirm('确定复制?')">复制</a>｜<a href="index.php?s=Admin-Collect-Del-collect_id-<?php echo ($ppvod["collect_id"]); ?>" onClick="return confirm('确定删除?')">删除</a>｜<a href="index.php?s=Admin-Collect-Ing-collect_id-<?php echo ($ppvod["collect_id"]); ?>-tid-1">测试</a></td>        
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <tbody id="dingshi" class="dingshi">
      <tr class="firstalt">
      <td colspan="3">采集周期设置:&nbsp;<input type="checkbox" name="collect_week[]" value="1" checked>星期一&nbsp;<input type="checkbox" name="collect_week[]" value="2" checked>星期二&nbsp;<input type="checkbox" name="collect_week[]" value="3" checked>星期三&nbsp;<input type="checkbox" name="collect_week[]" value="4" checked>星期四&nbsp;<input type="checkbox" name="collect_week[]" value="5" checked>星期五&nbsp;<input type="checkbox" name="collect_week[]" value="6" checked>星期六&nbsp;<input type="checkbox" name="collect_week[]" value="0" checked>星期日<br>采集时间设置:&nbsp;<input type="checkbox" name="collect_hour[]" value="00" checked>00&nbsp;<input type="checkbox" name="collect_hour[]" value="01" checked>01&nbsp;<input type="checkbox" name="collect_hour[]" value="02" checked>02&nbsp;<input type="checkbox" name="collect_hour[]" value="03" checked>03&nbsp;<input type="checkbox" name="collect_hour[]" value="04" checked>04&nbsp;<input type="checkbox" name="collect_hour[]" value="05" checked>05&nbsp;<input type="checkbox" name="collect_hour[]" value="06" checked>06&nbsp;<input type="checkbox" name="collect_hour[]" value="07" checked>07&nbsp;<input type="checkbox" name="collect_hour[]" value="08" checked>08&nbsp;<input type="checkbox" name="collect_hour[]" value="09" checked>09&nbsp;<input type="checkbox" name="collect_hour[]" value="10" checked>10&nbsp;<input type="checkbox" name="collect_hour[]" value="11" checked>11&nbsp;<input type="checkbox" name="collect_hour[]" value="12" checked>12&nbsp;<input type="checkbox" name="collect_hour[]" value="13" checked>13&nbsp;<input type="checkbox" name="collect_hour[]" value="14" checked>14&nbsp;<input type="checkbox" name="collect_hour[]" value="15" checked>15&nbsp;<input type="checkbox" name="collect_hour[]" value="16" checked>16&nbsp;<input type="checkbox" name="collect_hour[]" value="17" checked>17&nbsp;<input type="checkbox" name="collect_hour[]" value="18" checked>18&nbsp;<input type="checkbox" name="collect_hour[]" value="19" checked>19&nbsp;<input type="checkbox" name="collect_hour[]" value="20" checked>20&nbsp;<input type="checkbox" name="collect_hour[]" value="21" checked>21&nbsp;<input type="checkbox" name="collect_hour[]" value="22" checked>22&nbsp;<input type="checkbox" name="collect_hour[]" value="23" checked>23</td>
      </tr>
      </tbody>
      <tr class="firstalt">
      <td colspan="3"><input type="button" class='mininput' value="全/反选" onClick="CheckAll(this.form)" /> <select name="list_type" id="list_type" onChange="ChangeAction(this.value);CheckDingshi(this.value)"><option value="index.php?s=Admin-Collect-Ing" >批量采集</option><option value="index.php?s=Admin-Collect-Dingshi">定时采集</option><option value="index.php?s=Admin-Collect-Delall">批量删除</option></select> <input class="mininput" type="submit" value="提交操作"></td>
     </tr>           
    </table>
    </form> 
<?php elseif(strtolower(ACTION_NAME) == add): ?>
  <?php if(($collect_id)  >  "0"): ?><form name="update" action="index.php?s=Admin-Collect-Update" method="post"><?php else: ?><form name="add" action="index.php?s=Admin-Collect-Insert" method="post"><?php endif; ?>
      <input type="hidden" name="collect_id" id="collect_id" value="<?php echo ($collect_id); ?>">
      <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
        <tr class="tb_head"><td colspan="2"><h2>添加采集：</h2></td></tr>
        <tr class="firstalt">
          <td width="15%" align="right">节点名称：</td>
          <td width="85%"><input type="text" name="collect_title" id="collect_title" value="<?php echo ($collect_title); ?>" size="30" maxlength="30" > 目标编码：<select name="collect_encoding">
              <option value="gb2312" <?php if(($collect_encoding)  ==  "gb2312"): ?>selected<?php endif; ?>>GB2312</option>
              <option value="utf-8" <?php if(($collect_encoding)  ==  "utf-8"): ?>selected<?php endif; ?>>UTF-8</option>
              <option value="big5" <?php if(($collect_encoding)  ==  "big5"): ?>selected<?php endif; ?>>BIG5</option></select></td>
        </tr>
        <tr class="firstalt">
          <td align="right">播放器选择：</td>
          <td><select name="collect_player">
              <?php if(is_array($playtree)): $i = 0; $__LIST__ = $playtree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value='<?php echo ($key); ?>' <?php if(($key)  ==  $collect_player): ?>selected<?php endif; ?>><?php echo ($i); ?>.<?php echo ($key); ?>.<?php echo ($ppvod); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select> 采集参数：<input name="collect_savepic" type="checkbox" value="1" class="noborder" <?php if(($collect_savepic)  ==  "1"): ?>checked<?php endif; ?>> 保存图片 <input name="collect_order" type="checkbox" value="1" class="noborder" <?php if(($collect_order)  ==  "1"): ?>checked<?php endif; ?>> 倒序采集
          </td>
        </tr>             
        <tr class="firstalt">
          <td align="right">分页设置：</td>
          <td><input name="collect_pagetype" type="radio" value="1" onClick="collecttab(1,4);" class="noborder" <?php if(($collect_pagetype)  ==  "1"): ?>checked<?php endif; ?>>手动列表页&nbsp;<input name="collect_pagetype" type="radio" value="2" onClick="collecttab(2,4);" class="noborder" <?php if(($collect_pagetype)  ==  "2"): ?>checked<?php endif; ?>>批量列表页&nbsp;<input name="collect_pagetype" type="radio" value="3" onClick="collecttab(3,4);" class="noborder" <?php if(($collect_pagetype)  ==  "3"): ?>checked<?php endif; ?>>批量内容页&nbsp;<input name="collect_pagetype" type="radio" value="4" onClick="collecttab(4,4);" class="noborder" <?php if(($collect_pagetype)  ==  "4"): ?>checked<?php endif; ?>>手动内容页</td>
        </tr>       
        <tr class="firstalt" id="collect1" <?php if(($collect_pagetype == 2) OR ($collect_pagetype == 3) ): ?>style="display:none"<?php endif; ?>>
          <td align="right">手动列表页(一行一个)：</td>
          <td><textarea name="collect_liststr" rows="5" style="width:380px;"><?php echo ($collect_liststr); ?></textarea></td>
        </tr>
        <tr class="firstalt" id="collect2" <?php if(($collect_pagetype == 1) OR ($collect_pagetype == 4) ): ?>style="display:none"<?php endif; ?>>
          <td align="right"><span id="collectpagename">批量分页</span>：</td>
          <td><input name="collect_pagestr" type="text" value="<?php echo ($collect_pagestr); ?>" size="50"><br>格式：http://www.xxx.cn/list.asp?page=[$ppvod] 分页代码<font color=red>[$ppvod]</font><br>采集范围：<input name="collect_pagesid" type="text" value="<?php echo ($collect_pagesid); ?>" size="4" style="text-align:center"> To <input name="collect_pageeid" type="text" value="<?php echo ($collect_pageeid); ?>" size="4" style="text-align:center"> 例如：1 - 9</td>
        </tr>
        <tbody id="collect2str" <?php if(($collect_pagetype)  >  "2"): ?>style="display:none"<?php endif; ?>>     
        <tr class="firstalt">
          <td align="right">链接地址范围正则<font color="#FF0000">[$ppvod]</font>：<br>如不缩小范围，请留空：</td>
          <td><textarea name="collect_listurlstr" rows="5" style="width:380px;"><?php echo ($collect_listurlstr); ?></textarea></td>
        </tr>
        <tr class="firstalt">
          <td align="right">内容页链接正则：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_listlink" rows="5" style="width:380px;"><?php echo ($collect_listlink); ?></textarea></td>
        </tr> 
        <tr class="firstalt">
          <td align="right">图片链接正则<font color="#FF0000">[$ppvod]</font>：<br>如图片在内容页，请留空：</td>
          <td><textarea name="collect_listpicstr" rows="5" style="width:380px;"><?php echo ($collect_listpicstr); ?></textarea></td>
        </tr>               
        </tbody> 
        <tr class="firstalt">
          <td align="right">全局替换过滤规则：</td>
          <td><textarea name="collect_replace[all]" rows="5" style="width:380px;"><?php echo ($collect_replace[0]); ?></textarea><br><font color="#FF0000">一行一个替换规则，用$$$隔开 如替换163.com为pp023.cn：163.com$$$pp023.cn<br>全局范围：内容页链接/地区/语言/年代(不包括地址范围)</font></td>
        </tr> 
        <tr class="tb_head"><td colspan="2"><h2>视频内容页设置：统一使用<font color="#FF0000">[$ppvod]</font>替代需获取的内容！一行一个替换规则，用$$$隔开 支持正则模式 如替换163.com为pp023.cn：163.com$$$pp023.cn
</h2></td></tr>
        <tr class="firstalt">
          <td align="right">视频分类选择（固定）：</td>
          <td><select name="collect_cid"><option value="0" >远程截取</option>
          <?php if(is_array($listtree)): $i = 0; $__LIST__ = $listtree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>" <?php if(($ppvod["list_id"])  ==  $collect_cid): ?>selected<?php endif; ?>><?php echo ($ppvod["list_name"]); ?></option>
              <?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>" <?php if(($ppvod["list_id"])  ==  $collect_cid): ?>selected<?php endif; ?>>├ <?php echo ($ppvod["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select></td>
        </tr>         
        <tr class="firstalt">
          <td align="right">视频分类正则：<br> 视频分类替换：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_listname" rows="5" style="width:420px;"><?php echo ($collect_listname); ?></textarea> <textarea name="collect_replace[listname]" rows="5" style="width:380px;"><?php echo ($collect_replace[1]); ?></textarea></td>
        </tr>       
        <tr class="firstalt">
          <td align="right">视频标题正则：<br> 视频标题替换：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_name" rows="5" style="width:420px;"><?php echo ($collect_name); ?></textarea> <textarea name="collect_replace[vodname]" rows="5" style="width:380px;"><?php echo ($collect_replace[2]); ?></textarea></td>
        </tr>
        <tr class="firstalt">
          <td align="right">视频主演正则：<br> 视频主演替换：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_actor" rows="5" style="width:420px;"><?php echo ($collect_actor); ?></textarea> <textarea name="collect_replace[actor]" rows="5" style="width:380px;"><?php echo ($collect_replace[3]); ?></textarea></td>
        </tr> 
        <tr class="firstalt">
          <td align="right">视频导演正则：<br> 视频导演替换：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_director" rows="5" style="width:420px;"><?php echo ($collect_director); ?></textarea> <textarea name="collect_replace[director]" rows="5" style="width:380px;"><?php echo ($collect_replace[4]); ?></textarea></td>
        </tr>  
        <tr class="firstalt">
          <td align="right">视频简介正则：<br> 视频简介替换：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_content" rows="5" style="width:420px;"><?php echo ($collect_content); ?></textarea> <textarea name="collect_replace[content]" rows="5" style="width:380px;"><?php echo ($collect_replace[5]); ?></textarea></td>
        </tr> 
        <tr class="firstalt">
          <td align="right">视频图片正则：<br> 如列表页已获取请留空<br> 视频图片替换：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_pic" rows="5" style="width:420px;"><?php echo ($collect_pic); ?></textarea> <textarea name="collect_replace[vodpic]" rows="5" style="width:380px;"><?php echo ($collect_replace[6]); ?></textarea></td>
        </tr>  
        <tr class="firstalt">
          <td align="right">视频连载正则：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_continu" rows="5" style="width:420px;"><?php echo ($collect_continu); ?></textarea> <textarea name="collect_replace[continu]" rows="5" style="width:380px;"><?php echo ($collect_replace[7]); ?></textarea></td>
        </tr>       
        <tr class="firstalt">
          <td align="right">视频地区正则：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_area" rows="5" style="width:420px;"><?php echo ($collect_area); ?></textarea></td>
        </tr> 
        <tr class="firstalt">
          <td align="right">视频语言正则：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_language" rows="5" style="width:420px;"><?php echo ($collect_language); ?></textarea></td>
        </tr>  
        <tr class="firstalt">
          <td align="right">视频年代正则：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_year" rows="5" style="width:420px;"><?php echo ($collect_year); ?></textarea></td>
        </tr> 
        <tr class="tb_head"><td colspan="2"><h2>播放地址设置：</h2></td></tr>
        <tr class="firstalt">
          <td align="right">视频地址范围正则：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_urlstr" rows="5" style="width:420px;"><?php echo ($collect_urlstr); ?></textarea></td>
        </tr>
        <tr class="firstalt">
          <td align="right">是否采集分集名称：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_urlname" rows="5" style="width:420px;"><?php echo ($collect_urlname); ?></textarea></td>
        </tr>       
        <tr class="firstalt">
          <td align="right">视频地址连接正则：<br> <font color="#FF0000">[$ppvod]</font>：</td>
          <td><textarea name="collect_urllink" rows="5" style="width:420px;"><?php echo ($collect_urllink); ?></textarea></td>
        </tr>  
        <tr class="firstalt">
          <td align="right">视频播放地址正则<font color="#FF0000">[$ppvod]</font>：<br> 内容页已有播放地址请留空：</td>
          <td><textarea name="collect_url" rows="5" style="width:420px;"><?php echo ($collect_url); ?></textarea></td>
        </tr> 
        <tr class="firstalt">
          <td align="right">视频分集与播放地址替换：</td>
          <td><textarea name="collect_replace[url]" rows="5" style="width:420px;"><?php echo ($collect_replace[8]); ?></textarea><br><font color="#FF0000">一行一个替换规则，用$$$隔开 如:163.com$$$adnim5.cn</td>
        </tr>                                                         
        <tr class="firstalt">
          <td colspan="2" align="center"><p><input class="bginput" type="submit" name="submit" value=" 下一步 " > <input class="bginput" type="reset" name="Input" value=" 重置 " ></p></td>
        </tr>
      </table>
    </form>
<?php elseif(strtolower(ACTION_NAME) == dingshi): ?>
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
    <tr class="tb_head" ><td><h2>定时采集任务执行中,请不要关闭浏览器,1小时后执行下一次采集任务！</h2></td></tr>
    <tr ><td colspan="3" id='loading'></td></tr>
    </table>
    <?php if(!empty($gid)): ?><script>var cisu=1;
	function loading(){
		if( cisu=1||cisu%3==0 ){
			$('#loading').html('<iframe marginwidth=0 marginheight=0 frameborder=0 width=100% height=500 src=<?php echo ($gid); ?>></iframe>');
		}else{
			$('#loading').html('<iframe marginwidth=0 marginheight=0 frameborder=0 width=100% height=500 src="index.php?s=Admin-Index-Main"></iframe>');
		}
		cisu=cisu+1;
	}
	loading();
	setInterval("loading()", 1000*1200);
    </script><?php endif; ?><?php endif; ?>
    </div>
</div>
<br /><center>Powered by： <a href="<?php echo C("admin_url");?>" target="_blank"><?php echo C("admin_name");?></a> v<?php echo C("admin_var");?></center>
</body>
</html>