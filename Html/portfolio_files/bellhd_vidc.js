if(typeof deconcept=="undefined"){var deconcept=new Object();}if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a){if(!document.getElementById){return;}this.DETECT_KEY=_a?_a:"detectflash";this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params=new Object();this.variables=new Object();this.attributes=new Array();if(_1){this.setAttribute("swf",_1);}if(id){this.setAttribute("id",id);}if(w){this.setAttribute("width",w);}if(h){this.setAttribute("height",h);}if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();if(!window.opera&&document.all&&this.installedVer.major>7){deconcept.SWFObject.doPrepUnload=true;}if(c){this.addParam("bgcolor",c);}var q=_7?_7:"high";this.addParam("quality",q);this.setAttribute("useExpressInstall",false);this.setAttribute("doExpressInstall",false);var _c=(_8)?_8:window.location;this.setAttribute("xiRedirectUrl",_c);this.setAttribute("redirectUrl","");if(_9){this.setAttribute("redirectUrl",_9);}};deconcept.SWFObject.prototype={useExpressInstall:function(_d){this.xiSWFPath=!_d?"expressinstall.swf":_d;this.setAttribute("useExpressInstall",true);},setAttribute:function(_e,_f){this.attributes[_e]=_f;},getAttribute:function(_10){return this.attributes[_10];},addParam:function(_11,_12){this.params[_11]=_12;},getParams:function(){return this.params;},addVariable:function(_13,_14){this.variables[_13]=_14;},getVariable:function(_15){return this.variables[_15];},getVariables:function(){return this.variables;},getVariablePairs:function(){var _16=new Array();var key;var _18=this.getVariables();for(key in _18){_16[_16.length]=key+"="+_18[key];}return _16;},getSWFHTML:function(){var _19="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","PlugIn");this.setAttribute("swf",this.xiSWFPath);}_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\"\"";_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";var _1a=this.getParams();for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}var _1c=this.getVariablePairs().join("&");if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");this.setAttribute("swf",this.xiSWFPath);}_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\">";_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";var _1d=this.getParams();for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}var _1f=this.getVariablePairs().join("&");if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}return _19;},write:function(_20){if(this.getAttribute("useExpressInstall")){var _21=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){this.setAttribute("doExpressInstall",true);this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){var n=(typeof _20=="string")?document.getElementById(_20):_20;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}return false;}};deconcept.SWFObjectUtil.getPlayerVersion=function(){var _23=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{if(navigator.userAgent&&navigator.userAgent.indexOf("Windows CE")>=0){var axo=1;var _26=3;while(axo){try{_26++;axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+_26);_23=new deconcept.PlayerVersion([_26,0,0]);}catch(e){axo=null;}}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}}return _23;};deconcept.PlayerVersion=function(_29){this.major=_29[0]!=null?parseInt(_29[0]):0;this.minor=_29[1]!=null?parseInt(_29[1]):0;this.rev=_29[2]!=null?parseInt(_29[2]):0;};deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major){return false;}if(this.major>fv.major){return true;}if(this.minor<fv.minor){return false;}if(this.minor>fv.minor){return true;}if(this.rev<fv.rev){return false;}return true;};deconcept.util={getRequestParameter:function(_2b){var q=document.location.search||document.location.hash;if(_2b==null){return q;}if(q){var _2d=q.substring(1).split("&");for(var i=0;i<_2d.length;i++){if(_2d[i].substring(0,_2d[i].indexOf("="))==_2b){return _2d[i].substring((_2d[i].indexOf("=")+1));}}}return "";}};deconcept.SWFObjectUtil.cleanupSWFs=function(){var _2f=document.getElementsByTagName("OBJECT");for(var i=_2f.length-1;i>=0;i--){_2f[i].style.display="none";for(var x in _2f[i]){if(typeof _2f[i][x]=="function"){_2f[i][x]=function(){};}}}};if(deconcept.SWFObject.doPrepUnload){if(!deconcept.unloadSet){deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};__flash_savedUnloadHandler=function(){};window.attachEvent("onunload",deconcept.SWFObjectUtil.cleanupSWFs);};window.attachEvent("onbeforeunload",deconcept.SWFObjectUtil.prepUnload);deconcept.unloadSet=true;}}if(!document.getElementById&&document.all){document.getElementById=function(id){return document.all[id];};}var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;

