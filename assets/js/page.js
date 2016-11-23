var HOST_VIDEO = "https://sm-video-irvanfauzie.c9users.io/"; //http://sapamuslim.com:8081
//var HOST_CHAT = "http://sapamuslim.com:8082";
var HOST_CHAT = "http://www.sapamuslim.com:8082"; //https://sm-chat-irvanfauzie.c9users.io/
var jsReady = false;
var streamURL = "199.195.193.202";
var streamPort = "1935";
var streamName = "myStream";
var logoURL = base_url("assets/images/player.png");
// document.domain = 'www.sapamuslim.com';
document.domain = 'localhost';

//console.log(document.domain );
//var streamApp ="";

// $(document).ready(function(){
// 	if(window.addEventListener){
// 		window.addEventListener("load", loaded, false);
// 	}else if(window.attachEvent){
// 		window.attachEvent("onload", loaded);
// 	}else if(document.getElementById){
// 		window.onload=loaded;
// 	}
	
// 	/*if($("#viewer").length){
// 		streamApp = $("#viewer").attr("uname");
// 	}
// 	if($("#broadcaster").length){
// 		streamApp = $("#broadcaster").attr("uname");
// 	}*/
	
// 	$("#file").live("change", function(event){
// 		if(window.File && window.FileList && window.FileReader){
// 			var files = event.target.files;
// 			for(var i=0; i < files.length; i++){
// 				var file = files[i];
// 				if(!file.type.match("image")){
// 					alert("Invalid image file.");
// 					$("#file").val('');
// 					continue;
// 				}
// 				var picReader = new FileReader();
// 				picReader.addEventListener("load", function(event){
// 					var picFile = event.target,
// 					preview = '<a href="'+ picFile.result +'" target="_blank"><img src="'+ picFile.result +'" /></a>';
// 					if($("#file_preview").length){
// 						$("#file_preview").html(preview);
// 					}
// 					else $("#file_holder").append('<td id="file_preview">'+ preview +'</td>');
// 				});
// 				picReader.readAsDataURL(file);
// 			}
// 		}
// 	});
	
