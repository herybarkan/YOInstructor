// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_src(src) {
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
	
function show_src(src) {
	xmlHttp = createXmlHttpRequest_src();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/search.php";
			
	
		url = url+"?get_src="+src;
		xmlHttp.onreadystatechange = handleRespon_src;
		xmlHttp.open("POST", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_src(src)', 1000);
			}
	}
	
function handleRespon_src() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_src'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			//jQuery('#dt_certificate').hide();
			jQuery('#search').select2();
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	