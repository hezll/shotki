<?php if (!defined('THINK_PATH')) exit();?><link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin.css'>
<table width="860" border="0" align="center" cellpadding="4" cellspacing="1" class="tableoutline">
<tr class="tb_head" ><td colspan="3"><h2>第<?php echo ($cid); ?>个采集节点下的任务<font color="green"><?php echo ($vod_state); ?></font> 目标地址:<a href="<?php echo ($vod_reurl); ?>" target="_blank"><?php echo ($vod_reurl); ?></a></h2></td></tr>
<tr class="firstalt">
  <td width="20%" align="right">影片名称：</td>
  <td width="58%"><?php echo ($vod_name); ?></td>
  <td width="22%" rowspan="8"><img src="<?php echo ($vod_pic); ?>" width="200" height="260" /></td>
</tr>
<tr class="firstalt">
  <td width="20%" align="right">影片分类：</td>
  <td width="58%"><?php echo getlistname($vod_cid);?> <span style="color:#CCC">注：这里是转化后入到你数据库的分类</span></td>
  </tr>
<tr class="firstalt">
  <td width="20%" align="right">影片图片：</td>
  <td width="58%"><?php echo ($vod_pic); ?></td>
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
  <td colspan="2"><div style="height:120px; overflow:auto"><?php echo ($vod_content); ?></div></td>
</tr>
<tr class="firstalt">
  <td align="right">影片地址：</td>
  <td colspan="2"><textarea rows="10" style="width:100%"><?php echo ($vod_url); ?></textarea></td>
</tr>
</table>