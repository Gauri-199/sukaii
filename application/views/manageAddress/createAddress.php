<?php $this->load->view("./layout/header"); ?>
<style>
	#map #infowindow-content {
		display: inline;
	}

	.pac-controls {
		display: inline-block;
		padding: 5px 11px;
	}

	.pac-controls label {
		font-size: 13px;
		font-weight: 300;
	}

	#pac-input {
		border-top-right-radius: 0px;
		border-bottom-right-radius: 0px;
	}

	#pac-input:focus {
		border-color: none !important;
	}

	#title {
		font-size: 22px;
		font-weight: 500;
		padding: 17px 19px 7px;
	}

	::placeholder {
		font-size: 12px;
	}

	#curr {
		border-bottom-left-radius: 0px;
		border-top-left-radius: 0px;
	}
	input[placeholder="Eg. John’s home, Mom’s place etc"]{
		font-size: 14px;
	}
	#map{
		height: 400px;
	}
	@media only screen and (max-width: 600px) {
		#map{
		height: 200px;
	}
	}
</style>
<div id="map">
</div>
<input type="hidden" id="backToPage" value="<?= isset($backToOrder) ? $backToOrder : '' ?>"/>
<div class="bg-light border-0 mt-2 mx-auto overflow-hidden pac-card rounded " id="pac-card" style="box-shadow: darkgrey -1px 1px 3px;; width: 90%;">
	<div id="pac-container" class="d-flex ">
		<input id="pac-input" type="text" class="form-control border-right-0" placeholder="Enter a location" />
		<button type="button" id="curr" onclick="getLocation()" class="bg-white border btn btn-link"><i class="fa-solid fa-location-crosshairs"></i></button>
	</div>
</div>

<div class="container">
	<div class="row profile">
		<div class="col-12 d-flex justify-content-between pb-2 pt-4 px-0" style="border-bottom: 2px solid gray;">
			<!-- <input type="checkbox" name="" class="pr-2" id=""> -->
			<div class="pl-2 normal_text">
				<h6 class="mb-0" style="font-weight: 600;">Home</h6>
				<p class="mb-0" id="map_address_line"></p>
			</div>
			<div class="changes_address pt-2">
				<button type="button" onclick="changeAddress()" style="text-decoration: none;" class="border-dark btn btn-light btn-link btn-sm text-dark">Change</button>
			</div>
		</div>


	</div>
</div>
<form id="save_customer_address" class="py-3" method="post">
<div class="container">
		<input type="text" id="line_1" name="line_1" class="form-control mb-2" placeholder="Line 1">
		<input type="text" id="line_2" name="line_2" class="form-control mb-2" placeholder="Line 2">
		<input type="text" id="line_3" name="line_3" class="form-control mb-2" placeholder="Line 3">
		<input type="text" id="line_4" name="line_4" class="form-control mb-2" placeholder="Line 4">
		<input type="hidden" name="location_long" id="location_long">
		<input type="hidden" name="location_lat" id="location_lat">
		<input type="hidden" name="user_id" id="user_id" value="<?=$this->session->user_session->id?>">
</div>
<div class="container">
	<small><b>Save As</b></small>
	<div class="btns mt-2">
		<button type="button" style="text-decoration: none;" id="save_as_home" class="px-3 border-dark btn btn-light btn-link btn-sm text-dark"><small>Home</small></button>
		<input type="hidden" name="address_name_h" class="form-control mt-2" id="address_name_h" value="Home" data-error="#address-name-error">
		<button type="button" id="save_as_other" style="text-decoration: none; background-color: lightgray;" class="px-3 ml-2  btn btn-light btn-sm text-dark"><small>Other</small></button>
		<input type="text" name="address_name" id="address_name" class="form-control mt-2" style="display: none;" onchange="setAddressName(this)" placeholder="Eg. John’s home, Mom’s place etc">
	</div>
	<div id="address-name-error"></div>
</div>
<div id="infowindow-content" style="display: none;">
	<span id="place-name" class="title font-weight-bold"></span><br />
	<span id="place-address"></span>
</div>
<div class="save_address text-center">
	<button type="submit" class="px-3 btn btn-light btn-sm" style="margin-top: 4rem; background-color: var(--themePink); color: white; border-radius: 6px;"><b>Save address</b></button>
