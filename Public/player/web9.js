function $Showhtml(){
	url = Player.Url.replace(/\+/g,' ');
	player = '<OBJECT name="myWebPlayer9" id="myWebPlayer9" classid="clsid:947BA55B-2113-4349-8784-FFB9D7F881C9" width="100%" height="'+Player.Height+'" align="center" onError="Player.Install();">';
	player += '<param name="Mode" value="full">';
	player += '<param name="Title" value="本站由<射客影视系统>建设!">';
	player += '<param name="AdURL" value='+Player.Buffer+'>';
	player += '<param name="EmbedURL" value="http://www.shotki.com/?web9">';
	player += '<param name="URL" value="'+url+'">';
	player += '<param name="TextAds" value="www.shotki.com">';
	player += '<param name="NextVideoURL" value="'+Player.NextUrl+'">';
	player += '<param name="GlobalCache" value=-1>';
	player += '</OBJECT>';
	return player;
}
Player.Show();