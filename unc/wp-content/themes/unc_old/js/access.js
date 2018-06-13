var latlng_s;
var latlng_g = new google.maps.LatLng(34.618816, 134.153152);
var directionsService = new google.maps.DirectionsService();
var directionsRenderer = new google.maps.DirectionsRenderer();
var map;
var map_p;

	$(function(){

		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay_p = new google.maps.DirectionsRenderer();


		/****************************************
			経路マップ関係
		******************************************/

		var myOptions = {
			zoom: 8,
			center: latlng_g,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		//■地図オブジェクトを作成し、地図表示
		map = new google.maps.Map(document.getElementById("maps"),myOptions);
		directionsDisplay.setMap(map);

		//■ルート表示（初期は大阪）
		Root_create('1');


		//■チェックボックスにチェンジイベント付与
		$('#root_radio input').change(function(e){
			Root_create( $(this).val() );
		});

		/****************************************
			駐車場マップ関係
		******************************************/

		var myOptions_p = {
			zoom: 15,
			center: latlng_g,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		//■地図オブジェクトを作成し、地図表示
		map_p = new google.maps.Map(document.getElementById("maps_p"),myOptions_p);
		directionsDisplay_p.setMap(map_p);

		//■マーカーオブジェクト作成（駐車場）
		var marker = new google.maps.Marker({
			position: latlng_g,
			map: map_p,
			icon: '/unc/images/contents/ico_car.png'
		});

		//■マーカーオブジェクト作成（フェリー乗り場）
		var marker_f = new google.maps.Marker({
			position: new google.maps.LatLng(34.616834,134.160255),
			map: map_p,
			icon: '/unc/images/contents/ico_ship.png'
		});

		/*
		//■駐車場情報ウインドウ
		var infowindow = new google.maps.InfoWindow({
            content: '無料駐車場',
            maxWidth: 20
		});
		infowindow.open(map_p,marker);
		*/

		//■駐車場ポリライン
		var parkpoli;
		var parkpoli_option = {
			strokeColor: "#FF0000",
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: "#FF0000",
			fillOpacity: 0.35,
			map: map_p,
			center: new google.maps.LatLng(34.618816, 134.153152),
			radius: 30
		};

		parkpoli = new google.maps.Circle(parkpoli_option);

		/*
		//■フェリー乗り場ウインドウ
		var infowindow_f = new google.maps.InfoWindow({
            content: 'フェリー乗り場'
		});
		infowindow_f.open(map_p,marker_f);
		*/


		//■フェリー乗り場ポリライン
		var fepoli;
		var fepoli_option = {
			strokeColor: "#0096FF",
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: "#0096FF",
			fillOpacity: 0.35,
			map: map_p,
			center: new google.maps.LatLng(34.616834, 134.160255),
			radius: 30
		};

		fepoli = new google.maps.Circle(fepoli_option);

		//■フェリー乗り場までの経路にポリライン
		//緯度経度配列
		var flightPlanCoordinates = [
			new google.maps.LatLng(34.618601, 134.153382),
			new google.maps.LatLng(34.618435, 134.153339),
			new google.maps.LatLng(34.618302, 134.153779),
			new google.maps.LatLng(34.618139, 134.153796),
			new google.maps.LatLng(34.617743, 134.153892),
			new google.maps.LatLng(34.617488, 134.154567),
			new google.maps.LatLng(34.616702, 134.154518),
			new google.maps.LatLng(34.616602, 134.154899),
			new google.maps.LatLng(34.616251, 134.15541),
			new google.maps.LatLng(34.616266, 134.155573),
			new google.maps.LatLng(34.615902, 134.15573),
			new google.maps.LatLng(34.616338, 134.156156),
			new google.maps.LatLng(34.616583, 134.156507),
			new google.maps.LatLng(34.616883, 134.157365),
			new google.maps.LatLng(34.616914, 134.159227),
			new google.maps.LatLng(34.616846, 134.159343),
			new google.maps.LatLng(34.616786, 134.160145)
		];

		var flightPath = new google.maps.Polyline({
			path: flightPlanCoordinates,
			strokeColor: "#FF0000",
			strokeOpacity: 1.0,
			strokeWeight: 2
		});

		flightPath.setMap(map_p);

	});

	function Root_create(str){

		switch( str ){
			case '1':
				latlng_s = new google.maps.LatLng(34.701909, 135.494977);//大阪駅
				//var pointname = '大阪駅';
				break;
			case '2':
				latlng_s = new google.maps.LatLng(34.666369, 133.918588);//岡山駅
				//var pointname = '岡山駅';
				break;
			case '3':
				latlng_s = new google.maps.LatLng(34.668523, 134.091165);//邑久駅
				//var pointname = '邑久駅';
				break;
		}


		var request = {
			origin:latlng_s,
			destination:latlng_g,
			travelMode: google.maps.DirectionsTravelMode.DRIVING
	    };

	    directionsService.route(request, function(response, status) {
	        if (status == google.maps.DirectionsStatus.OK) {
	            directionsDisplay.setDirections(response);
	        }
	    });

	}