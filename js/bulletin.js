var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    width: '0',
    height: '0',
    videoId: getMostRecent()
  });
}

var API_KEY = 'AIzaSyAmfLaQgsuxnCeTROqqrPX2s5K5SMDru-U';
var CHANNEL_ID ='UCUx6iOYgIA5xE7Mrml92kvQ';
var URL1 = 'https://www.googleapis.com/youtube/v3/channels?part=contentDetails&id='+CHANNEL_ID+'&key='+API_KEY;
var PLAYLIST_ID, URL2, VIDEO_ID;
function getMostRecent() {
  $.ajax({
    url: URL1,
    dataType: 'json',
    async: false,
    success: function(data) {
      PLAYLIST_ID = data.items[0].contentDetails.relatedPlaylists.uploads;
    }
  });
  URL2 = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=1&playlistId='+PLAYLIST_ID+'&key='+API_KEY;
  $.ajax({
    url: URL2,
    dataType: 'json',
    async: false,
    success: function(data) {
      VIDEO_ID = data.items[0].snippet.resourceId.videoId;
    }
  });
  return VIDEO_ID;
}