// 	$(window).resize(loaded);
// });
function isReady(){
	return jsReady;
}
function getStreamURL(){
	return streamURL;
}
function getStreamPort(){
	return streamPort;
}
function getStreamApp(){
	return streamApp;
}
function getStreamName(){
	return streamName;
}
function sendRunningText(value){
	document.getElementById("viewer").sendRunningText(value);
}
function sendToJavaScript(value){
	//document.forms["form1"].output.value += "ActionScript says: " + value + "\n";
}
function connectFailed(){
	alert('You rejected permission.!');
	console.log('gagal konek ato dirijek');
}
function streamFailed(){
	alert('Stream failed!');
	console.log('streaming gagal, bisa karena ga ada yg pake room ato nama room salah');
}
function streamSuccess(){
	alert('Stream start!');
	console.log('streaming sukses');
}
function rand(min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
function setLoginName(name){
	$('#loginName').html(name);
}
function iFresponse(st, id){
	if(st == 1){
		setTimeout(iFtimeout, 1000);
		$("#"+ id).fadeOut();
	}else if(st == 2){
		setTimeout(iFtimereload, 1000);
		$("#"+ id).fadeOut();
	}else if(st == 3){
		setTimeout(iFreferrer, 2000);
	}else if(st == 4){
		$("#"+ id).get(0).reset();
		$("#"+ id).slideDown();
	}
}
function iFtimeout(){
	setTimeout(function(){
		$(".ifclose").click();
	}, 2000);
}
function iFtimereload(){
	setTimeout(function(){
		window.location.reload();
	}, 1000);
}
function iFreferrer(){
	window.location.href = $("#reff").attr("href");
}
function iFtoggle(id){
	$("#"+ id).toggle();
}
function is_chrome(){
	return /chrome/i.test(navigator.userAgent.toLowerCase());
}
function base_url(id){
	return "<?=config_item('base_url')?>" + id;
}
function site_url(id){
	return "<?=config_item('base_url')?>" + id;
}
function loaded(){
	$("#page-container").css({"display":"block"});
}
function popup(tp, url, width){
	$("#ifpopcontent").html('<center><img class="ifloading" src="'+ base_url('static/i/loading.gif') +'" alt="Loading.." title="Loading.."></center>');
	
	if(!width.isNaN){
		width = is_chrome() ? width +85 : width;
	}
	
	if(width == "98%"){
		$("#ifbox").width(width).height("95%");
	}
	else $("#ifbox").width(width).height("auto");
	
	$("#ifbox").bPopup().close(); 
	
	switch(tp){
		case 1:
			$("#ifbox").bPopup({loadUrl:url, contentContainer:"#ifpopcontent"});
			break;
		case 2:
			$("#ifbox").bPopup({loadUrl:url, contentContainer:"#ifpopcontent", follow:false});
			break;
		case 3:
			$("#ifbox").bPopup({loadUrl:url, contentContainer:"#ifpopcontent", modalClose:false});
			break;
		default:
			$("#ifbox").bPopup({loadUrl:url, contentContainer:"#ifpopcontent", follow:false, modalClose:false});
			break;
	}
	
	return false;
}
function iForm_s(id){
	$("#iform_r"+ id).html('<div style="text-align:center;padding:9px 0"><img src="'+ base_url('static/i/loading.gif') +'" alt="Please wait.." title="Please wait.." style="width:auto"></div>').fadeIn(function(){ $("#iform_f"+ id).slideUp(); });
	$("#iform_f"+ id).ajaxSubmit({
		success: function(response){
			$("#iform_r"+ id).html(response);
		},
		timeout: (60 * 1000),
		error: function(response){
			$("#iform_r"+ id).html('<div class="error-box">'+ response.status +' - '+ response.statusText +'</div>');
			$("#iform_f"+ id).slideDown();
		}
	});
	return false;
}
function dochange(src, val, sel, dis){
	var dataString='source='+ src +'&value='+ val +'&selected='+ sel +'&disabled='+ dis;
	$.ajax({
		type: "GET",
		url: site_url('process/autocomplete'),
		data: dataString,
		cache: false,
		success: function(response){
			$("#"+ src).html(response);
		},
		error: function(response){
			alert(response.status +' - '+ response.statusText);
		}
	});
}

function host_info(){
	$(".footer input[type='text']").attr("readonly", "readonly").addClass("disabled");
	$(".footer input[type='submit']").attr("disabled", "disabled").addClass("disabled");
	$(".footer form").ajaxSubmit({
		success: function(response){
			$(".footer input[type='text']").removeAttr("readonly").removeClass("disabled");
			$(".footer input[type='submit']").removeAttr("disabled").removeClass("disabled");
		},
		timeout: (60 * 1000),
		error: function(response){
			$("#iform_r"+ id).html('<div class="error-box">'+ response.status +' - '+ response.statusText +'</div>');
			$(".footer input[type='text']").removeAttr("readonly").removeClass("disabled");
			$(".footer input[type='submit']").removeAttr("disabled").removeClass("disabled");
		}
	});
	return false;
}
function host_onair(id){
	var dataString='status=1';
	$.ajax({
		type: "POST",
		url: site_url('proc/host-area/onair'),
		data: dataString,
		cache: false,
		success: function(response){
			var json = {
				room: id,
				url: "host"
			};
			$("#on_air").html('<iframe frameborder="0" scrolling="no" src="'+ HOST_VIDEO +'?'+ rand(1, 100) +'#'+ encodeURI(JSON.stringify(json)) +'"></iframe>');
			$("#on_chat").html('<iframe id="frame_chat" frameborder="0" scrolling="no" src="'+ HOST_CHAT +'?'+ rand(1, 100) +'#'+ encodeURI(JSON.stringify(json)) +'"></iframe>');
		},
		error: function(response){
			alert(response.status +' - '+ response.statusText);
		}
	});
}
function is_onair(id, urls){
	var json = {
		room: id,
		url: urls
	};
	$("#on_air").html('<iframe frameborder="0" scrolling="no" src="'+ HOST_VIDEO +'?'+ rand(1, 100) +'#'+ encodeURI(JSON.stringify(json)) +'"></iframe>');
	$("#on_chat").html('<iframe id="frame_chat" frameborder="0" scrolling="no" src="'+ HOST_CHAT +'?'+ rand(1, 100) +'#'+ encodeURI(JSON.stringify(json)) +'"></iframe>');
}

function checkSession(){
	//alert($('#frame_chat').contents().find('input[type=submit]').val());	
}

function chat_room(id,name,is_logged,userId,userType){
	if(typeof(name)=='undefined' || name==''){
		name = "Guest";	
	}
	
	if(typeof(is_logged)=='undefined' || name==''){
		is_logged = false;	
	}
	
	var json = {
		name: name,
		userId: userId,
		userType: userType,
		room: id,
		url: 123,
		logged: is_logged
	};
	
	console.log(HOST_CHAT +'?'+ rand(1, 100) +'#'+ encodeURI(JSON.stringify(json)));
	$("#on_chat").html('<iframe id="frame_chat" frameborder="0" scrolling="no" src="'+ HOST_CHAT +'?'+ rand(1, 100) +'#'+ encodeURI(JSON.stringify(json)) +'"></iframe>');
	
//	$('#frame_chat').die("load");
//	$('#frame_chat').load(function() {
//		alert('loaded');
//	});
	//alert($('#frame_chat').contents().find('input[type=submit]').val());
}
function xchat(){
	var msg = $("#message").val();
    msg = msg.replace(/^\s+|\s+$/g, '');
    if(!msg.length) return false;
	var iframe = $("#frame_chat");
	if(iframe.length){
		window.frames[1].frameElement.contentWindow.messageData(msg);
		//iframe.contentWindow.messageData(msg);
	}
	return false;
}