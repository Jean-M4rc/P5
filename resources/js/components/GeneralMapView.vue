<template>
    <div>
        <div v-show="!show">

            <h1 class="display-6 text-center mt-2">Iticourt</h1>
            <p class="lead text-center container">L'itinéraire des circuits courts</p>
            <hr>

            <div class="row d-none d-md-block mt-5">
                <p class="lead text-center flex-center" style="height:150px">Que voulez-vous faire ?</p>        
            </div>

        </div>
        
        <div class="row" v-show="!show">

            <div class="col-12 col-md-6 flex-column flex-center" style="height:150px">
                <a id="buybtn1" href="" @click.prevent="show = !show">
                    <i class="fas fa-shopping-basket fa-4x flex-center"></i>
                    <p class="lead text-center">Vous achetez !</p>
                </a>
            </div>
            
            <div id="sellbtn1" class="col-12 col-md-6 flex-column flex-center " style="height:150px">
                    <a class="links" href="#logInModal" data-toggle="modal" data-target="#logInModal" >
                        <i class="fas fa-home fa-4x flex-center"></i>
                        <p class="lead ">Vous vendez !</p>
                    </a>
            </div>
                
        </div>

        <div v-show="show"><button @click="show = !show">Fermer la carte</button></div>

        <div id="mapbox" v-show="show" style="height:100vh;width:100%">
            <l-map :zoom="zoom" :center="center">
                <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                <l-marker :lat-lng="marker"></l-marker>
            </l-map>
        </div>
        
    </div>
</template>
<script>
/*
            var mymap = L.map('app').setView([49.182863, -0.370679], 10),
            L.tileLayer('https://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', {
                maxZoom: 18,
                id: 'mapbox.streets',
                accessToken: 'your.mapbox.access.token'
            }).addTo(mymap),
*/
import { LMap, LTileLayer, LMarker } from 'vue2-leaflet';

export default {
    name : 'mapbox',
    components: {
    LMap,
    LTileLayer,
    LMarker
  },
   
    data(){
        return {
            show :false,
            zoom:13,
            center: L.latLng(47.413220, -1.219482),
            url:'https://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}',
            attribution:'&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            marker: L.latLng(47.413220, -1.219482),
        }
    }
}

/*
export default{
    var { LMap, LTileLayer, LMarker } = Vue2Leaflet;
    el: '#app',
  components: { LMap, LTileLayer, LMarker },
  data() {
    return {
    show: false,
      zoom:10,
      center: L.latLng(49.182863, -0.370679),
      url:'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
      attribution:'&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      marker: L.latLng(49.182863, -0.370679),
    }
  }
};  
*/
</script>
