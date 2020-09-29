import {} from "googlemaps";


 export function initMap(): void {
     let map: google.maps.Map;
     const center: google.maps.LatLngLiteral = {lat: 30, lng: -110};
    new google.maps.Map(document.getElementById("map") as HTMLElement, {
        center,
        zoom: 8
    });
}
