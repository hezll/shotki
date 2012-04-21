var bell_bn=navigator.appName;var bellIev = "Microsoft Internet Explorer";function blmeIncCSS(a){var b=document.createElement('link');b.rel='stylesheet';b.type='text/css';b.href=a;document.getElementsByTagName('head')[0].appendChild(b)}if (bell_bn==bellIev){ blmeIncCSS('http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/css/_bellIEstyles.css');}

function bellme_styles(a){var b=document.getElementsByTagName('head')[0];var c=document.createElement('style');c.type='text/css';c.media='screen';if(c.styleSheet){c.styleSheet.cssText=a}else{c.appendChild(document.createTextNode(a))}b.appendChild(c);return c}



var bellmeStyles='.bellme_inter label{display:block;float:left;width:59px}.bellme_inter_label{font-size:11px;font-family:Trebuchet MS,arial,sans-serif;text-align:center}.bellme_inter input,.bellme_inter_flag,.bmLabCntry{float:left}label.bmLblInt{position:relative;border:1px solid#d4d4d4;margin-right:2px}label.bmLblInt:hover{background-color:#fff6bb;cursor:pointer;height:1%}.bellme_inter_flag,#bmIntDyn{width:16px;height:11px;overflow:hidden;margin:6px 0 0 0}#bmIntDyn{position:absolute;left:5px;top:7px}.bmLabCntry{float:right;text-decoration:underline;font-size:12px;font-weight:bold;margin:3px 0;text-transform:uppercase;padding-right:3px}.mynumber{text-align:left;border-left:0;margin-top:2px;padding:5px 2px 5px 25px;background-color:#fffbe3;font-weight:bold;font-family:Trebuchet MS,Arial,Helvetica;color:#3c3c3c;font-size:14px}.bellme_depart{clear:both}.bellme_button_bubble_upA {bottom:54px;padding:4px 0 0 6px;background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) 0 -292px no-repeat;}#bellme_fixeddiv{position:absolute;z-index:1000000;border:1px solid #aaaaaa;padding:1px;}a#bellMe_popM1924{background-color:transparent!important;font-size:11px;}#bellMe_popM1924 input{width:auto!important;height:auto!important;}.bm_call_box input{width:auto!important;height:auto!important;}.clearbellme:after { content: "."; display: block; height: 0; clear: both; visibility: hidden;}.bm_bubbleA{position:absolute;font-weight:normal}.bellme_button_bubble_downA {top:-8px;background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) 0 -346px no-repeat;}#bbTxt1924{text-align:left;line-height:15px;font-size:13px!important;font-family:arial,sans-serif!important;color:#000!important}';


bellme_styles(bellmeStyles);



