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
<script language="javascript">
// 设置审核状态
function setisok(id){
 	var isok = 0;
	if($('#isok_'+id).attr('title')=='已审核'){
		isok = 1;
	}
	var html = $.ajax({
		url: "index.php?s=Admin-Vod-Ajaxdel-id-"+id+"-isok-"+isok,
		//data: "id="+id+"&isok="+isok,
		//cache: false,
		async: false
	}).responseText;
	if(html){
		if(isok==1){
			$('#isok_'+id).attr({src:'__PUBLIC__/images/no.gif', title:'未审核'});
		} else{
			$('#isok_'+id).attr({src:'__PUBLIC__/images/yes.gif', title:'已审核'});
		}
	}
}
//设置权重
function sethot(id, hot){
	var html = $.ajax({
		url: 'index.php?s=Admin-Vod-Ajaxhot-id-'+id+'-hot-'+hot,
		//data: "id="+id+"&hot="+hot,
		//cache: false,
		async: false
	}).responseText;
	if(html){
		for(i=0; i<6; i++){
			$('#hot_'+id+'_'+i).removeClass('hot_on');
		}
		$('#hot_'+id+'_'+hot).addClass('hot_on');
	}
}
// 图片预览
function showpic(event,imgsrc){	
	var left = event.clientX+document.body.scrollLeft+20;
	var top = event.clientY+document.body.scrollTop+20;
	$("#preview").css({left:left,top:top,display:""});
	$("#pic_a1").attr("src",imgsrc);
}
// 取消预览
function hiddenpic(){
	$("#preview").css({display:"none"});
}
// 显示标签框
function showtags(){
	var offset = $("#vod_tag").offset();
	var left = offset.left;
	var top = offset.top+21;
	var html = $.ajax({
		url: "index.php?s=Admin-Tag-Show-id-ajax",
		async: false
	}).responseText;
	$("#showtags").html(html);
	$("#showtags").css({left:left,top:top,display:""});
}
// 添加标签
function addtag(tag){
	var val = $('#vod_tag').val();
	if(val!=''){
		val = val+','+tag;
	}else{
		val = tag;
	}
	$('#vod_tag').val(val);
	tb_close();
}
// 关闭标签框
function tb_close(){
	$("#showtags").css('display','none');
}
//弹出生成网页框
function showhtml(vodid){
	loading();
	var o=$('#show_upload');
	var f=$('#show_upload_iframe');
	var top = 250;	
	$.ajax({
		url: 'index.php?s=Admin-Html-readvodid-id-'+vodid+'',
		//cache: false,
		success: function(res){
			loaded();
			o.html(res);
			o.css("left",(($(document).width())/2-(parseInt(o.width())/2))+"px");
			if($(document).scrollTop()>250){
				top = ($(document).height()+$(document).scrollTop())/2-(parseInt(o.height())/2);
			}
     		o.css("top",top+"px");
			f.css({'width':o.width(),'height':o.height(),'left':o.css('left'),'top':o.css('top')});
	 		f.show();
			o.show();
			setTimeout("hideupload()",1000);
		}
	});
}
</script>
<div class="right">
  <div class="right_top"><?php echo C("admin_welcome");?></div>
  <div class="right_main">
  <!--图片预览框-->
  <div id="preview" style="position:absolute;display:none;width:75;height:75;" class="showpic"><img name="pic_a1" id="pic_a1" width="75" height="75"></div>
  <!--消息框遮罩层-->
  <iframe id="show_upload_iframe" frameborder=0 scrolling="no" style="display:none; position:absolute;"></iframe><div id="show_upload">nothing...</div>
  <!--页面加载中-->
  <div id="body_loading" onClick="loaded();"><img src="__PUBLIC__/images/body_load.gif"></div>
  <!--标签选择框-->
  <div id="showtags" style="position:absolute;display:none;" class="showtags">标签加载中...<br><a href="javascript:tb_close()">关闭</a></div> 
  <!--缩略图上传-->
  <iframe name="iframeUpload" src="" width="350" height="35" frameborder=0  scrolling="no" style="display:none"></iframe>
