<!DOCTYPE html>
<html>
<head> <!-- untuk meta description, keywords, dan author bisa gantu dan di sesuaikan tapi yang meta charset sama viewport jangan di ganti -->
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name='description' content='WebGIS geosis.id menyajikan berbagai konten spasial ke dalam bentuk Website'/>
<meta name='keywords' content='WebGIS, WebGIS geos, WebGIS Indoensia'/>
<meta name='Author' content='Egi Septiana'/> 
<title>WebGIS Kualitas Bangunan</title> <!-- title bisa di sesuaikan dengan nama judul WebGIS yang di inginkan -->
<?php $this->load->view('vendor/map-css.php'); ?>
<?php $this->load->view('vendor/map-js.php'); ?>

<!-- json -->
<script src="<?= base_url(); ?>assets/layer/batas.js"></script>
<script src="<?= base_url(); ?>assets/layer/titik-kualitas/baru.js"></script>



</head>
<body>
<div id="map"> <!-- ini id="map" bisa di ganti dengan nama yang di inginkan -->
<script>



var map = L.map('map').setView([-7.844232,110.462897], 14);

// PILIHAN BASEMAP YANG AKAN DITAMPILKAN
var baseLayers = {  
  'Esri.WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap').addTo(map),
  'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery')
};

// MENAMPILKAN TOOLS UNTUK MEMILIH BASEMAP
L.control.layers(baseLayers,{}).addTo(map);
// MENAMPILKAN SKALA
L.control.scale({imperial: false}).addTo(map);

// ------------------- VECTOR ----------------------------
var batas = L.geoJSON(batas, {
  style: {
    fillColor: '#FED976',
    weight: 1,
    opacity: 0.6,
    color: 'black',
    dashArray: '0',
    fillOpacity: 0.8,
  }
}).addTo(map);

//ICON
var MyIcon = L.icon({
iconUrl: '<?= base_url()?>assets/images/icon-home.png',
iconSize: [40, 38], // size of the icon
}); 


var point = L.geoJSON(baru, 
{onEachFeature: function (feature, layer) {
  layer.bindPopup('<table>'+
          '<tr style="text-align:center;">'+
            '<th colspan="2">'+'Informasi '+'</th>'+
          '</tr>'+
          '<tr>'+
            '<td>'+'<li>'+'Status Kepemilikan:'+'</li>'+'</td>'+
            '<td>'+feature.properties.Skor_Statu+'</td>'+
          '</tr>'+
          '<tr>'+
            '<td>'+'<li>'+'Jenis Bangunan:'+'</li>'+'</td>'+
            '<td>'+feature.properties.Skor_Jenis+'</td>'+
          '</tr>'+
          '<tr>'+
            '<td>'+'<li>'+'Jenis Lantai:'+'</li>'+'</td>'+
            '<td>'+feature.properties.Sjir_Jen_1+'</td>'+
          '</tr>'+
          '<tr>'+
            '<td>'+'<li>'+'Fasilitas Rumah:'+'</li>'+'</td>'+
            '<td>'+feature.properties.skor_Fasil+'</td>'+
          '</tr>'+
          '<tr>'+
            '<td>'+'<li>'+'Kualitas Bangunan:'+'</li>'+'</td>'+
            '<td>'+feature.properties.Kualitas_B+'</td>'+
          '</tr>'+
        '</table>')
  },pointToLayer: function(feature,latlng){
  return L.marker(latlng,{icon: MyIcon});
  }
}).addTo(map);



</script>
</div> 
</body>
</html>
