@extends('layouts.master')
@section('top_scripts')
    <script>
        let map;
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8,
            });
            createSearchInput();
        }

        function createSearchInput(){
            // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            initAutocomplete();
        }

        function initAutocomplete() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: -33.8688, lng: 151.2195},
                zoom: 13,
                mapTypeId: "roadmap",
            });
            // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
        }
    </script>
    <script defer
            src="https://maps.googleapis.com/maps/api/js?key={{config('map.google_map_api_key')}}&callback=initAutocomplete&libraries=places&v=weekly"
            type="text/javascript"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form id="search-form" action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label> <input
                                id="pac-input"
                                class="controls form-control"
                                type="text"
                                placeholder="Search Box"
                                name="keyword"/></label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="map">
            </div>
        </div>
    </div>
@endsection
@section('bottom_scripts')

@endsection
