// JavaScript Document
var xmlHttp = false;

function createXmlHttpRequest_after() {
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
	
function show_after(after) {
	xmlHttp = createXmlHttpRequest_after();
	
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		
			//var url = "http://localhost/jagathita-m/res/ajax_kelurahan.php";
			var url = "modul/ajax/update_after.php";
			
	
		url = url+"?get_after="+after;
		xmlHttp.onreadystatechange = handleRespon_after;
		xmlHttp.open("GET", url, true)
		xmlHttp.send(null)
		}
		else {
			setTimeout ('show_after(after)', 1000);
			}
	}
	
function handleRespon_after() {
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			document.getElementById ('result_ba'). innerHTML = xmlHttp.responseText;
			//CKEDITOR.replace( 'description' );
			//CKEDITOR.replace( 'complainx' );
			//jQuery('#unama').select2();
			jQuery('#dt_ba').hide();
			
			//jQuery('#dt_ba').show();
			$('#bt_cancel_ba2').click(function()
	 		{
    			$('#dt_ba').show();
				//$('#d_ba').hide();
				//$('#result_ba').hide();
				//$('#dt_ba').show();
  			});
			
			return false;
			}
			else {
				alert ("Error Connection= "+xmlHttp.statusText);
				}
		}
	}
	