// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_sosmed() {
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
	
function show_sosmed(fb,tw,ig,yt) {
	xmlHttp = createXmlHttpRequest_sosmed();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/update_sosmed.php";
			
	
		url = url+"?get_fb="+fb
		+"&get_tw="+tw
		+"&get_ig="+ig
		+"&get_yt="+yt
		;
		xmlHttp.onreadystatechange = handleRespon_sosmed;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_sosmed(fb,tw,ig,yt)', 1000);
			}
	}
	
function handleRespon_sosmed() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_sosmed'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			jQuery('#dsosmed').hide();
			jQuery('#dt_sosmed').show();
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	