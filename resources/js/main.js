google.maps.event.addDomListener(window,"load",function(){
    var autocomplete = document.getElementById('autocomplete');
    const search = new google.maps.places.Autocomplete(autocomplete);
});