function bellme_inf1924(bellme_id){var bm_inf=$vBlme('bellme_info_win'+bellme_id);var bm_win=$vBlme('bellme_win'+bellme_id);var bm_infbut=$vBlme('bm_inf_but'+bellme_id);var bm_bckbut=$vBlme('bm_bck_but'+bellme_id);var bm_qHlp=$vBlme('bellme_qhlpA'+bellme_id);var bm_fLft=$vBlme('bmFootLft'+bellme_id);var sms_win=$vBlme('bmSmsWin'+bellme_id);var bm_response=$vBlme('bellme_response_'+bellme_id);var bm_prob=$vBlme('bellme_prob'+bellme_id);if(bm_inf.style.display=='none'){bm_inf.style.display='';bm_win.style.display='none';bm_qHlp.style.display='none';bm_fLft.style.display='none';sms_win.style.display='none';bm_infbut.style.display='none';bm_bckbut.style.display='block';bm_response.style.display='none';bm_prob.style.display='none'}else{bm_inf.style.display='none';bm_win.style.display='';bm_fLft.style.display='';bm_qHlp.style.display='none';bm_infbut.style.display='block';bm_bckbut.style.display='none';bm_response.style.display='none';bm_prob.style.display='none'}}
function bm_call_main1924(bellme_id){var bm_inf=$vBlme('bellme_info_win'+bellme_id);var bm_win=$vBlme('bellme_win'+bellme_id);var bm_infbut=$vBlme('bm_inf_but'+bellme_id);var bm_bckbut=$vBlme('bm_bck_but'+bellme_id);var bm_qHlp=$vBlme('bellme_qhlpA'+bellme_id);var bm_fLft=$vBlme('bmFootLft'+bellme_id);var sms_win=$vBlme('bmSmsWin'+bellme_id);var bm_response=$vBlme('bellme_response_'+bellme_id);var bm_prob=$vBlme('bellme_prob'+bellme_id);if(bm_win.style.display=='none'){bm_inf.style.display='none';bm_win.style.display='';bm_qHlp.style.display='none';bm_fLft.style.display='block';sms_win.style.display='none';bm_infbut.style.display='block';bm_bckbut.style.display='none';bm_response.style.display='none';bm_prob.style.display='none'}}
function bm_sms_inf(bellme_id){var sms_win=$vBlme('bmSmsWin'+bellme_id);var bm_inf=$vBlme('bellme_info_win'+bellme_id);var bm_win=$vBlme('bellme_win'+bellme_id);var bm_infbut=$vBlme('bm_inf_but'+bellme_id);var bm_bckbut=$vBlme('bm_bck_but'+bellme_id);var bm_response=$vBlme('bellme_response_'+bellme_id);var bm_prob=$vBlme('bellme_prob'+bellme_id);if(sms_win.style.display=='none'){sms_win.style.display='';bm_win.style.display='none';bm_infbut.style.display='none';bm_bckbut.style.display='block';bm_response.style.display='none';bm_prob.style.display='none'}else{sms_win.style.display='none';bm_win.style.display='';bm_infbut.style.display='block';bm_bckbut.style.display='none';bm_response.style.display='none';bm_prob.style.display='none'}}
function bellme_dial1924(bellme_id){var sms_win=$vBlme('bmSmsWin'+bellme_id);var bm_inf=$vBlme('bellme_info_win'+bellme_id);var bm_win=$vBlme('bellme_win'+bellme_id);var bm_infbut=$vBlme('bm_inf_but'+bellme_id);var bm_bckbut=$vBlme('bm_bck_but'+bellme_id);var bm_response=$vBlme('bellme_response_'+bellme_id);var bm_prob=$vBlme('bellme_prob'+bellme_id);if(bm_response.style.display=='none'){sms_win.style.display='none';bm_win.style.display='none';bm_infbut.style.display='none';bm_bckbut.style.display='block';bm_response.style.display='block';bm_prob.style.display='none'}else{sms_win.style.display='none';bm_win.style.display='';bm_infbut.style.display='block';bm_bckbut.style.display='none';bm_response.style.display='none';bm_prob.style.display='none'}}

function bellme_flag1924(a,c){var flStyle;if(c=='au'){flStyle='0'}else if(c=='us'){flStyle='-11px'}else if(c=='uk'){flStyle='-22px'}else if(c=='ca'){flStyle='-33px'}else if(c=='nz'){flStyle='-44px'}else{flStyle='0'}var bmIntId='bmIntDyn';var bellmePixel='http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png';if($vBlme(bmIntId).style.background=='url('+bellmePixel+') no-repeat'){$vBlme(bmIntId).style.background='url('+bellmePixel+') no-repeat 0 '+flStyle}else{$vBlme(bmIntId).style.background='url('+bellmePixel+') no-repeat 0 '+flStyle}}

function readCookie(name){var nameEQ=name+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(nameEQ)==0)return c.substring(nameEQ.length,c.length)}return null}

