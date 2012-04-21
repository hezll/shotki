<?php
return array (
  'collect_id' => '1',
  'collect_title' => 'qvodzy.me-定时采集全站',
  'collect_encoding' => 'gb2312',
  'collect_player' => 'qvod',
  'collect_savepic' => '0',
  'collect_order' => '1',
  'collect_pagetype' => '2',
  'collect_liststr' => 'http://www.qvodzy.me/list.asp?TypeID=27',
  'collect_pagestr' => 'http\\:\\/\\/www\\.qvodzy\\.com\\.cn\\/index\\.asp\\?page=([\\s\\S]*?)',
  'collect_pagesid' => '1',
  'collect_pageeid' => '2',
  'collect_listurlstr' => '更新时间<\\/strong><\\/td>([\\s\\S]*?)每页<span class',
  'collect_listlink' => '<td height=\\"20\\"><a href=\\"([\\s\\S]*?)\\" target=\\"_blank\\">',
  'collect_listpicstr' => '',
  'collect_cid' => '0',
  'collect_listname' => '影片类型：<\\/strong><\\/td>
        <td>([\\s\\S]*?)<\\/td>',
  'collect_name' => '<strong>影片名称：<\\/strong><\\/td>
        <td width=\\"434\\">([\\s\\S]*?)<\\/td>',
  'collect_actor' => '影片演员：<\\/strong><\\/td>
        <td>([\\s\\S]*?)<\\/td>',
  'collect_director' => '',
  'collect_content' => '<strong>影片简介：<\\/strong><\\/td>
        <td>([\\s\\S]*?)<\\/td>',
  'collect_pic' => '<td valign=\\"middle\\"><img src=\\"([\\s\\S]*?)\\" width=\\"250\\" height=\\"350\\" \\/><\\/td>',
  'collect_area' => '<strong>影片地区：<\\/strong><\\/td>
        <td>([\\s\\S]*?)<\\/td>',
  'collect_language' => '',
  'collect_year' => '',
  'collect_continu' => '<strong>影片状态：<\\/strong><\\/td>
        <td width=\\"434\\">\\[([\\s\\S]*?)\\]<\\/td>',
  'collect_urlstr' => '<strong>地址列表<\\/strong><\\/td>([\\s\\S]*?)<\\/table>',
  'collect_urlname' => '',
  'collect_urllink' => 'target=\\"_blank\\">([\\s\\S]*?)<\\/a>',
  'collect_url' => '',
  'collect_replace' => '|||综艺其他$$$综艺
动作$$$动作片
喜剧$$$喜剧片
爱情$$$爱情片
科幻$$$科幻片 
恐怖$$$恐怖片
战争$$$战争片 
剧情$$$故事片 
大陆剧$$$国产剧 
粤语经典$$$其它|||||||||||||||||||||',
);
?>