//Div Containers
var bellHD_vSWFvar='bellHD_vSWF';
var bellHD_vDIVvar='bellHD_avideoDiv';
var bellHD_pSWFvar='bellHD_pSWF';
var bellHD_pDIVvar='bellHD_aplayDiv';
var bellHD_bSWFvar='bellHD_bSWF';
var bellHD_bDIVvar='bellHD_bplayDiv';
var bellHD_cDIVvar='bellHD_acontainerDiv';
var bellVsize = 2;
var bell67825 = "http://wpc.1BE2.edgecastcdn.net/001BE2/bellhd/player/alt/";
var bellVers = "2";

// need for browser compatibility
var bellHD_v52876W=0;var bellHD_v52876H=0;var bellHD_v52876WB=0;var bellHD_v52876HB=0;

//BUT IMAGES
var bellHD_butImg='';var bellHD_butLeft='0px';var a=document;a.l_5532 = a.getElementById;var bellHD_butTop='0px';var bellHD_butStart=0;var bellHD_butLast=0;

function s52876(b,c,d){var e=a.l_5532(b).style;if(c=='pos'){e.position=d}else if(c=='bot'){e.bottom=d}else if(c=='top'){e.top=d}else if(c=='lft'){e.left=d}else if(c=='rgt'){e.right=d}else if(c=='cl'){e.className=d}else if(c=='ml'){e.marginLeft=d}}
function v52876(b,c,d){var b=a.l_5532(c).style;b.display=d}
function w63342(b,c,d){var e=a.l_5532(c);if(b==1){e.width=d}else{e.height=d}}
function bHdclVid(u){var bellClVar = a.l_5532('bellHD_avideoDiv');if(bellClVar !=null){bellClVar.onmousedown = function(){location.href=u;};}}

function bellHD_ale(a){if(typeof window.addEventListener!="undefined"){window.addEventListener("load",a,false)}else if(typeof window.attachEvent!="undefined"){window.attachEvent("onload",a)}else{if(window.onload!==null){var b=window.onload;window.onload=function(e){b(e);window[a]()}}else{window.onload=a}}}
function bellHD_upVidDim(){w63342('1',bellHD_vSWFvar,bellHD_v52876W);w63342('l',bellHD_vSWFvar,bellHD_v52876H)}
function bellHD_updBut(){w63342('1',bellHD_pSWFvar,bellHD_v52876WB);w63342('l',bellHD_pSWFvar,bellHD_v52876HB);}
function getVidB(e){ bellHD_vF=a.l_5532(e).id; bellHD_playMovie();bellHD_playButton();bellHD_playButtonA(); }
function bButBG(ab){ a.l_5532(ab).style.background='#fff url('+bell67825+'bButSmA.png)';}
function bButBGA(ab){ a.l_5532(ab).style.background='#fff url('+bell67825+'bButSm.png)';}
function belltHan(jsFile){document.write('<script type="text/javascript" src="'+bell67825+jsFile+'"></script>');}

