    //<![CDATA[







var map;
var lat;
var lng;
var markers;
var xml;
var marker = [];
var id_user = 48;
var allMarkers = [];




    		




window.onload = function() {




    //cria o mapa
      var map = new google.maps.Map(document.getElementById("map"), {

        center: new google.maps.LatLng(-14.235004, -51.92528),

        zoom: 4,


      });

//cria o objeto que faz expandir os marcadores na mesma posição
        
      var oms = new OverlappingMarkerSpiderfier(map,
        {markersWontMove: true, markersWontHide: true});


var styles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    }
];

map.setOptions({styles: styles});
var infowindow = new google.maps.InfoWindow();

 var options = {
    componentRestrictions: {country: "br"}
 };
                    

function clearMarkers() {

 //limpa os marcadores
    for (var z = 0; z < allMarkers.length; z++) {
      if(allMarkers[z] != null){
          allMarkers[z].setMap(null);
      }
}

    allMarkers = [];
}


//SEARCH

    //Autocomplete variables
    var input = document.getElementById('mapsearch');
    var searchform = document.getElementById('searchform');
    var place;
    var autocomplete1 = new google.maps.places.Autocomplete(input, options);
    

    //Add listener to detect autocomplete selection
    google.maps.event.addListener(autocomplete1, 'place_changed', function () {
        place = autocomplete1.getPlace();
        //console.log(place);
    });

    //Add listener to search
    searchform.addEventListener("submit", function() {
    

        var newlatlong = new google.maps.LatLng(place.geometry.location.lat(),place.geometry.location.lng());
        map.setCenter(newlatlong);
        marker.setPosition(newlatlong);
        map.setZoom(12);


        genre = document.getElementById("search-genre").value;
        age = document.getElementById("search-age").value;
        ranking_do = parseInt(document.getElementById("search-ranking-do").value);
        ranking_ate = parseInt(document.getElementById("search-ranking-ate").value);
        
        

              clearMarkers();


      for (var y = 0; y < markers.length; y++) {
      ranking_do = parseInt(document.getElementById("search-ranking-do").value);
      ranking_ate = parseInt(document.getElementById("search-ranking-ate").value);

      var point2 = new google.maps.LatLng(

              parseFloat(markers[y].getAttribute("lat")),

              parseFloat(markers[y].getAttribute("lng"))

      );



        var distance =  google.maps.geometry.spherical.computeDistanceBetween(point2, newlatlong);

        if (distance < 100000){

        	
        if(genre && age && ranking_do && ranking_ate){

        	//VERIFICA O CAMPO RANKING
        	if(ranking_do == ranking_ate){

                    if(genre == markers[y].getAttribute("gender") && age == markers[y].getAttribute("age") && ranking_do == markers[y].getAttribute("ranking")){
	                        criaMarcadorSearch();
	                    
                    }

                }else if(ranking_do > ranking_ate){
                	
                    while (ranking_do >= ranking_ate) { 
                    	
                    	

                        if(genre == markers[y].getAttribute("gender") && age == markers[y].getAttribute("age") && ranking_do == markers[y].getAttribute("ranking")){

	                           criaMarcadorSearch();
	                       
                        }

                        ranking_do--;
                    }


                }else if(ranking_do < ranking_ate){

                
                    while (ranking_do <= ranking_ate) { 

                        if(genre == markers[y].getAttribute("gender") && age == markers[y].getAttribute("age") && ranking_do == markers[y].getAttribute("ranking")){
	                            criaMarcadorSearch();
	                       
                        }

                        ranking_do++;
                    }
                }else{
                	
                	clearMarkers();
                }
        	


            }else if(genre || age || ranking_do && ranking_ate){

            	//GENDER E AGE
            	if(genre && age){
            		if(genre == markers[y].getAttribute("gender") && age == markers[y].getAttribute("age")){

            			criaMarcadorSearch();

            		}

            	//GENDER E RANKING	
            	}else if(gender && ranking_do && ranking_ate){

            			//VERIFICA O CAMPO RANKING
				        	if(ranking_do == ranking_ate){

				                    if(genre == markers[y].getAttribute("gender") && ranking_do == markers[y].getAttribute("ranking")){
					                        criaMarcadorSearch();
					                    
				                    }

				                }else if(ranking_do > ranking_ate){
				                	
				                    while (ranking_do >= ranking_ate) { 
				                    	
				                    	

				                        if(genre == markers[y].getAttribute("gender") && ranking_do == markers[y].getAttribute("ranking")){

					                           criaMarcadorSearch();
					                       
				                        }

				                        ranking_do--;
				                    }


				                }else if(ranking_do < ranking_ate){

				                
				                    while (ranking_do <= ranking_ate) { 

				                        if(genre == markers[y].getAttribute("gender") && ranking_do == markers[y].getAttribute("ranking")){
					                            criaMarcadorSearch();
					                       
				                        }

				                        ranking_do++;
				                    }
				                }else{
				                	
				                	clearMarkers();
				                }


				 //AGE E RANKING               
            	}else if(age && ranking_do && ranking_ate){

            			//VERIFICA O CAMPO RANKING
				        	if(ranking_do == ranking_ate){

				                    if(age == markers[y].getAttribute("age") && ranking_do == markers[y].getAttribute("ranking")){
					                        criaMarcadorSearch();
					                    
				                    }

				                }else if(ranking_do > ranking_ate){
				                	
				                    while (ranking_do >= ranking_ate) { 
				                    	
				                    	

				                        if(age == markers[y].getAttribute("age") && ranking_do == markers[y].getAttribute("ranking")){

					                           criaMarcadorSearch();
					                       
				                        }

				                        ranking_do--;
				                    }


				                }else if(ranking_do < ranking_ate){

				                
				                    while (ranking_do <= ranking_ate) { 

				                        if(age == markers[y].getAttribute("age") && ranking_do == markers[y].getAttribute("ranking")){
					                            criaMarcadorSearch();
					                       
				                        }

				                        ranking_do++;
				                    }
				                }else{
				                	
				                	clearMarkers();
				                }



            	}else{


            		if(genre){

		                if(genre == markers[y].getAttribute("gender")){
		                	
		                
			                	
			                    criaMarcadorSearch();
		                    
		                }else{
		                	clearMarkers();
		                }
		            }

		            if(age){

		                if(age == markers[y].getAttribute("age")){
		                	
			                	
			                    criaMarcadorSearch();
			                
		                }else{
		               
		                	
		                	clearMarkers();
		                	
		                }

		            }

		            if(ranking_do && ranking_ate){

		                if(ranking_do == ranking_ate){

		                    if(ranking_do == markers[y].getAttribute("ranking")){
		                    	
			                    	
			                        criaMarcadorSearch();
			                    
		                    }

		                }else if(ranking_do > ranking_ate){

		                    while (ranking_do >= ranking_ate) { 

		                        if(ranking_do == markers[y].getAttribute("ranking")){
		                        	
			                        	
			                            criaMarcadorSearch();
			                        
		                        }

		                        ranking_do--;
		                    }


		                }else if(ranking_do < ranking_ate){
		                
		                    while (ranking_do <= ranking_ate) { 

		                        if(ranking_do == markers[y].getAttribute("ranking")){
		                        	
			                        	
			                            criaMarcadorSearch();
			                           
		                        }

		                        ranking_do++;
		                    }
		                }else{
		                	
		                	clearMarkers();
		                }

		         	}


            	}
            
            }else{

            	criaMarcadorSearch();

            }


            function criaMarcadorSearch(){

            lat = markers[y].getAttribute("lat");

            lng = markers[y].getAttribute("lng");

            battletag = markers[y].getAttribute("battletag");

            loc = markers[y].getAttribute("location");

            level = markers[y].getAttribute("level");

            rank = markers[y].getAttribute("ranking");

            id = markers[y].getAttribute("id");




            var point = new google.maps.LatLng(

              parseFloat(lat),

              parseFloat(lng)
              );

            var icon = {
                url: 'http://www.marduktv.com.br/wp-content/uploads/2017/09/marker-player-mktv.png', // url
                //scaledSize: new google.maps.Size(16, 16), // scaled size
            }; 

            marker = new google.maps.Marker({

            map: map,

            position: point,
           icon: icon,

          });

          oms.addMarker(marker);
          allMarkers.push(marker);
       

        id_user+=y;


        var infoBubble = [];


        infoBubble[y] = new InfoBubble({
          maxWidth: 300
        });


        infoBubble[y].setMaxWidth(220);
        infoBubble[y].set('maxHeight', 85);
        infoBubble[y].set('overflow', 'hidden');
        infoBubble[y].setBackgroundColor('rgba(230, 81, 0, 0.8)');
        infoBubble[y].setBorderRadius(4);
        infoBubble[y].setBorderWidth(0);
        infoBubble[y].setArrowSize(8);
        infoBubble[y].setCloseSrc('<?php echo get_template_directory_uri(); ?>/img/iw_close.png');

        var str = String(rank);
        var rankingInfoWindow = parseInt(str.replace("-", ""));
        var rankingInfoWindow = rankingInfoWindow-1;
        if( rankingInfoWindow == 0){
            rankingInfoWindow = 'lendario';
        }

        infoBubble[y].setBorderRadius(4);
        var div = document.createElement('DIV');
        var contentString = '<div id="content-infowindow">'+
        '<div class="playerBox" style="height: 80px;">'+
        '<div class="playerMoreInfo"><button onclick="btn_profile_inMap('+id+');" id="btn-profile" data-toggle="modal" data-target="#userProfile">MAIS INFORMAÇÕES</button></div>'+
        '<div class="playerRank" style="left: 10px;     float: left;"><img class="userMaxRankImgInfoWindows" width="50px" height="auto" src="<?= get_template_directory_uri()?>/img/ranks/'+rankingInfoWindow+'.png" /></div>'+
         '<div class="playerInfo"><span class="namePLayer fontNamePlayer" style="left: 10px;">'+ battletag.toUpperCase() +'</span><span class="infoPLayer fontInfoPlayer" style="left: 10px;">'+loc.toUpperCase()+'</span></div>'+
       '</div>'+'</div>';

       

        infoBubble[y].addTab('', contentString);




        var parameter = infoBubble[y];


         


        google.maps.event.addListener(marker, 'click', (function(parameter, marker, id_user) {
            return function() {
                parameter.open(map, marker);
                

            }
        })(parameter,marker, id_user));




//call function of click in the mark
        //blindInfoWindow(map , marker);
    }


        }


      }


 
    });

    //Reset the inpout box on click
    input.addEventListener('click', function(){
        input.value = "";
    });




