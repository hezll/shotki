<?php if (!defined('THINK_PATH')) exit();?><style>
body {margin:0px;padding:0px;font-size:12px;color:#313131;font-family: "sim-sun", "Geneva", "Arial", "Helvetica", "sans-serif";}
input {border:1px solid #bbb;height:22px;vertical-align:middle;font-size:12px;}
</style>
<form action="?s=Admin-Upload-Upload" method="post" enctype="multipart/form-data" id="myform" name="myform" style="margin-left:5px">
<input name="sid" type="hidden" value="<?php echo (htmlspecialchars($_GET['sid'])); ?>"/>
<input name="fileback" type="hidden" value="<?php echo (htmlspecialchars($_GET['fileback'])); ?>"/>
<input name="upthumb" id="upthumb" type="file" size="25"> <input type="submit" value="上 传" style="background:url(../images/inputbut_bg.gif); cursor:pointer"/>
{__NOTOKEN__}
</form>