if (bellHD_videoEnabled===0) {


if ((bellHD_butImg===undefined) || (bellHD_butImg.length<=3)) { bellHD_butImg=''; }
if ((bellHD_butLeft===undefined) || (bellHD_butLeft.length=0)) { bellHD_butLeft='0px'; }
if ((bellHD_butTop===undefined) || (bellHD_butTop.length=0)) { bellHD_butTop='0px'; }

var bell_bn=navigator.appName; 
if (bell_bn=="Microsoft Internet Explorer"){
document.write("<script type=\'text\/javascript\' event=\'FSCommand(cmmd,ar)\' for=\'bellHD_pSWF\'>bellHD_pSWF_DoFSCommand(cmmd, ar)<\/script><script type=\'text\/javascript\' event=\'FSCommand(cmmd,ar)\' for=\'bellHD_vSWF\'>bellHD_vSWF_DoFSCommand(cmmd, ar);<\/script><script type=\'text\/javascript\' event=\'FSCommand(cmmd,ar)\' for=\'bellHD_bSWF\'>bellHD_bSWF_DoFSCommand(cmmd, ar);<\/script><style type=\'text\/css\'>.bellHD_ieClass { _position:absolute !important;_top:expression(eval(document.compatMode && document.compatMode==\'CSS1Compat\') ?documentElement.scrollTop+(documentElement.clientHeight-this.clientHeight) : document.body.scrollTop+(document.body.clientHeight-this.clientHeight));}<\/style>");
}
   

function bellHD_upCl() { a.l_5532(bellHD_cDIVvar).className='bellHD_ieClass'; }

function cBellHdDiv(){var a=document.createElement("div");a.id="bhdUnDivId";a.setAttribute("align","center");a.style.margin="0px auto";a.className="bhdUnDivCl";a.innerHTML='<div id="bellHD_acontainerDiv" style="z-index:1000000"><div id="bellHD_avideoDiv"></div><div id="bellHD_bplayDiv"></div><div id="bellHD_aplayDiv"></div><img src="'+bellHD_butImg+'" id="bellHD_butImg" style="display:none; position:absolute; left:0px; top:0px;"></div>';document.body.appendChild(a);bellHD_initPlay();bellHD_upPos();bellHD_upCl()}


bellHD_ale(cBellHdDiv);

var exBellHD;function bellHD_cCook(a,b,c){if(c){var d=new Date();d.setTime(d.getTime()+(c*24*60*60*1000));exBellHD="; exBellHD="+d.toGMTString()}else exBellHD="";document.cookie=a+"="+b+exBellHD+"; path=/"}function bellHD_rCook(a){var b=a+"=";var d=document.cookie.split(';');for(var i=0;i<d.length;i++){var c=d[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(b)==0)return c.substring(b.length,c.length)}return null}function bellHD_eraseCookie(a){bellHD_cCook(a,"",-1)}

if (bellHD_rCook('bellHD_view_'+bellHD_vF)==null) { bellHD_cCook('bellHD_view_'+bellHD_vF,'1',30); }
else { var bellHD_cVar=bellHD_rCook('bellHD_view_'+bellHD_vF); }


function bellHD_stopMovie(){if(bellHD_lilbut=='yes'){bellHD_playButtonA();v52876('v_32648',bellHD_vDIVvar,'none');v52876('b_32648',bellHD_bDIVvar,'')}else{v52876('v_32648',bellHD_vDIVvar,'none');v52876('p_32648',bellHD_pDIVvar,'')}}

function bellHD_stopThisV(){bellHD_playButtonA();v52876('b_32648',bellHD_bDIVvar,'');v52876('p_32648',bellHD_pDIVvar,'none');v52876('v_32648',bellHD_vDIVvar,'none')}

function flipButton(a){if(a=='hide'){v52876('b_84623','bellHD_butImg','none')}else{v52876('b_84623','bellHD_butImg','')}}


function bellHD_pSWF_DoFSCommand(cmmd, ar) {
	if (cmmd == "playMovie") {
	bellHD_playMovie();
	}
	else if (cmmd == "stopThisV") {
	bellHD_stopThisV();
	}

if (cmmd == "sendHeightA") {
	bellHD_v52876HB=ar;
	bellHD_updBut();
}

if (cmmd == "sendWidthA") {
	bellHD_v52876WB=ar;
}


}

function bellHD_bSWF_DoFSCommand(cmmd, ar) {
	
	if (cmmd == "playMovie") {
	bellHD_playMovie();
	}
}

function bellHD_vSWF_DoFSCommand(cmmd, ar) {
	if (cmmd == "stopMovie") {
	bellHD_stopMovie();
	}

	if (cmmd == "sendWidth") {
		bellHD_v52876W=ar;
		bellHD_v52876WB=ar;
	}
	if (cmmd == "sendHeight") {
		bellHD_v52876H=ar;
		bellHD_v52876HB=ar;
		bellHD_upVidDim();
	}
	
	if (cmmd == "sendTime") {
		bellHD_sendTime(ar);
	}


}


function bellHD_playButton (){
s52876(bellHD_pDIVvar,'in','');
var bellHD_pSWF = new SWFObject(bell67825+"bellHD_video_scale.swf", bellHD_pSWFvar, bellHD_v52876WB, bellHD_v52876HB, "9", "#F8f8f8");
bellHD_pSWF.addParam("wmode", "transparent");
bellHD_pSWF.addParam("swliveconnect", "true");
bellHD_pSWF.addParam("allowscriptaccess","always");
bellHD_pSWF.addParam("menu","false");

bellHD_pSWF.addVariable('_vidName',bellHD_vF);
bellHD_pSWF.addVariable('vidMultiply',bellVsize);


bellHD_pSWF.write(bellHD_pDIVvar);

}

function bellHD_playButtonA (){
a.l_5532(bellHD_bDIVvar).innerHTML='<div id="'+bellHD_vF+'" onclick="getVidB(this.id)" style="cursor:pointer"><span style="display:block;width:122px;height:17px;background:#fff url('+bell67825+'bButSm.png) no-repeat;color:#333;margin:0 0 0 15px;border:1px solid #999;padding:7px 0 0 20px;border-width:1px 1px 0 1px;" onmouseover="bButBG(\'lLeb\')" onmouseout="bButBGA(\'lLeb\')" id="lLeb"><b style="font:11px verdana;">Play Video</b></span></div>';
}


function bellHD_initPlay() {

s52876(bellHD_pDIVvar,'ml','10px');
s52876('bellHD_butImg','top',bellHD_butTop);
s52876('bellHD_butImg','top',bellHD_butLeft);

if((bellHD_autoPlay.toLowerCase()=='yes')||(bellHD_autoPlay.toLowerCase()=='playonce')){if(((bellHD_autoPlay.toLowerCase()=='playonce')&&bellHD_cVar!='1')||(bellHD_autoPlay.toLowerCase()=='yes')){bellHD_playMovie()}}

if(bellHD_lilbut=='yes'){bellHD_playButtonA()}else{bellHD_playButton()}

}

function bellHD_upPos() {
if (bellHD_vPos=='bottomleft') {
	s52876(bellHD_cDIVvar,'pos','fixed');
	s52876(bellHD_cDIVvar,'bot','0px');
	s52876(bellHD_cDIVvar,'lft','0px');
}
else if (bellHD_vPos=='bottomright') {
	s52876(bellHD_cDIVvar,'pos','fixed');
	s52876(bellHD_cDIVvar,'bot','0px');
	s52876(bellHD_cDIVvar,'rgt','0px');
}
else if (bellHD_vPos=='topleft') {
	s52876(bellHD_cDIVvar,'pos','fixed');
	s52876(bellHD_cDIVvar,'top','0px');
	s52876(bellHD_cDIVvar,'lft','0px');
}
else if (bellHD_vPos=='topright') {
	s52876(bellHD_cDIVvar,'pos','fixed');
	s52876(bellHD_cDIVvar,'top','0px');
	s52876(bellHD_cDIVvar,'rgt','0px');
}
else if (bellHD_vPos=='inline') {
	s52876(bellHD_cDIVvar,'pos','relative');
}
}

function bellHD_playMovie() {
s52876(bellHD_vDIVvar,'in','');
var bellHD_vSWF = new SWFObject(bell67825+"bellHD_video_player.swf", bellHD_vSWFvar, bellHD_v52876W, bellHD_v52876H, "9", "#F8f8f8");
bellHD_vSWF.addParam("wmode", "transparent");
bellHD_vSWF.addParam("swliveconnect", "true");
bellHD_vSWF.addParam("allowscriptaccess","always");
bellHD_vSWF.addParam("menu","false");

//Send custom variables to flash video file
bellHD_vSWF.addVariable('_vidName',bellHD_vF);
bellHD_vSWF.addVariable('bellHD_vId',bellHD_vF);
bellHD_vSWF.addVariable('vers',bellVers);
bellHD_vSWF.addVariable('bellHD_mute',bellHD_mute);

bellHD_vSWF.write(bellHD_vDIVvar);

v52876('p_32648',bellHD_pDIVvar,'none');v52876('b_32648',bellHD_bDIVvar,'none');v52876('v_32648',bellHD_vDIVvar,'');
}

if(bellHD_butStart===undefined){bellHD_butStart=0}if(bellHD_butLast===undefined){bellHD_butLast=0}function bellHD_sendTime(a){if((a>=bellHD_butStart)&&(a<=(bellHD_butStart+bellHD_butLast))){flipButton('show')}else{flipButton('hide')}}

bellHD_videoEnabled='1';

}//endIF bellHD_videoEnabled