function bellme_window1924(bellme_id){var bmWin=$vBlme('bellMe_popI1924');bmWin.style.display=(bmWin.style.display=='')?'none':'';var myNumVal=$vBlme("mynumber1924");var xCook=readCookie('fgfgrtsdf');var checkIt=$vBlme('bellme_remember1924');if(xCook){myNumVal.value=xCook;checkIt.checked=true}else{myNumVal.value='Your phone # here ...'}}
function bmCenterIt1924(bmCdivId){var viewportwidth;var viewportheight;var divWidth=300;var divHeight=300;if(typeof window.innerWidth!='undefined'){viewportwidth=window.innerWidth,viewportheight=window.innerHeight}else if(typeof document.documentElement!='undefined'&&typeof document.documentElement.clientWidth!='undefined'&&document.documentElement.clientWidth!=0){viewportwidth=document.documentElement.clientWidth,viewportheight=document.documentElement.clientHeight}else{viewportwidth=document.getElementsByTagName('body')[0].clientWidth,viewportheight=document.getElementsByTagName('body')[0].clientHeight}var bellme_leftP=(viewportwidth-$vBlme(bmCdivId).offsetWidth)/2;var bellme_topP=(viewportheight-$vBlme(bmCdivId).offsetHeight)/2;$vBlme(bmCdivId).style.left=bellme_leftP+"px";$vBlme(bmCdivId).style.top=bellme_topP+"px"}

function bellme_qhlp1924(bellmeDiv) { var bmHlp = $vBlme(bellmeDiv); bmHlp.style.display = (bmHlp.style.display == 'block')?'none':'block';}

function bellmePrepField(a){if(!document.getElementById){return false}var b=$vBlme(a);var c=b.defaultValue;b.onfocus=function(){if(b.value==c){b.value="";b.style.color='#1e437f'}};b.onblur=function(){if(b.value==""){b.value=c}}}

function bellme_showbubbleA(a){if(bellme_getAbsolutePosition('bellme_button_'+a)>(bellme_getbodydimensions()/2)){$vBlme('bellme_bubble_'+a).className='bellme_button_bubble_upA';$vBlme('bbTxt1924').style.padding='0 0 0 6px'}else{$vBlme('bellme_bubble_'+a).className='bellme_button_bubble_downA';$vBlme('bbTxt1924').style.padding='18px 0 0 6px'}$vBlme('bellme_bubble_'+a).style.display='block'}

function bellme_hidebubbleA(a){$vBlme('bellme_bubble_'+a).style.display='none';clearTimeout(bubbletimeout)}var bubbletimeout;function bellme_bubbleA(a){clearTimeout(bubbletimeout);bellme_showbubbleA(a)}function bellme_bubbleoutA(a){bubbletimeout=setTimeout("bellme_hidebubbleA('"+a+"')",600)}

function bellme_getbodydimensions(){var x,y;var a=Array();if(self.innerHeight){x=self.innerWidth;y=self.innerHeight}else if(document.documentElement&&document.documentElement.clientHeight){x=document.documentElement.clientWidth;y=document.documentElement.clientHeight}else if(document.body){x=document.body.clientWidth;y=document.body.clientHeight}a[0]=x;a[1]=y;return y}


function bellme_getAbsolutePosition(a){var b=$vBlme(a);var c=0;var d=0;while(b){c+=b.offsetLeft;d+=b.offsetTop;b=b.offsetParent}return d}
function JSR(fUrl){this.fUrl = fUrl;this.noCIE = '&noCIE=' + (new Date()).getTime();this.headLoc = document.getElementsByTagName("head").item(0);this.scId = 'unId' + JSR.scriptCounter++;}JSR.scriptCounter = 1;JSR.prototype.bST = function(){this.sO = document.createElement("script");this.sO.setAttribute("type", "text/javascript");this.sO.setAttribute("src", this.fUrl + this.noCIE);this.sO.setAttribute("id", this.scId);}

JSR.prototype.rScrT = function () {
    this.headLoc.removeChild(this.sO);
}

