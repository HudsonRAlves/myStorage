@extends('templates.templateNavBar')
@section('content-nav')

<!-- Top content -->
<div class="top-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text wow fadeInLeft">
                <h1>My Storage</h1>
                <div class="description">
                    <p class="medium-paragraph"> 
                        Alugue um espaço <a href="#NOME"> conheça nossos planos </a>e começe a ganhar dinheiro!
                    </p>
                    <p class="medium-paragraph"> 
                        A maneira mais simples de ganhar dinheiro. 
                    </p>

                    <input class="form-control" id="pac-input" class="controls" type="text"
                           placeholder="Digite o Local Desejado.">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Features -->
<div class="features-container section-container">
    <a name="ultimosAnuncios"></a>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 features section-description wow fadeIn">

                <h2>Últimos anúncios</h2>
                <div class="divider-1"><div class="line"></div></div>
            </div>
        </div>

        <section id="destaques">
            <div class="container">
                <main role="main">
                    <div class="album py-5 bg-light">
                        <div class="container">
                            <div class="row">
                                @foreach($anuncios as $anuncio)
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" src="{{url('storage/'.$anuncio->figura1)}}" alt="SEM IMAGEM" style="max-width: 356px 280px;">
                                        <div class="card-body">
                                            <p class="card-text">{{$anuncio->nome}}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                </div>
                                                <small class="text-muted">VALOR</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach    
                            </div>
                        </div>
                    </div>
                </main>
            </div>  
        </section>
    </div>
</div>

<!-- Features -->
<div class="features-container section-container">
    <a name="redesSociais"></a>
    <div class="container">

        <div class="row">
            <div class="col-sm-12 features section-description wow fadeIn">
                <h2>Redes Sociais</h2>
                <div class="divider-1"><div class="line"></div></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 features-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>Ut wisi enim ad minim</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 features-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-instagram"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>Sed do eiusmod tempor</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 features-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-magic"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>Quis nostrud exerci tat</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 features-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-cloud"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>Minim veniam quis nostrud</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a name="planos"></a>
<section class="cid-qSOZC3VHxb" id="pricing-tables2-b">
    <div class="row">
        <div class="col-sm12 features section-description wow fadeIn">
            <h2>Planos</h2>
            <div class="divider-1"><div class="line"></div></div>
        </div>

        <div>   
            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4" style="background-color: #EDEFF2; width: 325px; height: 300px; margin-left:5%; margin:50px">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Econômico
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">R$
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            10<br></span>
                        <small class="price-term mbr-fonts-style display-7"></small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">Plano Standart </li><br><li class="list-group-item">Anuncie durante 7 dias&nbsp;</li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center py-4 pb-5"><a href="" class="btn btn-primary display-4">COMPRE JÁ</a></div>
                </div>
            </div>


            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4" style="background-color: #EDEFF2; width: 325px; height: 300px; margin:50px; ">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Standart
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">R$
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            10<br></span>
                        <small class="price-term mbr-fonts-style display-7"></small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">Plano Standart </li><br><li class="list-group-item">Anuncie durante 7 dias&nbsp;</li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center py-4 pb-5"><a href="" class="btn btn-primary display-4">COMPRE JÁ</a></div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4" style="background-color: #EDEFF2; width: 325px; height: 300px; margin-right:5% ;margin:50px">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Standart
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">R$
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            10<br></span>
                        <small class="price-term mbr-fonts-style display-7"></small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">Plano Standart </li><br><li class="list-group-item">Anuncie durante 7 dias&nbsp;</li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center py-4 pb-5"><a href="" class="btn btn-primary display-4">COMPRE JÁ</a></div>
                </div>
            </div>
        </div>

</section>

<section>
    <div id="map"></div>
</section>
<script>
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -33.8688, lng: 151.2195},
            zoom: 13
        });
        var input = /** @type {!HTMLInputElement} */(
                document.getElementById('pac-input'));

        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function () {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                // User entered the name of a Place that was not suggested and
                // pressed the Enter key, or the Place Details request failed.
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);  // Why 17? Because it looks good.
            }
            marker.setIcon(/** @type {google.maps.Icon} */({
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(35, 35)
            }));
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
            infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
            var radioButton = document.getElementById(id);
            radioButton.addEventListener('click', function () {
                autocomplete.setTypes(types);
            });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
    }
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdb9MWAWlr4AF9_RcZosJUI6OZUS-pyaI&libraries=places&callback=initMap"
async defer></script>

@endsection