// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_sched2() {
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
	
function show_sched2(sched,kd_inst,pkg,curr,prc) {
	xmlHttp = createXmlHttpRequest_sched2();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/ajax_schedule2.php";
			
	
		url = url+"?get_sched="+sched
		+"&get_kd_inst="+kd_inst
		+"&get_pkg="+pkg
		+"&get_curr="+curr
		+"&get_prc="+prc
		;
		xmlHttp.onreadystatechange = handleRespon_sched2;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_sched2(sched,kd_inst,pkg,curr,prc)', 1000);
			}
	}
	
function handleRespon_sched2() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_sched'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			//jQuery('#dbio').hide();
			//jQuery('#pbio').show();
			initPayPalButton();
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	