JSR.prototype.aScrT = function () {
    this.headLoc.appendChild(this.sO);
}


function isPhNum1924(myIda){
var myId = document.getElementById("mynumber1924").value;
var illegalCharsA = /\d$/;

	if(myId == "" || myId == null || myId == "Type your Ph here ..." || myId.search(illegalCharsA)==-1 || myId.length<9 || myId.length>11){
		alert("Please Enter valid Phone Number including area code");
		return false;
	}
	addScript1924(myIda);
	bellme_dial1924(1924);

}


function addScript1924(myIda){

  document.getElementById("ringring1924").value='';
  document.getElementById("ringring1924").disabled=true;

  var myId = document.getElementById("mynumber1924").value;

  if(document.getElementById('bellme_remember1924').checked){
  document.cookie = 'fgfgrtsdf='+myId+'; expires=Sun, 13 Nov 2050 20:47:11 UTC; path=/'
  }else{
  document.cookie = 'fgfgrtsdf=; expires=-1; path=/'
  }

    var interA;
  for (i=0;i<document.getElementsByName("inter1924").length; i++){
  if(document.getElementsByName("inter1924")[i].checked){
  var interA = document.getElementsByName("inter1924")[i].value;
  }
  }
      var multiA;
  for (i=0;i<document.getElementsByName("multi1924").length; i++){
  if(document.getElementsByName("multi1924")[i].checked){
  var multiA = document.getElementsByName("multi1924")[i].value;
  }
  }
      var act = "1288587092";
  var mbId = "";
  var unID = "1924";
  var obj=new JSR('http://bellmedia.com/bellme/but02/rf.php?a='+myId+'&t='+act+'&mb='+mbId+'&i='+interA+'&m='+multiA+'&unID='+unID+'');
  obj.bST();
  obj.aScrT();
  document.getElementById("ringring1924").value='';
  document.getElementById("ringring1924").disabled=false;
}//end addScript

function dynaBut1924(data){
  var bmtxt='';
  if(data==null)
	alert('error');
else{
  bmtxt='<div id="bell_pop1924" class="blmeieClear">';
  bmtxt+='<div class="bellme_feat">';
	var goodBad = data.Results.statusA;
	if(goodBad == '204'){
		var bmRedir = data.Results.redirA;
		var bmRedirUrl = data.Results.redirUrlA;
		if(bmRedir == 'yes'){
		window.location = bmRedirUrl;
		}else{
		bmtxt+='<div style="clear:both;margin:5px 0;font-weight:bold">Bell Me free call connection status:</div>';
		bmtxt+='<div style="clear:both;margin:10px 0;font-size:16px;color:#006600">Calling ... ' + data.Results.ph +'</div>';
		bmtxt+='<div style="clear:both;margin:10px 0 5px 0;font-size:11px!important">Connection to the above number has been successful and your phone should be ringing in the next few seconds.</div>';
		bmtxt+='<div style="clear:both;margin:10px 0 5px 0;font-size:12px!important;font-weight:bold"><em>You may close this window once your phone starts ringing.</em></div>';
		bmtxt+='<div style="font-size:11px!important">Connection Code: <b>' + data.Results.statusA+'</b></div>';
		bmtxt+='<div style="clear:both;padding:5px 0"><b onmousedown="bellme_qhlp1924(\'bellme_prob1924\')" style="color:#11337b!important;background:0!important;font-size:11px!important;text-decoration:underline;cursor:pointer;font-weight:normal">Phone not ringing?</b></div>';
		}
	}else{
	bmtxt+='<div style="clear:both;margin:5px 0;font-weight:bold">Bell Me free call connection status:</div>';
	bmtxt+='<div style="clear:both;margin:10px 0;font-size:16px;color:#ff0000">Problem ... ' + data.Results.ph +'</div>';
	bmtxt+='<div style="clear:both;margin:10px 0 5px 0;font-size:11px!important">'+ data.Results.subVar +'</div>';
	bmtxt+='<div style="font-size:11px!important">Connection Code: <b>' + data.Results.statusA+'<b></div>';
	}
  bmtxt+='</div>';
  bmtxt+='</div>';
  }
  document.getElementById('bellme_response_1924').innerHTML=bmtxt;

}//end dynaBut


