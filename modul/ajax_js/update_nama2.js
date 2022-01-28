// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_unama2() {
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
	
function show_unama2(fnm2,lnm2) {
	xmlHttp = createXmlHttpRequest_unama2();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/update_nama2.php";
			
	
		url = url+"?get_fnm2="+fnm2+"&get_lnm2="+lnm2;
		xmlHttp.onreadystatechange = handleRespon_unama2;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_unama2(fnm2,lnm2)', 1000);
			}
	}
	
function handleRespon_unama2() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_uname2'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			jQuery('#dt_name2').hide();
			jQuery('#dname2').show();
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	