<?php if(strtolower(ACTION_NAME) == show ): ?><form action="index.php?s=Admin-Vod-Show" method="post">{__NOTOKEN__}
      <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
        <tr class="tb_head">
          <td colspan="5"><h2>数据列表：如果希望某部自己添加或修改过的影片强制为手动更新,请将录入作者改为<a href="index.php?s=Admin-Vod-Show-vod_inputer-ppvod">ppvod</a>即可!</h2></td>
        </tr>
        <tr class="firstalt">
          <td colspan="5" style="line-height:30px;"> 筛选内容：
            <select name="vod_cid" id="vod_cid" ><option value='<?php if(($vod_cid)  ==  "0"): ?>0<?php endif; ?>'>全部分类</option>
              <?php if(is_array($listvod)): $i = 0; $__LIST__ = $listvod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>" <?php if(($pp["list_id"])  ==  $vod_cid): ?>selected<?php endif; ?>><?php echo ($pp["list_name"]); ?></option>
                <?php if(is_array($pp['son'])): $i = 0; $__LIST__ = $pp['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>" <?php if(($pp["list_id"])  ==  $vod_cid): ?>selected<?php endif; ?>>├ <?php echo ($pp["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            &nbsp;&nbsp;
            <select name="vod_play"><option value="0">服务器组</option><?php if(is_array($playtree)): $i = 0; $__LIST__ = $playtree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value='<?php echo ($key); ?>' <?php if(($key)  ==  $vod_play): ?>selected<?php endif; ?>><?php echo ($ppvod); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>
            &nbsp;&nbsp;
            <select name="vod_stars" id="vod_stars" class="select">
              <option value="0" <?php if(($vod_stars)  ==  "0"): ?>selected<?php endif; ?>>所有星级</option>
              <option value="1" <?php if(($vod_stars)  ==  "1"): ?>selected<?php endif; ?>>一星内容</option>
              <option value="2" <?php if(($vod_stars)  ==  "2"): ?>selected<?php endif; ?>>二星内容</option>
              <option value="3" <?php if(($vod_stars)  ==  "3"): ?>selected<?php endif; ?>>三星内容</option>
              <option value="4" <?php if(($vod_stars)  ==  "4"): ?>selected<?php endif; ?>>四星内容</option>
              <option value="5" <?php if(($vod_stars)  ==  "5"): ?>selected<?php endif; ?>>五星内容</option>
            </select>
            &nbsp;&nbsp;
            <select name="vod_del" id="vod_del" class="select">
              <option value="0">全部状态</option>
              <option value="2" <?php if(($vod_del)  ==  "2"): ?>selected<?php endif; ?>>已审核</option>
              <option value="1" <?php if(($vod_del)  ==  "1"): ?>selected<?php endif; ?>>未审核</option>
            </select>
            &nbsp;&nbsp;
            <select name="vod_continu" id="vod_continu" class="select">
              <option value="0">连载状态</option>
              <option value="2" <?php if(($vod_continu)  ==  "2"): ?>selected<?php endif; ?>>已完结</option>
              <option value="1" <?php if(($vod_continu)  ==  "1"): ?>selected<?php endif; ?>>连载中</option>
            </select>            
            &nbsp;&nbsp;
            <select name="vod_type" id="vod_type" class="select">
              <option value="0">排序方式</option>
              <option value="vod_hits" <?php if(($vod_type)  ==  "vod_hits"): ?>selected<?php endif; ?>>人气</option>
              <option value="vod_addtime" <?php if(($vod_type)  ==  "vod_addtime"): ?>selected<?php endif; ?>>时间</option>
              <option value="vod_id" <?php if(($vod_type)  ==  "vod_id"): ?>selected<?php endif; ?>>ID</option>
              <option value="vod_gold" <?php if(($vod_type)  ==  "vod_gold"): ?>selected<?php endif; ?>>评分</option>
              <option value="vod_up" <?php if(($vod_type)  ==  "vod_up"): ?>selected<?php endif; ?>>顶</option>
              <option value="vod_down" <?php if(($vod_type)  ==  "vod_down"): ?>selected<?php endif; ?>>踩</option>
            </select>            
            &nbsp;&nbsp;
            <select name="vod_order" id="vod_order" class="select">
              <option value="desc">降序</option>
              <option value="asc" <?php if(($vod_order)  ==  "asc"): ?>selected<?php endif; ?>>升序</option>
            </select>
            &nbsp;&nbsp;关键字：
            <input name="vod_name" type="text" id="vod_name" value="<?php echo (urldecode($vod_name)); ?>" size="10" maxlength="20">
            <input name="vod_submit" type="submit" value=" 显示 " class="mininput"></td>
        </tr>
      </table>
    </form>
    <form action="index.php?s=Admin-Vod-Show" method="post" name="myform">
      <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
        <tr align="center" class="tb_title" >
          <td width="2%" nowrap >ID</td>
          <td width="5%" nowrap>连载</td>
          <td >影片分类 标题 服务器组</td>
          <td width="5%" nowrap >点击</td>
          <td width="5%" nowrap >顶/踩</td>
          <td width="4%" nowrap >评分</td>
          <td width="13%" nowrap >时间</td>
          <td width="12%" nowrap >权重</td>
          <td width="3%" nowrap >状态</td>
          <td width="5%" nowrap >编辑</td>
        </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcms): ++$i;$mod = ($i % 2 )?><?php if($ppcms["vod_del"]==0){
            $isok_img = 'yes.gif';
            $isok_title= '已审核';
        }else{
            $isok_img = 'no.gif';
            $isok_title= '未审核';
        }
        $hot = array();
        $hot[$ppcms["vod_stars"]] = 'class="hot_on"'; ?>
          <tr class="firstalt">
            <td ><input name='vod_id[<?php echo ($ppcms["vod_id"]); ?>]' type='checkbox' value='<?php echo ($ppcms["vod_id"]); ?>' style='border:none' checked></td>
           <td align="center"><input name="vod_continu[<?php echo ($ppcms["vod_id"]); ?>]" type="text" value="<?php echo ($ppcms["vod_continu"]); ?>" style="border:#CCC 1px solid;width:98%;text-align:center;color:green"></td>
            <td><span style="float:right;color:#666"><?php echo (str_replace('$$$',' ',$ppcms["vod_play"])); ?></span><?php if(c('url_html') > 0): ?><a href="javascript:showhtml(<?php echo ($ppcms["vod_id"]); ?>);"><font color="green">生成</font></a><?php endif; ?><span class="conlist_cate"><a href="<?php echo ($ppcms["vod_showid"]); ?>">『<?php echo getlistname($ppcms["vod_cid"]);?>』</a></span><a href="<?php echo ($ppcms["vod_readid"]); ?>" onMouseOver="showpic(event, '<?php echo (getpicurl($ppcms["vod_pic"])); ?>');" target="_blank" onMouseOut="hiddenpic();"><?php echo ($ppcms["vod_name"]); ?> <?php echo ($ppcms["vod_title"]); ?></a> (<?php echo ($ppcms["vod_id"]); ?>) <?php if(($ppcms['vod_continu'])  !=  "0"): ?><img src="__PUBLIC__/images/continu.gif" title="连载中"><?php endif; ?></td>
            <td align="center"><?php echo ($ppcms["vod_hits"]); ?></td>
            <td align="center" style="color:#666"><?php echo ($ppcms["vod_up"]); ?>/<?php echo ($ppcms["vod_down"]); ?></td>
            <td align="center"><?php echo ($ppcms["vod_gold"]); ?></td>
            <td align="center"><?php echo (date('Y-m-d H:i:s',$ppcms["vod_addtime"])); ?></td>
            <td align="center"><div class="hot_set"> <a id="hot_<?php echo ($ppcms["vod_id"]); ?>_1" href="javascript:sethot('<?php echo ($ppcms["vod_id"]); ?>',1)"<?php echo ($hot[1]); ?>>1</a> <a id="hot_<?php echo ($ppcms["vod_id"]); ?>_2" href="javascript:sethot('<?php echo ($ppcms["vod_id"]); ?>',2)"<?php echo ($hot[2]); ?>>2</a> <a id="hot_<?php echo ($ppcms["vod_id"]); ?>_3" href="javascript:sethot('<?php echo ($ppcms["vod_id"]); ?>',3)"<?php echo ($hot[3]); ?>>3</a> <a id="hot_<?php echo ($ppcms["vod_id"]); ?>_4" href="javascript:sethot('<?php echo ($ppcms["vod_id"]); ?>',4)"<?php echo ($hot[4]); ?>>4</a> <a id="hot_<?php echo ($ppcms["vod_id"]); ?>_5" href="javascript:sethot('<?php echo ($ppcms["vod_id"]); ?>',5)"<?php echo ($hot[5]); ?>>5</a></div></td>
            <td align="center" nowrap><a href="javascript:setisok('<?php echo ($ppcms["vod_id"]); ?>')"><img id="isok_<?php echo ($ppcms["vod_id"]); ?>" src="__PUBLIC__/images/<?php echo ($isok_img); ?>" title="<?php echo ($isok_title); ?>"></a></td>
            <td width="5%" colspan="2" align="center" nowrap ><a href="index.php?s=Admin-Vod-Add-vod_id-<?php echo ($ppcms["vod_id"]); ?>"><img src="__PUBLIC__/images/edit.gif" alt="编辑" width="14" height="14" border="0" align="absmiddle" title="编辑"></a><a href="index.php?s=Admin-Vod-Del-vod_id-<?php echo ($ppcms["vod_id"]); ?>" onClick="return confirm('确定删除?')"><img src="__PUBLIC__/images/del.gif" alt="删除" width="14" height="14" border="0" align="absmiddle" title="删除"></a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        <tr class="firstalt">
          <td colspan="10" style=" padding:10px;"><div style="background:#CFF; padding:5px;"><input type="button" class="mininput" value="全/反选" onClick="CheckAll(this.form)" /> <?php if(c('url_html') == 1): ?><input type="submit" class="mininput" value="生成静态" onClick="ChangeAction('index.php?s=Admin-Vod-ishtml')"/><?php endif; ?> <input type="submit" class="mininput" value="已审核" onClick="ChangeAction('index.php?s=Admin-Vod-isok')"/> <input type="submit" class="mininput" value="未审核" onClick="ChangeAction('index.php?s=Admin-Vod-notok')"/> <input type="submit" class="mininput" value="设置连载" onClick="ChangeAction('index.php?s=Admin-Vod-continu')"/> <input type="submit" class="mininput" value="删除影片" onClick="ChangeAction('index.php?s=Admin-Vod-delall');return confirm('确定删除?')"/>&nbsp;转移到<select name="vod_cid"><?php if(is_array($listvod)): $i = 0; $__LIST__ = $listvod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>"><?php echo ($pp["list_name"]); ?></option><?php if(is_array($pp['son'])): $i = 0; $__LIST__ = $pp['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>">├ <?php echo ($pp["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><option value="0">临时库</option></select><input type="submit" class="mininput" value="批量移动" onClick="ChangeAction('index.php?s=Admin-Vod-listgo');return confirm('确定转移分类吗?')"/>&nbsp;设置为<select name="vod_stars" class="select"><option value="1">一星内容</option><option value="2">二星内容</option><option value="3">三星内容</option><option value="4">四星内容</option><option value="5">五星内容</option></select><input type="submit" class="mininput" value="设置星级" onClick="ChangeAction('index.php?s=Admin-Vod-stars')"/>&nbsp;更换为<input name="vod_otherkey" type="text" style="width:100px"> <select name="vod_other" class="select"><option value="0" selected>选择条件</option><option value="continu">连载集数</option><option value="hits">点击次数</option><option value="area">影片地区</option><option value="year">影片年代</option><option value="inputer">录入作者</option><option value="addtime">更新时间</option><option value="tag">标签TAG</option><option value="gold">更改评分</option><option value="up">顶一下</option><option value="down">踩一下</option></select><input type="submit" class="mininput" value="批量变更" onClick="ChangeAction('index.php?s=Admin-Vod-other')"/></div></td>
        </tr>
        <tr class=firstalt>
          <td colspan="10"><div class="pages"><?php echo ($page); ?></div></td>
        </tr>
      </table>
    </form>
<?php elseif(strtolower(ACTION_NAME) == add): ?>
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/js/editor/kindeditor.js"></script>
    <script type="text/javascript"> KE.show({
	id : 'content',
	resizeMode : 1,
	allowPreviewEmoticons : false,
	allowUpload : false,
	items : [
	'source', '|', 'fontsize', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
	'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
	'insertunorderedlist', '|', 'image', 'link', 'unlink']
	});	</script>
      <?php if(($vod_id)  >  "0"): ?><form name="update" action="index.php?s=Admin-Vod-Update" method="post">
      <input type="hidden" name="vod_id" value="<?php echo ($vod_id); ?>">
      <?php else: ?>
      <form name="add" action="index.php?s=Admin-Vod-Insert" method="post"><?php endif; ?>        
      <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
        <tr class="tb_head"><td colspan="2"><h2>添加影片：</h2></td></tr>
        <tr class="firstalt">
          <td width="120" align="right">参数：</td>
          <td ><select name="vod_cid">
          <?php if(is_array($listvod)): $i = 0; $__LIST__ = $listvod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>" <?php if(($pp["list_id"])  ==  $vod_cid): ?>selected<?php endif; ?>><?php echo ($pp["list_name"]); ?></option>
              <?php if(is_array($pp['son'])): $i = 0; $__LIST__ = $pp['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>" <?php if(($pp["list_id"])  ==  $vod_cid): ?>selected<?php endif; ?>>├ <?php echo ($pp["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>&nbsp;&nbsp;
          <select name="vod_stars">
          <option value="1" <?php if(($vod_stars)  ==  "1"): ?>selected<?php endif; ?>>一星</option>
          <option value="2" <?php if(($vod_stars)  ==  "2"): ?>selected<?php endif; ?>>二星</option>
          <option value="3" <?php if(($vod_stars)  ==  "3"): ?>selected<?php endif; ?>>三星</option>
          <option value="4" <?php if(($vod_stars)  ==  "4"): ?>selected<?php endif; ?>>四星</option>
          <option value="5" <?php if(($vod_stars)  ==  "5"): ?>selected<?php endif; ?>>五星</option>
          </select>&nbsp;&nbsp;
          <select name="vod_del">
          <option value="0" <?php if(($vod_del)  ==  "0"): ?>selected<?php endif; ?>>显示</option>
          <option value="1" <?php if(($vod_del)  ==  "1"): ?>selected<?php endif; ?>>隐藏</option>
          </select>&nbsp;&nbsp;
          <select name="vod_color">
          <option value=''>颜色</option>                                            
          <option value='#000000' style='background-color:#000000' <?php if(($news_color)  ==  "#000000"): ?>selected<?php endif; ?>></option>
          <option value='#FFFFFF' style='background-color:#FFFFFF' <?php if(($news_color)  ==  "#FFFFFF"): ?>selected<?php endif; ?>></option>
          <option value='#008000' style='background-color:#008000' <?php if(($news_color)  ==  "#008000"): ?>selected<?php endif; ?>></option>
          <option value='#FFFF00' style='background-color:#FFFF00' <?php if(($news_color)  ==  "#FFFF00"): ?>selected<?php endif; ?>></option>
          <option value='#FF0000' style='background-color:#FF0000' <?php if(($news_color)  ==  "#FF0000"): ?>selected<?php endif; ?>></option>
          <option value='#0000FF' style='background-color:#0000FF' <?php if(($news_color)  ==  "#0000FF"): ?>selected<?php endif; ?>></option>
          <option value=''>无色</option>           
          </select>&nbsp;&nbsp;
          <select name="vod_year">
          <option value=''>年代</option>
          <?php if(is_array($vod_year_list)): $i = 0; $__LIST__ = $vod_year_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($val); ?>" <?php if(($val)  ==  $vod_year): ?>selected<?php endif; ?>><?php echo ($val); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select>&nbsp;&nbsp;
          <select name="vod_area" style="width:60px;">
          <option value=''>地区</option>
          <?php if(is_array($vod_area_list)): $i = 0; $__LIST__ = $vod_area_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($val); ?>" <?php if(($val)  ==  $vod_area): ?>selected<?php endif; ?>><?php echo ($val); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select>&nbsp;&nbsp;
          <select name="vod_language">
          <option value=''>语言</option>
          <?php if(is_array($vod_language_list)): $i = 0; $__LIST__ = $vod_language_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($val); ?>" <?php if(($val)  ==  $vod_language): ?>selected<?php endif; ?>><?php echo ($val); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select>&nbsp;&nbsp;<label>栏目|权重|审核|颜色|年代|地区|语言</label>
          </td>
        </tr>
        <tr class="firstalt">
          <td align="right">标题：</td>
         <td><input name="vod_name" type="text" size="60" maxlength="255" value="<?php echo ($vod_name); ?>">&nbsp;&nbsp;副&nbsp;&nbsp;&nbsp;&nbsp;标：<input name="vod_title" type="text" size="10" value="<?php echo ($vod_title); ?>">&nbsp;&nbsp;标&nbsp;&nbsp;&nbsp;&nbsp;签：<input name="vod_tag" id="vod_tag" type="text" size="27" value="<?php echo ($vod_tag); ?>"> <a href="javascript:showtags()"><img src="__PUBLIC__/images/tag.gif" alt="选择标签" width="26" height="26" border="0" align="absmiddle"></a></td>
        </tr>
         <tr class="firstalt">
          <td align="right">演员：</td>
          <td><input name="vod_actor" type="text" size="60" maxlength="255" value="<?php echo ($vod_actor); ?>">&nbsp;&nbsp;导&nbsp;&nbsp;&nbsp;&nbsp;演：<input name="vod_director" type="text" size="10" value="<?php echo ($vod_director); ?>">&nbsp;&nbsp;连载中：<input name="vod_continu" type="text" size="10" value="<?php echo ($vod_continu); ?>" style="text-align:center">&nbsp;&nbsp;人气：<input name="vod_hits" type="text" size="9" value="<?php echo ($vod_hits); ?>" style="text-align:center"></td>
        </tr>       
        <tr class="firstalt">
          <td align="right">来源：</td>
          <?php if(($vod_id)  >  "0"): ?><td><input name="vod_reurl" type="text" size="60" value="<?php echo ($vod_reurl); ?>">&nbsp;&nbsp;首字母：<input name="vod_letter" type="text" size="5" value="<?php echo ($vod_letter); ?>" style="text-align:center">&nbsp;&nbsp;时&nbsp;&nbsp;&nbsp;&nbsp;间：<input name="vod_addtime" type="text" size="24" value="<?php echo (date('Y-m-d H:i:s',$vod_addtime)); ?>"> 更新<input name="vod_time" type="checkbox" style="border:none" value="1" <?php if(c('admin_time_edit') == 1): ?>checked<?php endif; ?>></td>
          <?php else: ?>
          <td><input name="vod_reurl" type="text" size="60" value="<?php echo ($vod_reurl); ?>">&nbsp;&nbsp;首字母：<input name="vod_letter" type="text" size="10" value="<?php echo ($vod_letter); ?>" style="text-align:center">&nbsp;&nbsp;时&nbsp;&nbsp;&nbsp;&nbsp;间：<input name="vod_addtime" type="text" size="33" value="<?php echo (date('Y-m-d H:i:s',$vod_addtime)); ?>"></td><?php endif; ?>
        </tr>
        <tr class="firstalt">
          <td align="right">关键字：</td>
          <td><input name="vod_keywords" type="text" size="11" value="<?php echo ($vod_keywords); ?>">&nbsp;&nbsp;模板：<input name="vod_skin" size="10" type="text" value="<?php echo ($vod_skin); ?>" style="text-align:center">&nbsp;&nbsp;录入：<input name="vod_inputer" type="text" size="10" value="<?php echo ($vod_inputer); ?>" style="text-align:center">&nbsp;&nbsp;评&nbsp;&nbsp;&nbsp;&nbsp;分：<input name="vod_gold" type="text" size="5" value="<?php echo ($vod_gold); ?>" style="text-align:center">&nbsp;&nbsp;人气：<input name="vod_golder" type="text" size="5" value="<?php echo ($vod_golder); ?>" style="text-align:center">&nbsp;&nbsp;顶：<input name="vod_up" size="5" type="text" value="<?php echo ($vod_up); ?>" style="text-align:center">&nbsp;&nbsp;踩：<input name="vod_down" size="5" type="text" value="<?php echo ($vod_down); ?>" style="text-align:center"></td>
        </tr> 
        <tr class="firstalt">
          <td align="right">缩略图：</td>
          <td><span style="float:left; margin-top:5px"><input name="vod_pic" type="text" size="60" maxlength="255" value="<?php echo ($vod_pic); ?>" onMouseOver="if(this.value)showpic(event, '<?php echo C("upload_path");?>/'+this.value);" onMouseOut="hiddenpic();" style="height:22px"></span><span style="float:left;margin-top:5px"><iframe src="?s=Admin-Upload-Show-sid-video-fileback-vod_pic" scrolling="no" topmargin="0" width="300" height="28" marginwidth="0" marginheight="0" frameborder="0" align="left"></iframe></span></td>
        </tr>              
        <tbody id="urlmoban" style="display:none;">
        <tr class="firstalt">
          <td align="right">数据地址：</td>
          <td><select name="vod_server[]" style="color:#666666;"><option value="">共享前缀</option><?php if(is_array($vod_server_list)): $i = 0; $__LIST__ = $vod_server_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$server): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($key); ?>"><?php echo ($i); ?>.<?php echo ($key); ?>.<?php echo ($server); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select> <select name="vod_play[]" style="color:#003300;"><?php if(is_array($vod_play_list)): $i = 0; $__LIST__ = $vod_play_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$play): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($key); ?>"><?php echo ($i); ?>.<?php echo ($key); ?>.<?php echo ($play); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><br><textarea name='vod_url[]' style="width:715px;" rows="8"><?php echo ($url); ?></textarea></td>
        </tr>
        </tbody>
		<script language="javascript">
		var $urln=<?php echo count($vod_url);?>;
        function addurl(){
            var $old=$("#urlmoban").html();
			$urln=$urln+1;
			$old=$old.replace("数据地址","数据地址"+$urln);
            $("#urllist tr:last-child").after($old); 
        }
        </script>
        <tbody id="urllist">
        <?php if(is_array($vod_url)): $u = 0; $__LIST__ = $vod_url;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$url): ++$u;$mod = ($u % 2 )?><?php $sid=$vod_server[($u-1)];$pid=$vod_play[($u-1)]; ?>    
        <tr class="firstalt">
          <td align="right">数据地址<?php echo ($u); ?>：</td>
          <td><select name="vod_server[]" style="color:#666666;"><option value="">共享前缀</option><?php if(is_array($vod_server_list)): $i = 0; $__LIST__ = $vod_server_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$server): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($key); ?>" <?php if($key == $sid): ?>selected<?php endif; ?>><?php echo ($i); ?>.<?php echo ($key); ?>.<?php echo ($server); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select> <select name="vod_play[]" style="color:#003300;"><?php if(is_array($vod_play_list)): $i = 0; $__LIST__ = $vod_play_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$play): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($key); ?>" <?php if(($key)  ==  $pid): ?>selected<?php endif; ?>><?php echo ($i); ?>.<?php echo ($key); ?>.<?php echo ($play); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><br/><textarea name='vod_url[]' style="width:715px;" rows="8"><?php echo ($url); ?></textarea></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        <tr class="firstalt">
          <td align="right">新加地址：</td>
          <td><a onClick="addurl();" class="serverlist"><img src="__PUBLIC__/images/add.gif" alt="添加新播放器" border="0"> 点击新加一组播放器</a></td>
        </tr> 
        <tr class="firstalt">
          <td align="right">视频简介：</td>
          <td><textarea id="content" name="vod_content" style="width:715px;height:300px;"><?php echo ($vod_content); ?></textarea></td>
        </tr>
        <tr class="firstalt">
          <td colspan="2" align="center"><p><input class="bginput" type="submit" name="submit" value=" 提交 " > <input class="bginput" type="reset" name="Input" value=" 重置 " ></p></td>
        </tr>
      </table>
    </form><?php endif; ?>
    </div>
</div>
<br /><center>Powered by： <a href="<?php echo C("admin_url");?>" target="_blank"><?php echo C("admin_name");?></a> v<?php echo C("admin_var");?></center>
</body>
</html>