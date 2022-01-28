// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_certificate(nm,yr,img,des) {
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
	
function show_certificate(nm,yr,img,des) {
	xmlHttp = createXmlHttpRequest_certificate();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/in_certificate.php";
			
	
		url = url+"?get_nm="+nm+"&get_yr="+yr+"&get_img="+img+"&get_des="+des
		;
		xmlHttp.onreadystatechange = handleRespon_certificate;
		xmlHttp.open("POST", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_certificate(nm,yr,img,des)', 1000);
			}
	}
	
function handleRespon_certificate() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_certificate'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			jQuery('#dt_certificate').hide();
			jQuery('#dcertificate').show();
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	