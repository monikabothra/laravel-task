    var theMap; // global scope for resize trigger to access FROM HERE

      function initialize() {


      var stylesArray = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

        var secheltLoc = new google.maps.LatLng(51.221172, -0.158744);

        var myMapOptions = {
          zoom: 14,
          center: secheltLoc,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: stylesArray,
          disableDefaultUI: true,
          draggable: false,
          scrollwheel: false
        };
        var image = 'http://watb.co.uk/images/WATB_map_logo.png';
        // apply to global scope
        theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);


        var marker = new google.maps.Marker({
          map: theMap,
          draggable: false,
          position: new google.maps.LatLng(51.251172, -0.156744),
          visible: true,
          icon: image
        });

        var boxText = document.createElement("div");
        boxText.style.cssText = "background: #1c2329;padding: 1rem 0;padding-left: 1rem;padding-right: 1rem;";
        boxText.innerHTML = "<h3 style='font-size:1.1em;color:#fff;text-align:center'>WATB</h3><p style='color:#fff;font-size:15px;line-height:25px;text-align:center;margin-bottom:0;'>Oldpost,<br>19 High Street,<br>Redhill, Surrey,<br>RH1 4HH<br>info@watb.co.uk<br>+44 (0)20 3397 1174</p>";

        var myOptions = {
          content: boxText,
          disableAutoPan: false,
          maxWidth: 0,
          pixelOffset: new google.maps.Size(-140, 0),
          zIndex: null,
          boxStyle: { 
            background: "#eee",
            opacity: 0.85,
            width: "280px"
           },
           closeBoxURL: "",
           infoBoxClearance: new google.maps.Size(1, 1),
           isHidden: false,
           pane: "floatPane",
           enableEventPropagation: false
        };

        google.maps.event.addListener(marker, "click", function (e) {
          ib.open(theMap, this);
        });

        var ib = new InfoBox(myOptions);

        ib.open(theMap, marker);

      }