
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Liste des agences</title>
  </head>
  <body>
  <div id="mapdiv"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/openlayers/2.11/lib/OpenLayers.js"></script>
  <script>
    map = new OpenLayers.Map("mapdiv");
    map.addLayer(new OpenLayers.Layer.OSM());

    epsg4326 =  new OpenLayers.Projection("EPSG:4326"); //WGS 1984 projection
    projectTo = map.getProjectionObject(); //The map projection (Spherical Mercator)

    var lonLat = new OpenLayers.LonLat( -4.0165792 ,5.3614244 ).transform(epsg4326, projectTo);


    var zoom=12;
    map.setCenter (lonLat, zoom);

    var vectorLayer = new OpenLayers.Layer.Vector("Overlay");

    <?php while($agence = mysqli_fetch_assoc($resultatAllAgence)):?>
       // Define markers as "features" of the vector layer:
      var feature = new OpenLayers.Feature.Vector(
              new OpenLayers.Geometry.Point( <?php echo $agence["longitude"]?>, <?php echo $agence["latitude"]?>).transform(epsg4326, projectTo),
              {description:"<?php echo $agence['description']?>"} ,
              {externalGraphic: 'assets/img/marker.png', graphicHeight: 25, graphicWidth: 21, graphicXOffset:-12, graphicYOffset:-25  }
          );
      vectorLayer.addFeatures(feature);
    <?php endwhile ?>


    // Define markers as "features" of the vector layer:
    // var feature = new OpenLayers.Feature.Vector(
    //         new OpenLayers.Geometry.Point( -4.01336, 5.29209 ).transform(epsg4326, projectTo),
    //         {description:'treichville tel : +2250000000000'} ,
    //         {externalGraphic: 'assets/img/marker.png', graphicHeight: 25, graphicWidth: 21, graphicXOffset:-12, graphicYOffset:-25  }
    //     );
    // vectorLayer.addFeatures(feature);

    // var feature = new OpenLayers.Feature.Vector(
    //         new OpenLayers.Geometry.Point( -4.08999, 5.31767 ).transform(epsg4326, projectTo),
    //         {description:'Yopougon sable tel : +2250000000'} ,
    //         {externalGraphic: 'assets/img/marker.png', graphicHeight: 25, graphicWidth: 21, graphicXOffset:-12, graphicYOffset:-25  }
    //     );
    // vectorLayer.addFeatures(feature);

    // var feature = new OpenLayers.Feature.Vector(
    //         new OpenLayers.Geometry.Point( -4.22308, 5.9355  ).transform(epsg4326, projectTo),
    //         {description:'Agboville : En face de la pharmacie tel :+2254578962'} ,
    //         {externalGraphic: 'img/marker.png', graphicHeight: 25, graphicWidth: 21, graphicXOffset:-12, graphicYOffset:-25  }
    //     );
    // vectorLayer.addFeatures(feature);


    map.addLayer(vectorLayer);


    //Add a selector control to the vectorLayer with popup functions
    var controls = {
      selector: new OpenLayers.Control.SelectFeature(vectorLayer, { onSelect: createPopup, onUnselect: destroyPopup })
    };

    function createPopup(feature) {
      feature.popup = new OpenLayers.Popup.FramedCloud("pop",
          feature.geometry.getBounds().getCenterLonLat(),
          null,
          '<div class="markerContent">'+feature.attributes.description+'</div>',
          null,
          true,
          function() { controls['selector'].unselectAll(); }
      );
      //feature.popup.closeOnMove = true;
      map.addPopup(feature.popup);
    }

    function destroyPopup(feature) {
      feature.popup.destroy();
      feature.popup = null;
    }

    map.addControl(controls['selector']);
    controls['selector'].activate();

  </script>
</body></html>