function bellme_mBut1924(){
$vBlme('bellmeDiv').innerHTML = '<div class="bellme_button" id="bellme_but1924" style="cursor:pointer;width:198px;height:64px"><div id="bellme_button_1924" onclick="bellme_window1924(\'1924\');bmCenterIt1924(\'bellMe_popI1924\');" onmouseover="bellme_bubbleA(\'1924\');" onmouseout="bellme_bubbleoutA(\'1924\');" style="background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/buts/bellme_but04.png) no-repeat;width:198px;height:64px;display:block"></div><div class="bm_bubbleA" style="width:0px;z-index:100000"><div id="bellme_bubble_1924" style="position:absolute;left:15px;width:139px;height:54px;cursor:default;display:none;clear:both;" onmouseover="bellme_bubbleA(\'1924\');" onmouseout="bellme_bubbleoutA(\'1924\');"><div id="bbTxt1924" style="">Click here to give us a call for <b>FREE!</b></div></div></div></div>';
}

var dTag = document.createElement("div");dTag.id = "bButUnDivId1924";dTag.className = "bButUnDivCl";
var bmTxt='<div style="background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) 0 0 no-repeat;"></div>';
bmTxt+='<div id="bellMe_popM1924" class="bellMeIeFix" style="clear:both;position:absolute;z-index:10000!important;text-align:left!important;">';
bmTxt+='<div id="bellMe_popI1924" class="bellMe_popA" style="clear:both;width:361px;overflow:hidden;display:none;position:fixed;z-index:1000000000!important">';
bmTxt+='<div id="bellMe_head1924" class="bellMe_head" style="clear:both;height:24px;padding:13px 20px 0 15px;background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) 0 -400px no-repeat;cursor:default;">';
bmTxt+='<div class="bellMe_hdLft" style="float:left;background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) 0 -95px no-repeat;height:21px;width:255px;overflow:hidden;line-height:18px"><b style="float:left;font-family:arial,serif;font-size:14px;margin-left:25px;color:#3c3c3c">Free Call - Bell Media Canada</b></div>';
bmTxt+='<div class="bellMe_hdRgt" style="float:right;width:60px;">';
bmTxt+='<b onmousedown="bellme_window1924(\'1924\');" title="Close Call Window" style="background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -182px;width:26px;height:18px;display:block;font-size:14px!important;float:right;position:relative;text-decoration:none;margin-left:2px;cursor:pointer" onmouseover="this.style.background=\'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -160px\'" onmouseout="this.style.background=\'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -182px\'"></b>';
bmTxt+='<b class="bellme_info_but" id="bm_inf_but1924" title="Help/Info" style="background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -116px;width:26px;height:18px;display:block;font-size:14px!important;float:right;position:relative;text-decoration:none;cursor:pointer" onmousedown="bellme_inf1924(\'1924\');" onmouseover="this.style.background=\'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -138px\'" onmouseout="this.style.background=\'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -116px\'"></b>';
bmTxt+='<b class="bellme_info_back" id="bm_bck_but1924" title="Back to Call" style="background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -204px;width:26px;height:18px;display:none;font-size:14px!important;float:right;position:relative;text-decoration:none;cursor:pointer" onmousedown="bm_call_main1924(\'1924\');" onmouseover="this.style.background=\'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -226px\'" onmouseout="this.style.background=\'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -204px\'"></b>';
bmTxt+='</div>';
bmTxt+='</div>';
bmTxt+='<div class="bellme_inc" style="clear:both;margin-left:1px;background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_bgA.png) repeat-y">';
bmTxt+='<div class="bellme_inc_main" style="background-color:#fff;border:1px solid #666;width:329px;margin-left:12px">';
bmTxt+='<div id="bellme_info_win1924" style="padding:8px 5px;font-family:Arial, Helvetica;font-size:12px;color:#3c3c3c;display:none;text-align:left!important">';
bmTxt+='<b>How does it work?</b><br>Once you  have entered your number in the field provided your phone will ring, then we will connect you free of charge to the business.<br><br><b>What happens to my phone number?</b><br>Bell Media uses your number internally to connect you once to the business, and as a security measure for prank or abuse calls. Your number is not used for marketing purposes nor will your information be sold to 3rd parties. If you feel this is in error please don\'t hesitate to contact us by going to <a href="http://www.bellmedia.com" style="color:#11337b!important;background:#fff!important;font-size:13px!important">Bell Media Website</a>.';
bmTxt+='</div>';
bmTxt+='<div id="bellme_response_1924" class="blmeieClear" style="clear:both;padding:0 5px;font-family:Arial, Helvetica;font-size:12px;color:#3c3c3c;display:none;text-align:left;line-height:15px"></div>';
bmTxt+='<div id="bellme_prob1924" style="margin:0 10px 10px 10px;padding:5px 10px;border-bottom:1px dashed #000;clear:both;display:none;font-family:Arial, Helvetica;font-size:11px;color:#333;display:none;text-align:left;line-height:13px;background-color:#eee">If your phone is not ringing after 10-20 seconds double check the calling number above to make sure it is the correct phone number. <br><br>You are calling internationally ... make sure to select the right country.<b style="font-weight:normal;text-decoration:underline;cursor:pointer;color:#11337b" onmousedown="bm_call_main1924(\'1924\')">Try again?</b></div>';
bmTxt+='<div id="bmSmsWin1924" style="padding:8px 5px;font-family:Arial, Helvetica;font-size:12px;line-height:14px;color:#3c3c3c;display:none;text-align:left">';
bmTxt+='<b>What is SMS to Free Call?</b><br>Since you cant always have a pc with you, the SMS to Free Call is a great new feature that allows you to take advantage of Free Calls while your out and about.  This is a great feature if you are on prepaid mobile, and concerned about the higher call costs eating away at your phone credit.';
bmTxt+='<br><br>';
bmTxt+='<b>How does SMS to Free Call work?</b><br>';
bmTxt+='Simply <b style="color:#bf3040">SMS</b> <b style="color:#009900;text-transform:uppercase">1288587092</b> to <b style="color:#bf3040">1-999-BELL</b> and your phone call will be instantly connected. <b>Give it a try!</b>';
bmTxt+='<br><br>';
bmTxt+='<b>How much does the SMS cost?</b><br>';
bmTxt+='While the actual phone call itself is still free, the SMS costs are 55c per message.  SMS Rates may vary depending on your mobile service provider or plan.';
bmTxt+='</div>';bmTxt+='<div class="bellme_inc_call" id="bellme_win1924" style="padding:8px 5px;font-family:Trebuchet MS, Arial, Helvetica;font-size:13px;color:#3c3c3c">';
bmTxt+='<div class="bellme_txt" style="margin-bottom:10px;font-weight:bold;padding:0 5px;">Enter your phone number below and we will connect you instantly for FREE!</div>';
bmTxt+='<div class="bellme_inter clearbellme" id="bm_inter1924" style="margin-bottom:10px;">';bmTxt+='<div class="bellme_inter_label"><b>Which <span style="color:#196697">country</span> are you calling from?  </b></div>';bmTxt+='<label for="bellme_au1924" title="au" class="bmLblInt">';bmTxt+='<input class="bmInBut" type="radio" id="bellme_au1924" name="inter1924" value="au" onclick="bellme_flag1924(\'mynumber1924\',\'au\')" > <span class="bellme_inter_flag" style="background: url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 0"></span><span class="bmLabCntry">au</span>';bmTxt+='</label>';bmTxt+='<label for="bellme_us1924" title="us" class="bmLblInt">';bmTxt+='<input class="bmInBut" type="radio" id="bellme_us1924" name="inter1924" value="us" onclick="bellme_flag1924(\'mynumber1924\',\'us\')" > <span class="bellme_inter_flag" style="background: url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -11px"></span><span class="bmLabCntry">us</span>';bmTxt+='</label>';bmTxt+='<label for="bellme_uk1924" title="uk" class="bmLblInt">';bmTxt+='<input class="bmInBut" type="radio" id="bellme_uk1924" name="inter1924" value="uk" onclick="bellme_flag1924(\'mynumber1924\',\'uk\')" > <span class="bellme_inter_flag" style="background: url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -22px"></span><span class="bmLabCntry">uk</span>';bmTxt+='</label>';bmTxt+='<label for="bellme_ca1924" title="ca" class="bmLblInt">';bmTxt+='<input class="bmInBut" type="radio" id="bellme_ca1924" name="inter1924" value="ca" onclick="bellme_flag1924(\'mynumber1924\',\'ca\')"  checked="checked"> <span class="bellme_inter_flag" style="background: url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -33px"></span><span class="bmLabCntry">ca</span>';bmTxt+='</label>';bmTxt+='<label for="bellme_nz1924" title="nz" class="bmLblInt">';bmTxt+='<input class="bmInBut" type="radio" id="bellme_nz1924" name="inter1924" value="nz" onclick="bellme_flag1924(\'mynumber1924\',\'nz\')" > <span class="bellme_inter_flag" style="background: url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -44px"></span><span class="bmLabCntry">nz</span>';bmTxt+='</label>';bmTxt+='</div>';bmTxt+='<div class="bellme_depart" style="margin-bottom:5px;">';bmTxt+='<fieldset style="text-align:center;border:1px solid #d4d4d4;background-color:#f4f4f4;padding:3px 0;margin:0;font-size:12px!important">';bmTxt+='<legend align="center" style="padding:0 5px;background-color:#fff;border:1px solid #d4d4d4"><b>Choose a <span style="color:#196697">department</span> to call</b></legend>'; bmTxt+='<label for="bellme_m11924"><input type="radio" id="bellme_m11924" name="multi1924" value="mb1" checked> <b style="text-decoration:underline;color:#11337b" onmouseover="this.style.color=\'#FF0000\'" onmouseout="this.style.color=\'#11337b\'">Sales</b></label>'; bmTxt+='<label for="bellme_m21924"><input type="radio" id="bellme_m21924" name="multi1924" value="mb2"> <b style="text-decoration:underline;color:#11337b"  onmouseover="this.style.color=\'#FF0000\'" onmouseout="this.style.color=\'#11337b\'">Tech Support</b></label>'; bmTxt+='<label for="bellme_m31924"><input type="radio" id="bellme_m31924" name="multi1924" value="mb3"> <b style="text-decoration:underline;color:#11337b"  onmouseover="this.style.color=\'#FF0000\'" onmouseout="this.style.color=\'#11337b\'">Accounts</b></label>'; bmTxt+='</fieldset>';bmTxt+='</div>';bmTxt+='<div class="bellme_call" style="margin-bottom:10px;position:relative;">';
bmTxt+='<label for="bellme_remember1924" style="float:left;width:233px;text-align:right;clear:both;font-family:Trebuchet MS, Arial, Helvetica;color:#11337b;font-size:11px;padding:2px 0;"><b style="text-decoration:underline" onmouseover="this.style.color=\'#FF0000\'" onmouseout="this.style.color=\'#11337b\'">Remember my number?</b> <input type="checkbox" name="bellme_remember" id="bellme_remember1924"  /></label>';
bmTxt+='<div style="clear:both">';
bmTxt+='<div style="float:left;display:block;width:35px;height:41px;background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -55px;"></div>';
bmTxt+='<div class="bmiEFix" style="position:relative;float:left;display:block;width:200px;"><div id="bmIntDyn"></div><input class="mynumber" type="text" name="mynumber1924" id="mynumber1924" onkeyup="this.value=this.value.replace(/[^0-9]/g, \'\');" onmousedown="bellmePrepField(\'mynumber1924\');" value="Your phone # here ..."></div>';
bmTxt+='<div style="float:left;" class="bellme_call_but"><b style="background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -457px;display:block;font-size:14px!important;width:70px;height:27px;margin-top:4px;cursor:pointer" id="ringring1924"  onmousedown="isPhNum1924()" onmouseover="this.style.background=\'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -486px\'" onmouseout="this.style.background=\'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -457px\'"></b></div>';
bmTxt+='</div>';
bmTxt+='<div style="width:225px;text-align:right;clear:both;font-family:Trebuchet MS, Arial, Helvetica;color:#2a2a2a;font-size:11px;font-weight:normal">* Don\'t forget your <b style="color:#bf3040">area code!</b></div>';
bmTxt+='</div>';
bmTxt+='</div>';
bmTxt+='<div class="bellme_inc_foot clearbellme" style="font-family:tahoma, Arial;font-size:11px;color:#3c3c3c;padding:8px;background-color:#ebf2fa;border-top:1px solid #b1bac6">';
bmTxt+='<div class="bellme_foot_lft" id="bmFootLft1924" style="float:left;display:block">';
bmTxt+='<b onmousedown="bellme_qhlp1924(\'bellme_qhlpA1924\')" style="text-decoration:underline;cursor:pointer;color:#11337b!important;background:0!important;font-size:11px!important">How to use the free call?</b>';
bmTxt+='<div id="bellme_qhlpA1924" class="blmeieClear" style="display:none">';
bmTxt+='<b style="font-family:tahoma, Arial;font-size:10px;color:#000;font-weight:normal">Simply enter your number in the field provided and click the call button, your phone will ring, and we will connect your call free of charge. <b onmousedown="bellme_inf1924(\'1924\');bellme_qhlp1924(\'bellme_qhlpA1924\')" style="cursor:pointer;text-decoration:underline;color:#11337b!important;background:0!important;font-size:10px!important">Privacy</b></b>';
bmTxt+='</div>';
bmTxt+='</div>';
bmTxt+='<div class="bellme_foot_rgt" style="float:right;width:85px">';
bmTxt+='<b style="float:left"><a href="http://www.bellmedia.com/try-button-1288587092" style="color:#11337b!important;font-size:11px!important;background-color:#ebf2fa!important">Bell Media</a></b><div style="display:block;background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) 0 -95px no-repeat;width:22px;height:21px;float:right"></div>';
bmTxt+='</div>';
bmTxt+='</div>';
bmTxt+='</div>';
bmTxt+='</div>';
bmTxt+='<div class="bellme_foot" style="clear:both;height:20px;background:url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) 0 -437px no-repeat;"> </div>';
bmTxt+='</div>';
bmTxt+='</div>';
dTag.innerHTML = bmTxt;
document.body.appendChild(dTag);

$vBlme('bmIntDyn').style.background = 'url(http://wpc.1BE2.edgecastcdn.net/801BE2/bme/b/i/bellme_images.png) no-repeat 0 -33px';

function bellME_onld(a){if(typeof window.addEventListener!="undefined"){window.addEventListener("load",a,false)}else if(typeof window.attachEvent!="undefined"){window.attachEvent("onload",a)}else{if(window.onload!==null){var b=window.onload;window.onload=function(e){b(e);window[a]()}}else{window.onload=a}}}bellme_mBut1924();

