// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_city() {
	var xmlHttp = false;
	if (window.ActiveXObject) {
		xmlHttp = new ActiveXObject ("Microsoft.XMLHTTP");
		}
		else {
			xmlHttp = new XMLHttpRequest();
			}
	if (!xmlHttp) {
		alert ("Ajax Error");
		}
		return xmlHttp;
	}
	
function show_city(city) {
	xmlHttp = createXmlHttpRequest_city();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/ajax_city.php";
			
	
		url = url+"?get_city="+city;
		xmlHttp.onreadystatechange = handleRespon_city;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_city(city)', 1000);
			}
	}
	
function handleRespon_city() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_city'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			jQuery('#city').select2();
			return false;
			}
			else {
				alert ("Error Monjer= "+xmlHttp.statusText);
				}
		}
	}
	