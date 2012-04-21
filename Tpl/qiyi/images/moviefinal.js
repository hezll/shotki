document.title = info.title + "-正版高清视频在线观看-奇艺";
if ($E("navbar")) {
	$E("navbar").innerHTML = info.navigation
}
if (typeof info.data != "undefined" && $E("videoInfo")) {
	$E("videoInfo").innerHTML = "时长：" + info.data.playLength;
	var _s = [];
	var _str = info.data.category.split(" ");
	for (var i = 1,
	ctgLen = _str.length; i < ctgLen; i++) {
		var _c = _str[i];
		_s.push("<a href='http://www.qiyi.com/common/typelist.html?category=" + encodeURIComponent(info.pageType) + "&key=" + encodeURIComponent(_c) + "'>");
		_s.push(_c);
		_s.push("</a> ")
	}
	$E("tagInfo").innerHTML = "| 标签：" + _s.join("")
}
if ($E("flash").width >= 960) {
	if (!$E("zoomBtn")) {
		var _s = $C("span");
		_s.className = "zoom zoomOut";
		_s.id = "zoomBtn";
		$setStyle(_s, {
			display: "none"
		});
		if ($Maxthon) {
			var _ifm = $C("iframe");
			_ifm.frameborder = "0";
			_ifm.scrolling = "no";
			_ifm.id = "zoomIfm";
			$setStyle(_s, {
				"z-index": "3",
				height: "25px",
				width: "25px",
				left: "50%",
				"background-color": "#000000"
			});
			$setStyle(_ifm, {
				height: "25px",
				width: "25px",
				"z-index": "2",
				position: "absolute",
				left: "50%",
				"margin-left": "432px",
				top: "69px",
				display: "none"
			});
			$E("flashArea").insertBefore(_ifm, $E("flashbox"))
		}
		$E("flashArea").insertBefore(_s, $E("flashbox"));
		$E("zoomBtn").onclick = function() {
			if ($E("zoomBtn").className == "zoom") {
				this.className = "zoom zoomOut";
				$E("flash").width = info.data.flashWidth;
				$E("flash").height = info.data.flashHeight;
				$E("flashArea").style.height = info.data.flashHeight + "px";
				return
			}
			this.className = "zoom";
			$E("flash").width = info.data.flashW;
			$E("flash").height = info.data.flashH;
			$E("flashArea").style.height = info.data.flashH + "px"
		}
	}
	$E("flashArea").onmouseover = function() {
		if ($E("zoomIfm")) {
			$E("zoomIfm").style.display = ""
		}
		$E("zoomBtn").style.display = ""
	};
	$E("flashArea").onmouseout = function() {
		if ($E("zoomIfm")) {
			$E("zoomIfm").style.display = "none"
		}
		$E("zoomBtn").style.display = "none"
	}
}
if (!qiyi) {
	qiyi = {}
}
qiyi.Switch = {
	init: function() {
		this.initElement();
		this.initEvent()
	},
	initElement: function() {
		if (!$("#j-maskLayer-switch")) {
			var a = document.body;
			this.maskLayer = qiyi.Element.create("div");
			this.maskLayer.addClass("newDot");
			this.maskLayer.attr("id", "j-maskLayer-switch");
			this.maskDot = qiyi.Element.create("a").hide();
			this.maskDot.addClass("newDotLink");
			a.appendChild(this.maskLayer.elements()[0]);
			this.maskLayer.append(this.maskDot)
		} else {
			this.maskLayer = $("#j-maskLayer-switch");
			this.maskDot = this.maskLayer.down("a")
		}
		this.setBoxSize()
	},
	initEvent: function() {
		this.maskDot.on("click", this.dotClick.bind(this));
		this.maskLayer.on("mousemove", this.maskOnMove.bind(this));
		qiyi.Event.on(window, "resize", this.setBoxSize.bind(this));
		qiyi.Event.on(window, "load", this.setBoxSize.bind(this))
	},
	maskOnMove: function() {
		if (this.dotShow) {
			return
		} else {
			this.dotShow = true;
			this.maskDot.show();
			this.maskDot.css("z-index", 2001);
			setTimeout(function() {
				this.maskDot.hide();
				this.dotShow = false
			}.bind(this), 3000)
		}
	},
	toggle: function() {
		if (this.flag) {
			this.flag = false;
			this.close()
		} else {
			this.flag = true;
			this.open()
		}
	},
	dotClick: function() {
		this.maskShow = false;
		this.flag = false;
		this.close();
		$E("flash").openAll()
	},
	setBoxSize: function() {
		this.maskLayer.css("height", this._getBrowserHeight() + "px");
		this.maskLayer.css("width", document.body.offsetWidth + "px")
	},
	open: function() {
		this.clear();
		this.setBoxSize();
		this.maskShow = true;
		this.maskLayer.show();
		$E("flashbox").style.zIndex = "2000";
		this.anim(0.1, 1, 0.1, this.openDone.bind(this))
	},
	clear: function() {
		if (this.animTimer) {
			clearTimeout(this.animTimer)
		}
		this.maskLayer.attr("style", "")
	},
	anim: function(d, a, b, c) {
		d += b;
		this.maskLayer.css("opacity", d);
		if ((b < 0 && d <= a) || b > 0 && d >= a) {
			c()
		} else {
			this.animTimer = setTimeout(function() {
				this.anim(d, a, b, c)
			}.bind(this), 50)
		}
	},
	clearOpacity: function() {
		this.maskLayer.attr("style", "");
		this.setBoxSize()
	},
	close: function() {
		this.maskShow = false;
		this.anim(0.9, 0.1, -0.1, this.closeDone.bind(this))
	},
	openDone: function() {
		this.animTimer = null;
		this.maskOnMove()
	},
	closeDone: function() {
		this.animTimer = null;
		$E("flashbox").style.zIndex = "1";
		this.maskDot.hide();
		this.maskLayer.attr("style", "");
		this.maskLayer.hide()
	},
	_getBrowserHeight: function() {
		var b = document.documentElement.scrollHeight;
		var a = document.documentElement.clientHeight;
		return b < a ? a: b
	}
};
qiyi.Switch.init();
window.hideAll = function() {
	qiyi.Switch.toggle()
};
var Ctg = function() {
	this.ctgInfoUrl = new Interface(ReqUrl.ctgInfo),
	this.playListUrl = new Interface(ReqUrl.playList)
};
Ctg.prototype = {
	loadInfo: function(b) {
		var a = this;
		this.ctgInfoUrl.request({
			CACHE: b,
			onSuccess: function(c) {
				a.infoSuccess(c)
			},
			onError: function(c) {
				a.infoError(c)
			}
		})
	},
	loadList: function(b) {
		var a = this;
		this.playListUrl.request({
			CACHE: b,
			onSuccess: function(c) {
				a.playListSuccess(c)
			},
			onError: function(c) {
				a.playListError(c)
			}
		})
	}
};
var CtgDom = {
	info: ['<a class="imgBg1" href="#" id="infolink" title="{1}" alt="{1}">', ' <img width="120" height="160" alt="" src="{0}" />', "</a>", '<div class="twC">', '<h2 class="h2Title1">', '<strong><a href="#" title="{1}" id="imgHref">{1}</a></strong> ', '<em>共{2}集<span style="display:{11};">(更新至第{3}集)</span></em>', "</h2>", '<p class="dafen2" id="mark">', "</p>", "<p>标签：{9}</p>", "<p>主演：{5}</p>", '<p class="twW50">导演：<a href="#">{8}</a></p>', '<p class="twW50">年份：{6}年</p>', '<p class="twW50">播放：{4}次</p>', '<p class="twW50">版权方：{7}</p>', '<p class="twP">{10}', '  <a href="#" id="more">详细>></a></p>', '<p><a onfocus="this.blur();" class="btn1" href="#" id="watch">马上观看</a></p>', "</div>"].join(""),
	list: ['<a class="imgBg1" href="#" id="infolink">', '<img width="95" height="128" title="{1}" alt="{1}" src="{0}"/></a> ', '<strong><a href="#" title="{1}" id="infolink1">{1}</a></strong>', "<br/>", "播放：{4}次<br/>", '导演：<a  href="#">{8}</a><br/>', '主演：<a  href="#">{5}</a><br/>', "版权方：{7}<br/>"].join(""),
	roles: ['<a class="f14"  href="http://www.qiyi.com/common/searchresult.html?key={2}">{0}</a>', ' 饰演 <span class="f14">{1}</span>', "<br>", ].join(""),
	tabs: ["剧情介绍", "演员表"]
};
var CtgManager4Final = function(d) {
	var b = d.episodeCounts == d.currentMaxEpisode ? "none": "";
	var c = Str.divideNumber(d.episodeCounts + "");
	if ($E("prevueBtn") && d.positiveAlbumUrl != "") {
		$E("prevueBtn").parentNode.style.display = "";
		$E("prevueBtn").href = d.positiveAlbumUrl
	}
	var f = CtgDom.list.format(d.tvPictureUrl, Str.trancate(d.tvName, 32), c, d.currentMaxEpisode, Str.divideNumber(d.playCounts + ""), d.actors, d.issueTime, d.copyright, d.directors, d.tag, Str.trancate(d.tvDesc, 150, "..."), b);
	if ($IE6) {
		$E("ctgInfo").style.filter = " alpha(opacity = 0)"
	} else {
		$E("ctgInfo").style.opacity = "0"
	}
	$E("ctgInfo").innerHTML = f;
	if ($E("infolink") && (info.pageType == "电视剧" || info.pageType == "纪录片")) {
		$E("infolink").href = info.purl;
		$E("infolink1").href = info.purl
	}
	Tween($E("ctgInfo"), "opacity", 1, 0.8, "simple", {
		end: function() {
			$E("ctgInfo").style.opacity = "none";
			$E("ctgInfo").style.filter = "none"
		}
	});
	if ($E("listWrapper")) {
		if (typeof tab1 == "undefined") {
			window.tab1 = new Tabs($E("listWrapper"), "list")
		}
		tab1.newTab(CtgDom.tabs[0]);
		var e = d.tvDesc;
		var a = [];
		a.push('<p class="zhuanjiP2" id="desc">', e, "</p>");
		if (typeof(info.pageType) != "undefined" && d.tvDesc.getLen() > 160) {
			e = Str.trancate(d.tvDesc, 160);
			info.data.desc = d.tvDesc;
			a.push('<a id="open" href="#" class="moreC" onclick="return false;">显示全部</a>');
			tab1.setContent(a.join(""));
			$E("desc").innerHTML = Str.trancate(info.data.desc, 160);
			$E("open").onclick = function() {
				if (this.clicked) {
					$E("desc").innerHTML = Str.trancate(info.data.desc, 160);
					this.clicked = false;
					this.innerHTML = "显示全部"
				} else {
					$E("desc").innerHTML = info.data.desc;
					this.clicked = true;
					this.innerHTML = "收起"
				}
				return false
			}
		} else {
			tab1.setContent(a.join(""))
		}
		tab1.newTab(CtgDom.tabs[1]);
		tab1.setContent("<p class='pCon1 yanyuanbiao'>" + d.roles + "</p>")
	}
};
var CtgFactory = {
	create: function(a) {
		var b = new Ctg();
		var c = {
			albumId: info.albumId
		};
		b.infoSuccess = function(n) {
			var v = n.categoryKeywords.split(" ");
			var q = [];
			var o = "电视剧";
			if (typeof info.pageType != "undefined") {
				o = info.pageType
			}
			for (var m = 1,
			t = v.length; m < t; m++) {
				q.push("<a href='http://www.qiyi.com/common/typelist.html?category=" + encodeURIComponent(o) + "&key=" + encodeURIComponent(v[m]) + "'>");
				q.push(v[m]);
				q.push("</a>  ")
			}
			var u = [];
			for (var m = 0,
			p = n.mainActors.length; m < p; m++) {
				var l = n.mainActors[m];
				var g = n.mainActorRoles[m];
				u.push(CtgDom.roles.format(l, g, encodeURIComponent(l)))
			}
			var e = [];
			for (var m = 0,
			p = n.actors.length; m < p; m++) {
				var l = n.actors[m];
				e.push('<a class="f12" href="http://www.qiyi.com/common/searchresult.html?key=' + encodeURIComponent(l) + '">');
				e.push(l);
				e.push("</a> ");
				var g = n.actorRoles[m];
				u.push(CtgDom.roles.format(l, g, encodeURIComponent(l), encodeURIComponent(g)))
			}
			n.actress = e.join("");
			n.roles = u.join("");
			var s = [];
			for (var h = 0,
			d = n.mainActorsFinalPage.length; h < d; h++) {
				s.push("<a href='http://www.qiyi.com/common/searchresult.html?key=" + encodeURIComponent(n.mainActorsFinalPage[h]) + "'>");
				s.push(n.mainActorsFinalPage[h]);
				s.push("</a>  ")
			}
			info.director = n.directors;
			info.actor = n.actors;
			info.mainActor = n.mainActors;
			var r = [];
			for (var f = 0; f < n.directors.length; f++) {
				r.push("<a href='http://www.qiyi.com/common/searchresult.html?key=" + encodeURIComponent(n.directors[f]) + "'>");
				r.push(n.directors[f]);
				r.push("</a> ")
			}
			n.directors = r.join("");
			n.actors = s.join("");
			n.tag = q.join("");
			if (a == "final") {
				return new CtgManager4Final(n)
			}
			if (a == "documentaryFinal") {
				return new DocumentaryManagerFinal(n)
			}
			if (a == "documentary") {
				return new DocumentaryManager(n)
			}
			return new CtgManager(n)
		};
		b.infoError = function(d) {
			alert(d.code)
		};
		b.loadInfo(c)
	}
};
CtgFactory.create("final");
var PlayListDom = {
	albumpage: ["<li>", '<a class="imgBg1" href="{1}">', '<img class="{4}" width="115" height="77" alt="{3}" title="{3}" src="{0}"/>', "</a>", '<a href="{1}">{2}</a>', "</li>"].join(""),
	albumtotalpage: ['<p class="zhuanjiP" id="listPager">', "共{0}集： {1}</p>"].join(""),
	finaltotalpage: ["<strong>共{0}集：</strong>"].join(""),
	finalpagelist: ['<a onfocus="this.blur();" href="{0}" class="{2}">', "{1}", "</a>"].join(""),
	Prevue: ['<li class="selected">', '<a class="imgBg1" href="{1}">', '<img width="115" height="75" alt="" src="{0}">{3}', "</a>", "</li>"].join(""),
	Feature: ['<li class="selected">', '<a class="imgBg1" href="{1}">', '<img width="115" height="75" alt="" src="{0}" />{3}', "</a>", "</li>"].join(""),
	ListenUp: ['<li class="selected">', '<a class="imgBg1" href="{1}">', '<img  width="115" height="75" alt="" src="{0}" />{3}', "</a>", "</li>"].join("")
};
var SearchResultDom = {
	video: ['<div class="tw twBg1{20}"> <a class="imgBg1" href="{0}"><img {18} alt="{21}" title="{21}" src="{1}"></a>', '<div class="twC">', '<h2 class="h2Title1"><a href="{0}">{2}</a>{19}</h2>', '<p class="dafen2"><span class="dafenBg2"><span class="fenshu2" id="dafen1" style="width:{14}px"></span></span><span class="fRed" id="fenshu"><strong>{12}</strong>{13}</span> <span class="fBlack">分</span>（{3}人评价）</p>', '<p class="twW50">标签：{8}</p>', '<p class="twW50">播放：{11}次</p>', '<p class="twW50">导演：{7}</p>', '<p class="twW50">上映时间：{5}年</p>', '<p class="twW50">主演：{4}</p>', '<p class="twW50">版权方：{15}</p>', '<p class="twP">{10}</p>', "{17}", "</div></div>"].join(""),
	documentary: ['<div class="tw twBg1{21}"> <a class="imgBg1" href="{0}"><img {18} alt="{22}" title="{22}" src="{1}"></a>', '<div class="twC">', '<h2 class="h2Title1"><a href="{0}">{2}</a></h2>', '<p class="dafen2"><span class="dafenBg2"><span class="fenshu2" id="dafen1" style="width:{14}px"></span></span><span class="fRed" id="fenshu"><strong>{12}</strong>{13}</span> <span class="fBlack">分</span>（{3}人评价）</p>', '<p class="twW50">播放：{11}次</p>', '<p class="twW50">标签：{8}</p>', '<p class="twW50">来源：{20}</p>', '<p class="twW50">版权方：{15}</p>', '<p class="twP">{10}</p>', "{17}", "</div></div>"].join(""),
	variety: ['<div class="tw twBg1"> <a class="imgBg1" href="{0}"><img {18} alt="{22}" title="{22}" src="{1}"></a>', '<div class="twC">', '<h2 class="h2Title1"><a href="{0}">{2}</a></h2>', '<p class="dafen2"><span class="dafenBg2"><span class="fenshu2" id="dafen1" style="width:{14}px"></span></span><span class="fRed" id="fenshu"><strong>{12}</strong>{13}</span> <span class="fBlack">分</span>（{3}人评价）</p>', '<p class="twW50">主持：{4}</p>', '<p class="twW50">播放：{11}次</p>', '<p class="twW50">嘉宾：{21}</p>', '<p class="twW50">来源：{20}</p>', '<p class="twW50">期数：{5}期</p>', '<p class="twW50">版权方：{15}</p>', '<p class="twP">{10}</p>', "{17}", "</div></div>"].join(""),
	relevance: ['<li><a href="{0}" class="imgBg1">', '<img src="{1}" width="95" height="126" alt="{2}" title="{2}" /> {2}</a></li>'].join(""),
	relevance_variety: ['<li><a href="{0}" class="imgBg1">', '<img src="{1}" width="95" height="126" alt="{2}" />', '<span class="imgBg1Bg"></span>', '<span class="imgBg1C">{3}期</span></a>', '<a href="{0}" >{2}</a></li>'].join(""),
	nullResult: ["<li>", '<a class="imgBg1" href="{0}">', '<img width="95" height="127" title="{2}" alt="{2}" src="{1}"></a>', '<strong><a href="{0}" title="{2}" alt="{2}">{2}</a>', "</strong></li>"].join("")
};
var SearchManager = function() {
	this.channelName = [{
		name: "movie",
		cname: "电影"
	},
	{
		name: "tv",
		cname: "电视"
	},
	{
		name: "doc",
		cname: "纪录片"
	},
	{
		name: "variety",
		cname: "综艺"
	}]
};
SearchManager.prototype.renderNull = function(f) {
	var a = this;
	$E("m1").style.display = "none";
	$E("paixu").style.display = "none";
	$E("resultnull").style.display = "";
	$E("topInfo2").innerHTML = "";
	$E("nullkey").innerHTML = $E("suggestText").value;
	this._null = getElementByClz($E("resultnull"), "div", "m485 paddingBt20")[0];
	var b = getElementByClz($E("resultnull"), "div", "paixu")[0];
	var e = document.createDocumentFragment();
	if (b.getElementsByTagName("a").length < 1) {
		for (var d = 0; d < this.channelName.length; d++) {
			var c = $C("a");
			c.href = "#";
			c.i = d;
			c.id = "mf" + d;
			c.innerHTML = this.channelName[d].cname;
			c.className = d == f ? "selected": "";
			e.appendChild(c);
			if (d == 0) {
				a.showCurrentChannel(0);
				this.active = c
			}
			c.onfocus = function() {
				this.blur()
			};
			c.onclick = function() {
				if ($E("fff" + this.i) && $E("fff" + this.i).style.display != "none") {
					return
				}
				a.showCurrentChannel(this.i);
				this.className = "selected";
				$E("fff" + a.active.i).style.display = "none";
				a.active.className = "";
				a.active = this;
				return false
			}
		}
		b.appendChild(e)
	}
};
SearchManager.prototype.showCurrentChannel = function(f) {
	if (!$E("fff" + f)) {
		var e = this.channelData[this.channelName[f].name];
		var a = $C("ul");
		a.className = "ulTw r4";
		a.id = "fff" + f;
		this._null.appendChild(a);
		var d = [];
		for (var c = 0; c < Math.min(4, e.length); c++) {
			var b = e[c];
			d.push(SearchResultDom.nullResult.format((typeof(b.tv_url) == "undefined") ? b.tv_purl: b.tv_url, b.tv_big_pic, b.tv_name))
		}
		a.innerHTML = d.join("")
	} else {
		$E("fff" + f).style.display = ""
	}
};
SearchManager.prototype.search = function(h, g, d, a) {
	var f = this;
	if (g == null) {
		g = 0
	}
	if (h == null || h == "") {
		h = ""
	}
	if (d == null) {
		d = "1"
	}
	if (a == null || a == "") {
		a = " "
	}
	var j = new Search();
	var e = 10;
	h = h.replace(/[^a-z0-9A-Z\u4e00-\u9fa5]/g, " ");
	var c = "search/" + encodeURIComponent(h).replace(/\%/g, "_") + "/" + g + "/" + d + "/" + encodeURIComponent(a).replace(/\%/g, "_") + "/" + e + "/";
	var b = {
		url: c
	};
	j.searchSuccess = function(Q) {
		try {
			if (!Q.list) {
				f.channelData = {
					movie: phb_dianying_day_10.videos || [],
					tv: phb_dianshiju_day_10.videos || [],
					doc: phb_jilupian_day_10.videos || [],
					variety: phb_zongyi_day_10.videos || []
				};
				f.renderNull(0);
				return
			}
		} catch(al) {
			$trace(al.message)
		}
		var af = Q.weight;
		if ($E("suggestText").value != $E("oldKey").value) {
			var Z = [];
			Z.push('<span class="f14">搜索<span class="fRed">&ldquo;' + $E("suggestText").value + '&rdquo;</span>相关视频，共找到<span class="fRed">' + Q.sumCounts + "</span>个</span><br />");
			Z.push("缩小范围：");
			for (var ah = 0; ah < af.length; ah++) {
				var W = af[ah]["category"];
				Z.push("<a onclick=\"categoryClick('" + W + '\')" href="#">' + W + '</a><span class="fRed">(' + af[ah]["count"] + ")</span> ")
			}
			$E("topInfo2").innerHTML = Z.join("");
			$E("oldKey").value = $E("suggestText").value
		} else {
			var v = $E("topInfo2").getElementsByTagName("a");
			for (var ah = 0; ah < v.length; ah++) {
				var ak = v[ah];
				if (ak.innerHTML == $E("category").value) {
					ak.className = "aSelected"
				} else {
					ak.className = ""
				}
			}
		}
		var R = [];
		var K = Q.list;
		for (var ah = 0,
		q = K.length; ah < q; ah++) {
			var s = K[ah]["VrsCredits.CreditsName"].trim().split(";");
			var A = [];
			for (var ag = 0; ag < s.length; ag++) {
				if (s[ag] == "") {
					continue
				}
				A.push('<a href="http://www.qiyi.com/common/searchresult.html?key=' + encodeURIComponent(s[ag].replace(/<.*?>/g, "")) + '">' + s[ag] + "</a> ")
			}
			var C = [];
			if (K[ah]["albumActor"]) {
				var s = K[ah]["albumActor"].trim().split(";");
				for (var ag = 0; ag < s.length; ag++) {
					if (s[ag] == "") {
						continue
					}
					C.push('<a href="http://www.qiyi.com/common/searchresult.html?key=' + encodeURIComponent(s[ag].replace(/<.*?>/g, "")) + '">' + s[ag] + "</a> ")
				}
			}
			var s = K[ah]["albumDirector"].trim().split(";");
			var o = [];
			for (var ag = 0; ag < s.length; ag++) {
				if (s[ag] == "") {
					continue
				}
				o.push('<a href="http://www.qiyi.com/common/searchresult.html?key=' + encodeURIComponent(s[ag].replace(/<.*?>/g, "")) + '">' + s[ag] + "</a> ")
			}
			var z = "";
			var s = K[ah]["childMovieUrl"].trim().split(" ");
			var u = "";
			var r = "";
			var S = "";
			var ap = "";
			var ae = "";
			if (s.length > 1) {
				S = '<p class="videoList paddingT5">';
				if (s.length > 30) {
					r = '<p class="twfy">分集：';
					var B = 30;
					var M = 1;
					var E = 0;
					var an = s[s.length - 1].split(",")[0];
					var H = Math.round(an / (B + 0) + 0.49999);
					var y = 1;
					var O = "";
					for (var P = 1; P <= H; P++) {
						E += B;
						if (E > an) {
							E = an
						}
						var ai = "class=''";
						if (P == 1) {
							ai = "class='selected'"
						} else {
							ai = "class=''";
							O = "| "
						}
						r += O + '<a href="#" ' + ai + ' onclick="javascript:selectChildMovie(' + H + "," + ah + "," + P + ');return false;" onfocus="this.blur();" id="fj_' + ah + "_" + P + '">' + M + "-" + E + "</a> ";
						var U = "style='display:none'";
						if (P == 1) {
							U = ""
						} else {
							U = "style='display:none'"
						}
						S += '<span id="childspan_' + ah + "_" + P + '" ' + U + ">";
						for (var ag = y; ag <= E; ag++) {
							var aj = false;
							for (var ad = 0; ad < s.length; ad++) {
								var w = s[ad].split(",");
								if (ag == w[0]) {
									aj = true;
									break
								}
							}
							if (aj) {
								S += '<a href="' + w[1] + '">' + w[0] + "</a> "
							} else {
								S += '<a href="#">暂无</a> '
							}
						}
						y = E + 1;
						M = E + 1;
						S += "</span>"
					}
					r += "</p>"
				} else {
					var F = s[s.length - 1].split(",")[0];
					for (var ag = 1; ag <= F; ag++) {
						var aj = false;
						for (var ad = 0; ad < s.length; ad++) {
							var w = s[ad].split(",");
							if (ag == w[0]) {
								aj = true;
								break
							}
						}
						if (aj) {
							S += '<a href="' + w[1] + '">' + w[0] + "</a> "
						} else {
							S += '<a href="#">暂无</a> '
						}
						if (ag == 0) {
							ap = w[1]
						}
					}
					if (ap == "") {
						ap = K[ah]["TvApplication.purl"]
					}
					u = '<p><a onfocus="this.blur();" class="btn1" href="' + ap + '">马上观看</a></p>'
				}
				S += "</p>";
				ae = "  <em>共" + s[s.length - 1].split(",")[0] + "集</em>"
			} else {
				u = '<p><a onfocus="this.blur();" class="btn1" href="' + K[ah]["TvApplication.purl"] + '">马上观看</a></p>'
			}
			var k = u + r + S;
			var s = K[ah]["threeCategory"].trim().split(" ");
			var ac = [];
			for (var ag = 0; ag < s.length; ag++) {
				if (K[ah]["category"] == s[ag]) {
					continue
				}
				ac.push('<a href="http://www.qiyi.com/common/typelist.html?category=' + K[ah]["category"] + "&key=" + encodeURIComponent(s[ag]) + '">' + s[ag] + "</a> ");
				if (ag == 4) {
					break
				}
			}
			var l = K[ah]["VrsVideoScore.score"];
			var L = l.split(".");
			var ao;
			var am;
			var J;
			if (L.length > 1) {
				ao = L[0];
				am = "." + (L[1]).charAt(0);
				J = l / 10 * 86
			} else {
				ao = l;
				am = "";
				J = l / 10 * 86
			}
			if (am == 0) {
				am = ""
			}
			var V = 'height="160" width="120"';
			if (K[ah]["TvApplication.purl"] && K[ah]["video_doc_type"] == "2") {
				V = 'height="80" width="120"'
			}
			var aa = "";
			if (K[ah]["VrsVideoTv.tvDesc"] && K[ah]["VrsVideoTv.tvDesc"] != "") {
				aa = Str.trancate(K[ah]["VrsVideoTv.tvDesc"], 150) + "<a href=" + K[ah]["TvApplication.purl"] + ">详细>></a>"
			}
			var X = K[ah]["category"];
			var D = K[ah]["video_doc_type"];
			var G = "";
			if (D == 1) {
				if (X == "电视剧" || X == "纪录片") {
					G = " zhuanjiHigh"
				}
			}
			var I = '<a href="http://www.qiyi.com/common/searchresult.html?key=' + encodeURIComponent(K[ah]["VrsFieldValue.fieldValue"].replace(/<.*?>/g, "")) + '">' + K[ah]["VrsFieldValue.fieldValue"] + "</a> ";
			var N = K[ah]["VrsVideoTv.tvName"].replace(/<.*?>/g, "");
			if (X == "电影" || X == "电视剧") {
				R.push(SearchResultDom.video.format(K[ah]["TvApplication.purl"], K[ah]["vrsVideoTv.TvBigPic"], K[ah]["VrsVideoTv.tvName"], K[ah]["VrsVideoScore.voters"], A.join(""), K[ah]["VrsVideotv.tvYear"], I, o.join(""), ac.join(""), "", aa, K[ah]["AlbumPlayCount"], ao, am, J, K[ah]["VrsVideoCopyright.TvCompanyName"], ap, k, V, ae, G, N))
			} else {
				if (X == "纪录片") {
					R.push(SearchResultDom.documentary.format(K[ah]["TvApplication.purl"], K[ah]["vrsVideoTv.TvBigPic"], K[ah]["VrsVideoTv.tvName"], K[ah]["VrsVideoScore.voters"], A.join(""), K[ah]["VrsVideotv.tvYear"], I, o.join(""), ac.join(""), "", aa, K[ah]["AlbumPlayCount"], ao, am, J, K[ah]["VrsVideoCopyright.TvCompanyName"], ap, k, V, ae, I, G, N))
				} else {
					if (X == "综艺") {
						R.push(SearchResultDom.variety.format(K[ah]["TvApplication.purl"], K[ah]["vrsVideoTv.TvBigPic"], K[ah]["VrsVideoTv.tvName"], K[ah]["VrsVideoScore.voters"], A.join(""), K[ah]["VrsVideotv.tvYear"], I, o.join(""), ac.join(""), "", aa, K[ah]["AlbumPlayCount"], ao, am, J, K[ah]["VrsVideoCopyright.TvCompanyName"], ap, k, V, ae, I, C.join(""), N))
					}
				}
			}
		}
		var Y = Q.sumPages;
		if (Y > 1) {
			var ab = Q.cur;
			var ag = ab;
			var m = "";
			for (var ah = 1; ah < 5; ah++) {
				ag--;
				if (ag == 0) {
					break
				}
				if (ag > Y) {
					break
				}
				m = " <a href='#' onclick='curClick(" + ag + ")'>" + ag + "</a>" + m
			}
			m += ' <span class="curPage">' + ab + "</span>";
			ag = ab;
			for (var ah = 1; ah <= 5; ah++) {
				ag++;
				if (ag == 0) {
					break
				}
				if (ag > Y) {
					break
				}
				m += " <a href='#' onclick='curClick(" + ag + ")'>" + ag + "</a>"
			}
			if ((Y - 3) > (ab + 5)) {
				m += "..."
			}
			for (var ah = 2; ah >= 0; ah--) {
				if ((Y - ah) <= (ab + 5)) {
					break
				}
				m += " <a href='#' onclick='curClick(" + (Y - ah) + ")'>" + (Y - ah) + "</a>"
			}
			if (ab > 5) {
				m = " <a href='#' onclick='curClick(" + 1 + ")'>" + 1 + "</a>..." + m
			}
			if (ab != 1) {
				m = " <a class='a1' href='#' onclick='curClick(" + Q.prePage + ")'>上一页</a>" + m
			}
			if (ab != Q.sumPages * 1) {
				m += " <a class='a1' href='#' onclick='curClick(" + Q.nextPage + ")'>下一页</a>"
			}
			var T = '<div class="page">' + m + "</div>";
			R.push(T)
		}
		$E("m1").style.display = "block";
		$E("paixu").style.display = "block";
		$E("resultnull").style.display = "none";
		$E("m1").innerHTML = R.join("")
	};
	j.searchError = function(k) {
		$E("m1").style.display = "none";
		$E("paixu").style.display = "none";
		$E("resultnull").style.display = "";
		$E("nullkey").innerHTML = $E("suggestText").value
	};
	j.search(b)
};
SearchManager.prototype.relevance = function(f, g, a, e, d, h) {
	if (f == null) {
		f = ""
	}
	if (d == null) {
		d = "1"
	}
	if (h == null) {
		h = 10
	}
	if (e == null) {
		e = 0
	}
	if (a == null || a == "") {
		a = " "
	}
	g = g.replace(/^\w/g, " ");
	g = g.replace(a, "");
	while (encodeURIComponent(trim(g)).replace(/\%/g, "_").length > 180) {
		g = filter(g)
	}
	var j = new Search();
	var c = "searchRelevance/" + f + "/" + encodeURIComponent(g).replace(/\%/g, "_") + "/" + encodeURIComponent(a).replace(/\%/g, "_") + "/" + e + "/" + d + "/" + h + "/";
	var b = {
		url: c
	};
	j.relevanceSuccess = function(l) {
		$E("ul01").innerHTML = "";
		if (l == null || l.length <= 0) {
			$E("ul01").innerHTML = "暂无相关内容！";
			return
		}
		var o = [];
		for (var k = 0,
		m = l.length; k < m; k++) {
			var n = l[k]["category"];
			if (n == "综艺") {
				o.push(SearchResultDom.relevance_variety.format(l[k]["TvApplication.purl"], l[k]["vrsVideoTv.TvBigPic"], Str.trancate(l[k]["VrsVideoTv.tvName"], 26), l[k]["VrsVideotv.tvYear"]))
			} else {
				o.push(SearchResultDom.relevance.format(l[k]["TvApplication.purl"], l[k]["vrsVideoTv.TvBigPic"], Str.trancate(l[k]["VrsVideoTv.tvName"], 26)))
			}
		}
		$E("ul01").innerHTML = o.join("")
	};
	j.relevanceError = function(k) {
		alert(k.code)
	};
	j.relevance(b)
};
function selectChildMovie(d, b, c) {
	for (var a = 1; a <= d; a++) {
		$E("fj_" + b + "_" + a).className = "none"
	}
	$E("fj_" + b + "_" + c).className = "selected";
	for (var a = 1; a <= d; a++) {
		$E("childspan_" + b + "_" + a).style.display = "none"
	}
	$E("childspan_" + b + "_" + c).style.display = "block"
}
function filter(a) {
	var d = a.split(" ");
	var c = "";
	for (var b = 0; b < d.length; b++) {
		if (b == (d.length - 1)) {
			break
		}
		c += d[b] + " "
	}
	return trim(c)
}
function trim(a) {
	return a.replace(/^(\s|\u00A0)+|(\s|\u00A0)+$/g, "")
}
var sManager = new SearchManager();
sManager.relevance("1", info.data.category, info.data.category.split(" ")[0], info.albumId, "1", 10);
function hiddenRelevanceCategory(a) {
	if ($E("t01")) {
		$E("t01").className = ""
	}
	if ($E("t02")) {
		$E("t02").className = ""
	}
	if ($E("t03")) {
		$E("t03").className = ""
	}
	$E(a).className = "selected"
}
$addEvent("t01",
function() {
	hiddenRelevanceCategory("t01");
	sManager.relevance("1", info.data.category, info.data.category.split(" ")[0], info.albumId, "1", 10)
},
"click");
if ($E("t02")) {
	$addEvent("t02",
	function() {
		hiddenRelevanceCategory("t02");
		var b = [];
		for (var a in info.director) {
			b.push(info.director[a] + " ")
		}
		sManager.relevance("2", b.join(""), info.data.category.split(" ")[0], info.albumId, "1", 10)
	},
	"click")
}
if ($E("t03")) {
	$addEvent("t03",
	function() {
		hiddenRelevanceCategory("t03");
		var b = [];
		if (info.data.category.split(" ")[0] == "综艺") {
			if (info.actor == null || info.actor.length <= 0) {
				$E("ul01").innerHTML = "暂无相关内容！";
				return
			}
			for (var a in info.actor) {
				b.push(info.actor[a] + " ")
			}
		} else {
			if (info.mainActor == null || info.mainActor.length <= 0) {
				$E("ul01").innerHTML = "暂无相关内容！";
				return
			}
			for (var a in info.mainActor) {
				b.push(info.mainActor[a] + " ")
			}
		}
		sManager.relevance("3", b.join(""), info.data.category.split(" ")[0], info.albumId, "1", 10)
	},
	"click")
}
var Mark = function() {
	this.markUrl = new Interface(ReqUrl.mark);
	this.initUrl = new Interface(ReqUrl.initMark)
};
Mark.prototype = {
	sendMark: function(b) {
		var a = this;
		this.markUrl.request({
			CACHE: b,
			onSuccess: function(c) {
				a.sendSuccess(c)
			},
			onError: function(c) {
				a.sendError(c)
			}
		})
	},
	initMark: function(b) {
		var a = this;
		this.initUrl.request({
			CACHE: b,
			onSuccess: function(c) {
				a.initSuccess(c)
			},
			onError: function(c) {
				a.initError(c)
			}
		})
	}
};
var MarkDom = {
	init: ['<span class="dafenBg2" style="display:{4}">', '<span id="dafen1" class="fenshu2" style="width:{3}px;">', "</span></span> ", '<span id="fenshu" class="fRed">', "<strong>{0}</strong>{1} ", "</span> ", '<span class="fBlack">分</span>', "（{2}人评价）"].join(""),
	send: ['<span class="dafenBg">', '<span id="fenshuPic" class="fenshuPic" style="width:{3}"></span>', '<span id="dafen">', '<a href="javascript:void(0);"></a>', '<a href="javascript:void(0);"></a>', '<a href="javascript:void(0);"></a>', '<a href="javascript:void(0);"></a>', '<a href="javascript:void(0);"></a>', "</span>", "</span>", '<span id="fenshuShow" class="fRed">', '<strong>{0}</strong>{1}<span class="fBlack">分</span></span>', '<p id="dafenInfo" class="dafenInfo">（{2}人评价过此片）</p>'].join("")
};
var MarkFactory = {
	create: function(a) {
		var c = new Mark();
		var b = {
			albumId: info.albumId
		};
		c.initSuccess = function(d) {
			var e = MarkFactory.caculate(d);
			switch (a) {
			case "send":
				return new SendMark(e);
				break;
			case "init":
			default:
				return new InitMark(e);
				break
			}
		};
		c.initError = function(d) {
			alert(d.code)
		};
		c.initMark(b)
	},
	caculate: function(b) {
		var d = {
			round: "0",
			dot: "",
			voters: "0",
			star: 0
		};
		var e = b.score + "";
		var c = e.split(".");
		var a = parseInt(c[0]);
		d.round = a > 10 ? 10 : a;
		if (c.length > 1) {
			d.dot = d.round > 10 ? "": "." + (c[1]).charAt(0)
		}
		d.voters = b.voters;
		d.star = e / 2;
		return d
	}
};
var SendMark = function(g) {
	var b = this;
	var h = new Mark();
	$E("mark").innerHTML = MarkDom.send.format(g.round, g.dot, g.voters, Math.floor(g.star * 28) + "px", "");
	this._atags = getElementByClz($E("dafen"), "a", "");
	this._voters = parseInt(g.voters);
	var f = $E("fenshuPic").style.width;
	var a = ["很差！", "一般！", "不错！", "很好！", "完美！"];
	if (Cookie.getCookie("Q00300") && Cookie.getCookie("Q00300") == info.albumId) {
		this.removeSend();
		$E("dafen").onmouseout = function() {
			$E("dafenInfo").innerHTML = "（" + (b._voters) + "人评价过此片）";
			$E("dafenInfo").className = "dafenInfo"
		};
		return
	}
	for (var e = 0,
	c = this._atags.length; e < c; e++) {
		var d = this._atags[e];
		d.index = e;
		d.onmouseover = function(j) {
			j = j || window.event;
			var l = j.srcElement || j.target;
			var k = (l.index + 1) * 28;
			b.mark(l, k, h);
			$E("fenshuPic").style.width = k + "px";
			$E("dafenInfo").className = "dafenInfo2";
			$E("dafenInfo").innerHTML = a[l.index]
		}
	}
	$E("dafen").onmouseout = function() {

		$E("dafenInfo").className = "dafenInfo";
		$E("dafenInfo").innerHTML = "（" + b._voters + "人评价过此片）";
		$E("fenshuPic").style.width = f
	}
};
SendMark.prototype.mark = function(d, c, a) {
	var e = this;
	a.sendSuccess = function(g) {
		Cookie.setCookie("Q00300", info.albumId, 100, "/", "qiyi.com");
		var j = {
			round: 0,
			dot: "",
			voter: 0
		};
		var h = (g.score + "").split(".");
		var f = parseInt(h[0]);
		j.round = f > 10 ? 10 : f;
		if (h.length > 1) {
			j.dot = j.round > 10 ? "": "." + (h[1]).charAt(0)
		}
		j.star = Math.round(f / 2 * 28);
		$E("fenshuPic").style.width = j.star + "px";
		$E("fenshuShow").innerHTML = "<strong>" + j.round + "</strong>" + j.dot + "<span class='fBlack'>分</span>";
		$E("dafenInfo").innerHTML = "感谢您的评价，谢谢！";
		$E("dafenInfo").className = "dafenInfo2";
		$E("dafen").onmouseout = function() {
			$E("dafenInfo").innerHTML = "（" + (e._voters + 1) + "人评价过此片）";
			$E("dafenInfo").className = "dafenInfo"
		};
		e.removeSend()
	};
	var b = {
		vid: info.videoId,
		albumId: info.albumId,
		score: c / 28 * 2
	};
	d.onclick = function() {
		if (Cookie.getCookie("Q00300") && Cookie.getCookie("Q00300") == info.albumId) {
			$E("dafenInfo").innerHTML = "您已评价过此片了，谢谢！";
			$E("dafenInfo").className = "dafenInfo2";
			return
		}
		a.sendMark(b)
	}
};
SendMark.prototype.removeSend = function() {
	for (var c = 0,
	a = this._atags.length; c < a; c++) {
		var b = this._atags[c];
		b.index = c;
		b.onmouseover = null;
		b.onclick = function() {
			$E("dafenInfo").innerHTML = "您已评价过此片了，谢谢！";
			$E("dafenInfo").className = "dafenInfo2"
		}
	}
};
MarkFactory.create("send");
var PlaylistFactory = {
	create: function(b, a) {
		var c = new Ctg();
		var d = {
			pid: info.pid,
			ptype: info.ptype,
			subjectId: info.albumId
		};
		c.playListSuccess = function(e) {
			switch (b) {
			case "final":
				return new PlayList4Final(e);
				break;
			case "documentary":
				return new DocumentaryFinal(e);
			case "playlist":
			default:
				return new PlayList(e, a);
				break
			}
		};
		c.playListError = function(e) {
			alert(e.code + " 数据加载失败！")
		};
		c.loadList(d)
	}
};
var PlayList4Final = function(c) {
	if (typeof c == "undefined") {
		$E("aboutWrapper").innerHTML = "数据加载失败！";
		return
	}
	if (($E("videoList") && $E("videoDesc"))) {
		info.playlist = c["1"];
		if (info.playlist.length > 16) {
			$E("openAll").parentNode.style.display = ""
		}
		this.buildList(c["1"])
	}
	var d = c["2"];
	var a = c["3"];
	var b = c["4"];
	if ($E("aboutWrapper")) {
		if (d.length > 0 || a.length > 0 || b.length > 0) {
			$E("aboutWrapper").style.display = "";
			this.tab = new Tabs($E("aboutWrapper"), "about");
			this.tab.newTab("相关：", "", "", true, "info");
			this.render(d, "Prevue", "预告片");
			this.render(a, "ListenUp", "片花");
			this.render(b, "Feature", "花絮")
		} else {
			$E("aboutWrapper").style.display = "none"
		}
	}
};
PlayList4Final.prototype.buildList = function(d) {
	var f = [],
	b = d.length;
	window.vid = 0;
	f.push(PlayListDom.finaltotalpage.format(b));
	for (var c = 0; c < b; c++) {
		var a = d[c];
		var e = "";
		if (a.videoId == info.videoId) {
			window.vid = c;
			e = "curPage"
		}
		f.push(PlayListDom.finalpagelist.format(a.videoUrl, a.videoOrder, e));
		$E("videoList1").innerHTML = f.join("")
	}
	_nextVideo(vid, "", "", "", d)
};
PlayList4Final.prototype.render = function(g, e, a) {
	if (g.length < 1) {
		return
	}
	var f = ['<ul class="ulTw r4_">'];
	for (var d = 0,
	c = g.length; d < c; d++) {
		var b = g[d];
		f.push(PlayListDom[e].format(b.videoImage, b.videoUrl, b.videoOrder, b.videoName))
	}
	f.push("</ul>");
	this.tab.newTab(a);
	this.tab.setContent(f.join(""))
};
window.nextVideo = function(a, e, d, c, b) {
	if (qiyi && qiyi.PlayHistory) {
		qiyi.PlayHistory.next(a, e, d, c, b)
	}
	_nextVideo(a, e, d, c, b)
};
_nextVideo = function(a, v, h, s, w) {
	if (v != "") {
		document.title = v + "-正版高清视频在线观看-奇艺";
		window.vid++;
		var b = $E("videoList1").getElementsByTagName("a");
		var m = b.length;
		for (var o = 0; o < m; o++) {
			var f = b[o];
			if (f.className == "curPage") {
				f.className = "";
				break
			}
		}
		b[vid].className = "curPage"
	}
	info.playlist = info.playlist || w;
	var u = [],
	e = 0,
	c = info.playlist.length > 16 ? 10 : 16,
	g = 10,
	j = info.playlist.length;
	u.push(PlayListDom.finaltotalpage.format(j, ""));
	if (j > 16 && j - 1 > g && vid + 1 >= g) {
		var d = info.playlist[0];
		u.push(PlayListDom.finalpagelist.format(d.videoUrl, d.videoOrder, ""));
		u.push("<span class='spanList'>...</span>");
		e = vid - 2;
		c = vid - 2 + g
	}
	if (j > 16 && j - 1 > g && vid > j - g) {
		e = j - g - 1;
		c = j
	}
	for (var p = e; p < Math.min(c, j); p++) {
		var d = info.playlist[p];
		var l = (p == vid) ? "curPage": "";
		u.push(PlayListDom.finalpagelist.format(d.videoUrl, d.videoOrder, l))
	}
	if (j > 16 && j > g && vid <= j - g) {
		u.push("<span class='spanList'>...</span>");
		u.push(PlayListDom.finalpagelist.format(info.playlist[j - 1].videoUrl, info.playlist[j - 1].videoOrder, ""))
	}
	$E("videoList").innerHTML = u.join("");
	if (v != "") {
		$E("navbar").innerHTML = v
	}
	if (h != "") {
		var t = parseInt(h) / 3600;
		var r = (t - Math.floor(t)) * 60;
		var q = (r - Math.floor(r)) * 60;
		t = Math.floor(t) > 10 ? Math.floor(t) : "0" + Math.floor(t);
		r = Math.floor(r) > 10 ? Math.floor(r) : "0" + Math.floor(r);
		q = Math.floor(q) > 10 ? Math.floor(q) : "0" + Math.floor(q);
		$E("videoInfo").innerHTML = "时长：" + t + ":" + r + ":" + q
	}
	if (s != "") {
		info.data.videoDesc = s
	}
	var n = $C("div");
	n.innerHTML = info.data.videoDesc;
	info.data.videoDesc = n.innerHTML;
	$E("videoDesc").innerHTML = VideoDom.finalpagevideodesc.format(info.playlist[vid].videoImage, info.playlist[vid].videoOrder, Str.trancate(info.data.videoDesc, 600));
	$E("ctgLink").href = info.purl + "#剧情介绍"
};
var DEFAULTIMAGE = "http://www.qiyipic.com/common/images/touming.gif";
var PlayList = function(v, h) {
	var q = v["1"];
	if (typeof q == "undefined" || q.length < 1) {
		$E("listWrapper").innerHTML = "数据加载失败！";
		return
	}
	if (typeof tab1 == "undefined") {
		window.tab1 = new Tabs($E("listWrapper"), "list")
	}
	tab1.newTab(h);
	var e = 30,
	g = q.length;
	var a = Math.ceil(g / 30);
	var s = [];
	var u = [];
	var f = 1;
	s.push(PlayListDom.albumtotalpage);
	window._link = q[0].videoUrl;
	for (var m = 0; m < a; m++) {
		var o = [],
		t = Math.min(g, e + m * e);
		for (var n = m * e + 1; n <= t; n++) {
			var d = q[n - 1];
			o.push(PlayListDom.albumpage.format(d.videoImage, d.videoUrl, info.pageType == "纪录片" ? Str.trancate(d.videoName, 32) : "第" + d.videoOrder + "集", d.videoName, " "))
		}
		if (a > 1) {
			u.push("<span id='num" + m + "'>" + (m * e + 1) + "-" + t + "</span>")
		}
		if (a > 1 && m > 0) {
			s.push("<ul id='cnt" + m + "' class='ulTw r5' style='display:none;'>" + o.join("") + "</ul>")
		} else {
			s.push("<ul id='cnt" + m + "' class='ulTw r5'>" + o.join("") + "</ul>")
		}
	}
	tab1.setContent(s.join(""));
	if (a <= 1) {
		$E("listPager").style.display = "none"
	} else {
		$E("listPager").style.display = "block";
		$E("listPager").innerHTML = u.join("")
	}
	var r = getElementByClz($E("listPager"), "span", "");
	if ($E("num0")) {
		$E("num0").className = "selected"
	}
	for (var l = 0,
	p = r.length; l < p; l++) {
		var c = r[l];
		c.onclick = function() {
			var k = this.id.match(/\d/);
			for (var j = 0; j < p; j++) {
				$E("num" + j).className = "";
				$E("cnt" + j).style.display = "none"
			}
			$E("num" + k).className = "selected";
			$E("cnt" + k).style.display = "block"
		}
	}
	function b(x, j) {
		var k = "";
		for (var w = x; w < j; w++) {
			k += PlayListDom.albumpage.format(DEFAULTIMAGE, "javascript:void(0)", "第" + w + "集", " ", "noPic")
		}
		return k
	}
};
PlaylistFactory.create("final", "");
if ($E("openAll")) {
	$addEvent($E("openAll"),
	function(b) {
		b = b || event;
		var a = b.target || b.srcElement;

		if ($E("videoList1").style.display == "none") {
			a.parentNode.className = "open1";
			$E("videoList1").style.display = "block";
			$E("videoList").style.display = "none";
			a.innerHTML = "收起"
		} else {
			a.parentNode.className = "open";
			$E("videoList").style.display = "block";
			$E("videoList1").style.display = "none";
			a.innerHTML = "全部展开"
		}
	},
	"click")
};