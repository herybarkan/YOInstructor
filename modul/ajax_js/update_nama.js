// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_unama() {
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
	
function show_unama(fnm,lnm) {
	xmlHttp = createXmlHttpRequest_unama();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/update_nama.php";
			
	
		url = url+"?get_fnm="+fnm+"&get_lnm="+lnm;
		xmlHttp.onreadystatechange = handleRespon_unama;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_unama(fnm,lnm)', 1000);
			}
	}
	
function handleRespon_unama() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_unama'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			jQuery('#dt_name').hide();
			jQuery('#dname').show();
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	