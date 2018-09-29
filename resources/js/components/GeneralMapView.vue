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

        <div class="col-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3" id="mapbox" v-show="show" style="height:90vh">
            <l-map :zoom="zoom" :center="center">
                <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                <l-marker :lat-lng="marker"></l-marker>
            </l-map>
        </div>
        
    </div>
</template>
<script>

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

</script>
