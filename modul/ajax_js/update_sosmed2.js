// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_sosmed2() {
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
	
function show_sosmed2(fb2,tw2,ig2,yt2) {
	xmlHttp = createXmlHttpRequest_sosmed2();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/update_sosmed2.php";
			
	
		url = url+"?get_fb2="+fb2
		+"&get_tw2="+tw2
		+"&get_ig2="+ig2
		+"&get_yt2="+yt2
		;
		xmlHttp.onreadystatechange = handleRespon_sosmed2;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_sosmed2(fb2,tw2,ig2,yt2)', 1000);
			}
	}
	
function handleRespon_sosmed2() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_sosmed2'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			jQuery('#dsosmed2').hide();
			jQuery('#dt_sosmed2').show();
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	