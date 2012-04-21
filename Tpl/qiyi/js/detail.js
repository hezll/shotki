var D=Detail={};
Detail.show = function(movie,name,hot,area,actor,content,author){
    var m = $(movie);
    var p = m.position();
    var year ='';
    var html = '';
    var poster_type=1;
    html += '<div class="bg_tm"></div><div class="win_content" id="div_tip_detail"><dl><dt>'+name+'<em class="cheng"></em><span>'+area+'</span></dt>';
    html += '<dd><p>热度：<span class="cheng">'+hot+'℃</span></p>';
    html += '<p>主演：<span>'+actor+'</span></p>'
    html += '<p>剧情：'+content+'...</p>';
    html += '</dd></dl>';
    html += '<p class="author">内容提供：<span class="lan">'+author+'</span></p>'
    html += '</div>';
    $("#div_tip_detail").html(html);
    var tip=$('#movie_info');
    tip.show();
    var ptop = p.top+'px';
    var pleft = p.left+m.width()+10+'px';
    tip.css({'top':ptop,'left':pleft});
}
Detail.hide = function(){
    $('#movie_info').hide();
}



