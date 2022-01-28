// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_city2() {
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
	
function show_city2(city2) {
	xmlHttp = createXmlHttpRequest_city2();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/ajax_city2.php";
			
	
		url = url+"?get_city2="+city2;
		xmlHttp.onreadystatechange = handleRespon_city2;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_city2(city2)', 1000);
			}
	}
	
function handleRespon_city2() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_city2'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			jQuery('#city2').select2();
			return false;
			}
			else {
				alert ("Error Monjer= "+xmlHttp.statusText);
				}
		}
	}
	