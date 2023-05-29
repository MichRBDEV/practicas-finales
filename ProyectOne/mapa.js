// mapa
    // Initialize and add the map
function initMap() {
  // The location of URL
  const URL = { lat: -99.2722115,17, lng: 19.4446282 };
  // The map, centered at URL
  const maps = new google.maps.Map(document.getElementById("maps"), {
    zoom: 18,
    center: URL,
  });
  // The marker, positioned at URL
  const marker = new google.maps.Marker({
    position: URL,
    map: map,
  });

  window.initMap = initMap;
}