// cria campo autocomplete e pega cordenadas no fomrulario de cadastro
var autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('location'), options);
google.maps.event.addListener(autocomplete2, 'place_changed', function () {
    var place = autocomplete2.getPlace();
    document.getElementById('lat').value = place.geometry.location.lat();
    document.getElementById('lng').value = place.geometry.location.lng();
});



//carrega o xml com os usuarios do banco de dados

      downloadUrl('<?php echo get_template_directory_uri(); ?>/hearthseek/maps_xml.php', function(data) {

        xml = data.responseXML;



        markers = xml.documentElement.getElementsByTagName("marker");



// for que mostra os marcadores aleatorios na pagina inicial



    function randomNumbers(max) {
        function range(upTo) {
            var result = [];
            for(var i = 0; i < upTo; i++) result.push(i);
            return result;
        }
        function shuffle(o){ //v1.0
            for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
            return o;
        }
        var myArr = shuffle(range(max));
        return function() {
            return myArr.shift();
        };
    }

var randoms = randomNumbers(markers.length),
    rand = randoms(),
    result = [];


//MUDAR DPS PRA 25
        for (i = 0; i < 24; i++) {



    result.push(rand);
    rand = randoms();
    var cont = result[i];

  //pega os valores do xml        

          //var usertype = markers[i].getAttribute("usertype");

//pra pegar qntidade aleatoria
//var cont = Math.floor((Math.random() * markers.length));

//depois mudar i para cont (adress, id, lat, lng, allmarkers)

lat = markers[cont].getAttribute("lat");

lng = markers[cont].getAttribute("lng");

playername = markers[cont].getAttribute("playername");

 battletag = markers[cont].getAttribute("battletag");

loc = markers[cont].getAttribute("location");

level = markers[cont].getAttribute("level");

rank = markers[cont].getAttribute("ranking");

id = markers[cont].getAttribute("id");




            var point = new google.maps.LatLng(

              parseFloat(lat),

              parseFloat(lng)
              );

            var icon = {
                url: 'http://www.marduktv.com.br/wp-content/uploads/2017/09/marker-player-mktv.png', // url
                //scaledSize: new google.maps.Size(16, 16), // scaled size
            }; 

            marker = new google.maps.Marker({

            map: map,

            position: point,
	       icon: icon,

          });

          oms.addMarker(marker);
          allMarkers.push(marker);
       

        id_user+=cont;


        var infoBubble = [];


        infoBubble[cont] = new InfoBubble({
          maxWidth: 300
        });


        infoBubble[cont].setMaxWidth(220);
        infoBubble[cont].set('maxHeight', 85);
        infoBubble[cont].set('overflow', 'hidden');
        infoBubble[cont].setBackgroundColor('rgba(230, 81, 0, 0.8)');
        infoBubble[cont].setBorderRadius(4);
        infoBubble[cont].setBorderWidth(0);
        infoBubble[cont].setArrowSize(8);
        infoBubble[cont].setCloseSrc('<?php echo get_template_directory_uri(); ?>/img/iw_close.png');

        var str = String(rank);
        var rankingInfoWindow = parseInt(str.replace("-", ""));
        var rankingInfoWindow = rankingInfoWindow-1;
        if( rankingInfoWindow == 0){
            rankingInfoWindow = 'lendario';
        }

        infoBubble[cont].setBorderRadius(4);
        var div = document.createElement('DIV');
        var contentString = '<div id="content-infowindow">'+
        '<div class="playerBox" style="height: 80px;">'+
        '<div class="playerMoreInfo"><button onclick="btn_profile_inMap('+id+');" id="btn-profile" data-toggle="modal" data-target="#userProfile">MAIS INFORMAÇÕES</button></div>'+
        '<div class="playerRank" style="left: 10px;     float: left;"><img class="userMaxRankImgInfoWindows" width="50px" height="auto" src="<?= get_template_directory_uri()?>/img/ranks/'+rankingInfoWindow+'.png" /></div>'+
         '<div class="playerInfo"><span class="namePLayer fontNamePlayer" style="left: 10px;">'+ battletag.toUpperCase() +'</span><span class="infoPLayer fontInfoPlayer" style="left: 10px;">'+loc.toUpperCase()+'</span></div>'+
       '</div>'+'</div>';

       

        infoBubble[cont].addTab('', contentString);




        var parameter = infoBubble[cont];


         


        google.maps.event.addListener(marker, 'click', (function(parameter, marker, id_user) {
            return function() {
                //infowindow.setContent('<div id="content"><a href="#" onclick="btn_profile_inMap('+id_user+')">Veja mais</a></div>');
                //infoBubble.addTab('A Tab', div);
                //infowindow.open(map, marker);
                parameter.open(map, marker);
                

            }
        })(parameter,marker, id_user));




//call function of click in the mark
        blindInfoWindow(map , marker);
}




//GEOLOCATION

    // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      pos_lat = position.coords.latitude;
      pos_lng = position.coords.longitude;

      clearMarkers();


      for (var x = 0; x < markers.length; x++) {


      var point1 = new google.maps.LatLng(

              parseFloat(pos_lat),

              parseFloat(pos_lng)

      );



      var point2 = new google.maps.LatLng(

              parseFloat(markers[x].getAttribute("lat")),

              parseFloat(markers[x].getAttribute("lng"))

      );



        var distance =  google.maps.geometry.spherical.computeDistanceBetween(point2, point1);

        if (distance < 100000){


            lat = markers[x].getAttribute("lat");

            lng = markers[x].getAttribute("lng");

            playername = markers[x].getAttribute("playername");

             battletag = markers[x].getAttribute("battletag");

            loc = markers[x].getAttribute("location");

            level = markers[x].getAttribute("level");

            rank = markers[x].getAttribute("ranking");

            id = markers[x].getAttribute("id");




            var point = new google.maps.LatLng(

              parseFloat(lat),

              parseFloat(lng)
              );

            var icon = {
                url: 'http://www.marduktv.com.br/wp-content/uploads/2017/09/marker-player-mktv.png', // url
                //scaledSize: new google.maps.Size(16, 16), // scaled size
            }; 

            marker = new google.maps.Marker({

            map: map,

            position: point,
           icon: icon,

          });

          oms.addMarker(marker);
          allMarkers.push(marker);
       

        id_user+=x;


        var infoBubble = [];


        infoBubble[x] = new InfoBubble({
          maxWidth: 300
        });


        infoBubble[x].setMaxWidth(220);
        infoBubble[x].set('maxHeight', 85);
        infoBubble[x].set('overflow', 'hidden');
        infoBubble[x].setBackgroundColor('rgba(230, 81, 0, 0.8)');
        infoBubble[x].setBorderRadius(4);
        infoBubble[x].setBorderWidth(0);
        infoBubble[x].setArrowSize(8);
        infoBubble[x].setCloseSrc('<?php echo get_template_directory_uri(); ?>/img/iw_close.png');

        var str = String(rank);
        var rankingInfoWindow = parseInt(str.replace("-", ""));
        var rankingInfoWindow = rankingInfoWindow-1;
        if( rankingInfoWindow == 0){
            rankingInfoWindow = 'lendario';
        }


        infoBubble[x].setBorderRadius(4);
        var div = document.createElement('DIV');
        var contentString = '<div id="content-infowindow">'+
        '<div class="playerBox" style="height: 80px;">'+
        '<div class="playerMoreInfo"><button onclick="btn_profile_inMap('+id+');" id="btn-profile" data-toggle="modal" data-target="#userProfile">MAIS INFORMAçÔES</button></div>'+
        '<div class="playerRank" style="left: 10px;     float: left;"><img class="userMaxRankImgInfoWindows" width="50px" height="auto" src="<?= get_template_directory_uri()?>/img/ranks/'+rankingInfoWindow+'.png" /></div>'+
                 '<div class="playerInfo"><span class="namePLayer fontNamePlayer" style="left: 10px;">'+ battletag.toUpperCase() +'</span><span class="infoPLayer fontInfoPlayer" style="left: 10px;">'+loc.toUpperCase()+'</span></div>'+
       '</div>'+'</div>';

       

        infoBubble[x].addTab('', contentString);




        var parameter = infoBubble[x];


         


        google.maps.event.addListener(marker, 'click', (function(parameter, marker, id_user) {
            return function() {
                //infowindow.setContent('<div id="content"><a href="#" onclick="btn_profile_inMap('+id_user+')">Veja mais</a></div>');
                //infoBubble.addTab('A Tab', div);
                //infowindow.open(map, marker);
                parameter.open(map, marker);
                

            }
        })(parameter,marker, id_user));




//call function of click in the mark
        blindInfoWindow(map , marker);


        }


      }

      map.setCenter(pos);
      map.setZoom(11);
    });
  }







//function of click in the mark
function blindInfoWindow (map, marker) {
    


    marker.addListener('mouseover', function() {

    var icon = {
                url: 'http://www.marduktv.com.br/wp-content/uploads/2017/09/marker-player-mktv.png', // url
                //scaledSize: new google.maps.Size(19, 19), // scaled size
            }; 

    marker.setIcon(icon);

    });

    marker.addListener('mouseout', function() {

    var icon = {
                url: 'http://www.marduktv.com.br/wp-content/uploads/2017/09/marker-player-mktv.png', // url
                //
            //scaledSize: new google.maps.Size(16, 16), // scaled size
            }; 

    marker.setIcon(icon);

    });
    
}
});





    function downloadUrl(url, callback) {

      var request = window.ActiveXObject ?

          new ActiveXObject('Microsoft.XMLHTTP') :

          new XMLHttpRequest;



      request.onreadystatechange = function() {

        if (request.readyState == 4) {

          request.onreadystatechange = doNothing;

          callback(request, request.status);

        }

      };



      request.open('GET', url, true);

      request.send(null);

    }

function doNothing() {}


}


    //]]>

