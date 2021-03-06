var paddingBottom = parseInt($('#contact').css('padding-bottom'));
$('#mapBackground').css('height', $('#contact').height() + paddingBottom);
$('#mapBackground').css('margin-bottom', 0-$('#contact').height() - paddingBottom);

$('#mapBackground').gMap({
  controls: {
    panControl: false,
    zoomControl: false,
    mapTypeControl: false,
    scaleControl: false,
    streetViewControl: false,
    overviewMapControl: false
  },
  maptype: 'ROADMAP',
  scrollwheel: true,
  zoom: 13,
  markers: [
{
  address: '4805 Westmont Avenue, Campbell, CA 95008',
  html: '',
  popup: false,
}

],

});

$('#map').gMap({
  controls: {
    panControl: false,
    zoomControl: false,
    mapTypeControl: false,
    scaleControl: false,
    streetViewControl: false,
    overviewMapControl: false
  },
  maptype: 'ROADMAP',
  scrollwheel: true,
  zoom: 13,
  markers: [
{
  address: '4805 Westmont Avenue, Campbell, CA 95008',
  html: '',
  popup: false,
}

],

});
