<?php if (!defined('THINK_PATH')) exit();?><link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin.css'>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<table width="760" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
<tr class="tb_head" ><td colspan="2"><h2><span onClick="$('#collect'+<?php echo ($listi); ?>).show();" style="float:right;color:#0000FF;cursor:pointer">详细资料</span>总页数：<font color="green"><?php echo ($eid); ?></font>&nbsp;当前任务：<font color="green"><?php echo ($sid+1); ?></font>-<font color="blue"><?php echo ($count); ?></font>-<font color="red"><?php echo ($listi); ?></font>&nbsp;采集状态：<font color="green"><?php echo ($vod_state); ?></font>&nbsp;目标地址：<a href="<?php echo ($vod_reurl); ?>" target="_blank"><?php echo ($vod_reurl); ?></a></h2></td></tr>
<tr class="firstalt">
  <td width="20%" align="right">影片名称图片：</td>
  <td width="80%"><?php echo getlistname($vod_cid);?> <?php echo ($vod_name); ?> <?php echo ($vod_pic); ?></td>
</tr>
<tr class="firstalt">
  <td align="right">影片地址：</td>
  <td><textarea rows="5" style="width:100%"><?php echo ($vod_url); ?></textarea></td>
</tr>
<tbody id="collect<?php echo ($listi); ?>" style="display:none"> 
<tr class="firstalt">
  <td align="right">列表地址：</td>
  <td><?php echo ($listurl); ?></td>
</tr>
<tr class="firstalt">
  <td align="right">影片主演：</td>
  <td><?php echo ($vod_actor); ?></td>
</tr>
<tr class="firstalt">
  <td align="right">影片导演：</td>
  <td><?php echo ($vod_director); ?></td>
</tr>
<tr class="firstalt">
  <td align="right">影片地区：</td>
  <td><?php echo ($vod_area); ?></td>
</tr>
<tr class="firstalt">
  <td align="right">影片语言：</td>
  <td><?php echo ($vod_language); ?></td>
</tr>
<tr class="firstalt">
  <td align="right">连载状态：</td>
  <td><?php echo ($vod_continu); ?></td>
</tr>
<tr class="firstalt">
  <td align="right">影片简介：</td>
  <td><div style="height:120px; overflow:auto"><?php echo ($vod_content); ?></div></td>
</tr>
</tbody>
</table>