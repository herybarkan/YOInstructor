// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_states() {
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
	
function show_states(states) {
	xmlHttp = createXmlHttpRequest_states();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/ajax_state.php";
			
	
		url = url+"?get_states="+states;
		xmlHttp.onreadystatechange = handleRespon_states;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_states(states)', 1000);
			}
	}
	
function handleRespon_states() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_states'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			jQuery('#state').select2();
			return false;
			}
			else {
				alert ("Error Monjer= "+xmlHttp.statusText);
				}
		}
	}
	