</div>
</form>

<?php $this->load->view("./layout/footer"); ?>
<script>
    function setAddressName(evnt) {
    $("#address_name_h").val(evnt.value);
}

$("#save_as_other").click(function() {
    $("#address_name").show();
    $("#address_name_h").val("");
});
$("#save_as_home").click(function() {
    $("#address_name").hide();
    $("#address_name_h").val("Home");
});


function process() {
	let backToPath = $("#backToPage").val();
    let length = $(".selected_address:checked").length;
    if (length > 1) {
        app.errorToast("Select One Address")
    }
    else if(length == 0){
        app.errorToast("Please select Atleast One Address")
    }
     else {
        let address = $(".selected_address:checked").val();
        // if (backToPath == "serviceOrder") {
            location.href = baseURL + "orderSummary/" + address;
        // } else {
            // location.href = baseURL + "create_address"; 
        // }
    }
}

let lat = 19.0717674;
let lng = 73.0016072;

function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: lat,
            lng: lng
        },
        zoom: 14,
        mapTypeId: 'roadmap',
        mapTypeControl: false,
    });

    $("#map_address_line").text('Palm Beach Rd, Sector 17, Vashi, Navi Mumbai, Maharashtra 400703');

    const input = document.getElementById("pac-input");
    const options = {
        fields: ["formatted_address", "geometry", "name"],
        strictBounds: false,
        types: ["establishment"],
    };

    const autocomplete = new google.maps.places.Autocomplete(input, options);

    autocomplete.bindTo("bounds", map);

    const infowindow = new google.maps.InfoWindow();
    const infowindowContent = document.getElementById("infowindow-content");

    infowindow.setContent(infowindowContent);

    const marker = new google.maps.Marker({
        map,
        anchorPoint: new google.maps.Point(0, -29),
    });

    autocomplete.addListener("place_changed", () => {
        infowindow.close();
        marker.setVisible(false);

        const place = autocomplete.getPlace();

        if (!place.geometry || !place.geometry.location) {
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
        console.log(`location ${place.geometry.location},name ${ place.name}.addredd ${place.formatted_address}`);
        $("#map_address_line").text(place.name + " " + place.formatted_address);
        $("#line_1").val(`${place.name}`);
        $("#line_2").val(`${place.formatted_address}`);
        var loc = `${place.geometry.location}`;
        var loc_long = loc.substr(1, 10, loc.indexOf(','));
        var loc_lat = loc.substr(13, 10);
        lng = loc_long;
        lat = loc_lat;
        $("#location_long").val(loc_long);
        $("#location_lat").val(loc_lat);
        $("#address_location").val(`${place.geometry.location}`);
    });
}

function deleteAddress(id) {
    let formData = new FormData();
    formData.set("address_id", id);
    app.request("delete_user_address", formData).then(response => {
        if (response.status === 200) {
            app.successToast(response.body);
            setTimeout(() => {
                location.href = baseURL + "user_manage_address";
            }, 500)
        } else {
            app.errorToast(response.body);
        }
    }).catch(error => {
        console.log(error);
        app.errorToast("Something went wrong")
    })
}

function changeAddress() {
    let address = $("#map_address_line").text();
    $("#line_1").val(`${address}`);
    $("#save_as_home").click();
    $("#location_long").val(lng);
    $("#location_lat").val(lat);
}

app.validation("save_customer_address", {
    line_1: 'required',
    address_name_h: 'required',
}, {
    line_1: 'Enter address',
    address_name_h: 'Enter address name',
}, (form) => {

    app.request("add_user_address", new FormData(form)).then(response => {
        if (response.status === 200) {
            app.successToast(response.body);
            $("#save_customer_address").trigger("reset");
            setTimeout(() => {
				let backToPath = $("#backToPage").val();
				if (backToPath == "serviceOrder") {
					location.href = baseURL + "user_manage_address/1";
				}else{
					location.href = baseURL + "user_manage_address";
				}

            }, 500)
        } else {
            app.errorToast(response.body);
        }
    }).catch(error => {
        console.log(error)
        app.errorToast("Something went wrong")
    })

});

</script>
