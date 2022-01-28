// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_sch2() {
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
	
function show_sch2(mon_s,mon_e,tue_s,tue_e,wed_s,wed_e,thurs_s,thurs_e,fri_s,fri_e,sat_s,sat_e,sun_s,sun_e) {
	xmlHttp = createXmlHttpRequest_sch2();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/update_schedule2.php";
			
	
		url = url+"?get_mon_s="+mon_s
		+"&get_mon_e="+mon_e
		+"&get_tue_e="+tue_e
		+"&get_tue_s="+tue_s
		+"&get_wed_e="+wed_e
		+"&get_wed_s="+wed_s
		+"&get_thurs_s="+thurs_s
		+"&get_thurs_e="+thurs_e
		+"&get_fri_s="+fri_s
		+"&get_fri_e="+fri_e
		+"&get_sat_s="+sat_s
		+"&get_sat_e="+sat_e
		+"&get_sun_s="+sun_s
		+"&get_sun_e="+sun_e
		;
		xmlHttp.onreadystatechange = handleRespon_sch2;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_sch2(mon_s,mon_e,tue_s,tue_e,wed_s,wed_e,thurs_s,thurs_e,fri_s,fri_e,sat_s,sat_e,sun_s,sun_e)', 1000);
			}
	}
	
function handleRespon_sch2() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_sch2'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			jQuery('#dschedule2').show();
			jQuery('#dt_schedule2').hide();
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	