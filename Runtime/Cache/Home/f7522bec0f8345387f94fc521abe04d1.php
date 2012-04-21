<?php if (!defined('THINK_PATH')) exit();?><div class="pluscm">
    <div class="list">
        <div class="title"><span><a href="#input">我要发表评论</a></span>共<?php echo ($cm_count); ?>位网友参与评论</div>
        <ul><?php if(is_array($cm_list)): $i = 0; $__LIST__ = $cm_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span class="floor">第<?php echo ($ppvod["cm_floor"]); ?>楼 <a href="javascript:" onclick="plus_cm_ud(<?php echo ($ppvod["cm_id"]); ?>,'<?php echo ($root); ?>','cm_up');">支持[<span id="cm_up<?php echo ($ppvod["cm_id"]); ?>"><?php echo ($ppvod["cm_up"]); ?></span>]</a> <a href="javascript:" onclick="plus_cm_ud(<?php echo ($ppvod["cm_id"]); ?>,'<?php echo ($root); ?>','cm_down');">反对[<span id="cm_down<?php echo ($ppvod["cm_id"]); ?>"><?php echo ($ppvod["cm_down"]); ?></span>]</a></span><span class="user u<?php echo ($key); ?>"><?php echo (msubstr($ppvod["cm_user"],0,20)); ?></span> 发表于<?php echo (date('Y-m-d',$ppvod["cm_addtime"])); ?></li>
        <p><?php echo (msubstr(h($ppvod["cm_content"]),0,400)); ?></p><?php endforeach; endif; else: echo "" ;endif; ?></ul>
        <div class="page"><?php if(!empty($cm_list)): ?><?php echo ($cm_page); ?><?php else: ?>还没有网友评论，快抢沙发哦！<?php endif; ?></div>
    </div>
    <div class="form"><a name='input'></a>
    	<form action="index.php?s=Cm-Add" method="post" name="plus_cm_vod" id="plus_cm_vod" onsubmit="return plus_cm_post('vod','<?php echo ($root); ?>',<?php echo $_GET["id"];?>);">
        <ul><textarea name="cm_content" onFocus="if(this.value=='请在此输入评论内容!'){this.value='';}">请在此输入评论内容!</textarea></ul>
        <ul>访问呢称：<input name="cm_user" type="text" class="btn-1" maxlength="10" value="访客" onFocus="if(this.value=='访客'){this.value='';}"/>&nbsp;验证码：<input name="cm_code" type="text" class="btn-1" size="4" maxlength="4"/> <img src="<?php echo ($root); ?>index.php?s=Cm-Cmcode-time-" style="cursor:pointer" alt='点击我更换图片' align="absbottom" onclick="this.src=this.src+'?'">&nbsp;<input name="cm_del" type="hidden" value="1" /><input type="submit" name="submit" value="发表评论" class="btn-2"/> <input name="放弃评论" type="reset" class="btn-2"/></ul>
        </form>
    </div>
</div>