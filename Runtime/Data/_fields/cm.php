<?php
return array (
  0 => 'cm_id',
  1 => 'cm_cid',
  2 => 'cm_user',
  3 => 'cm_content',
  4 => 'cm_up',
  5 => 'cm_down',
  6 => 'cm_face',
  7 => 'cm_ip',
  8 => 'cm_addtime',
  9 => 'cm_sid',
  10 => 'cm_del',
  '_autoinc' => true,
  '_pk' => 'cm_id',
  '_type' => 
  array (
    'cm_id' => 'mediumint(8) unsigned',
    'cm_cid' => 'mediumint(8)',
    'cm_user' => 'varchar(50)',
    'cm_content' => 'text',
    'cm_up' => 'mediumint(8)',
    'cm_down' => 'mediumint(8)',
    'cm_face' => 'tinyint(1)',
    'cm_ip' => 'varchar(20)',
    'cm_addtime' => 'int(11)',
    'cm_sid' => 'tinyint(1)',
    'cm_del' => 'tinyint(1)',
  ),
);
?>