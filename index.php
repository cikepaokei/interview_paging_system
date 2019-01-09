<?PHP
    header("Content-type: text/html; charset=utf-8"); 

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>网招大屏幕 | QMQ（内测）</title>
	<link rel="stylesheet" href="../theme/default/css/bootstrap.min.css">
    <script src="../js/jquery/jquery-3.3.1.min.js"></script>
    <script src="../theme/default/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="interview_index.css?v=1809152004">
    <script src="js/jquery.vticker.min.js"></script>

    <script> 
	  function waiting(){
	  	$("#001").removeClass();
	  	$("#001").addClass("animate_waiting");
	  	$("#profile1").removeClass();
	  	$("#profile1").addClass("profile");  	
	  	$("#icon1").removeClass("icon_default","icon_white");  	
	  	$("#icon1").addClass("icon_default");  	
	  	$("#state1text1").removeClass();
	  	$("#state1text2").removeClass();
	  	$("#state1text1").addClass("state1");
	  	$("#state1text2").addClass("state3");
	  	$("#name1").removeClass();
	  	$("#stuid1").removeClass();
	  	$("#name1").addClass("name");
	  	$("#stuid1").addClass("stuid");
	  	$("#a1").removeClass();
	    $("#a2").removeClass();
	    $("#a3").removeClass();
	    $("#a4").removeClass();
	    $("#a5").removeClass();
	    $("#a6").removeClass();
	    $("#a1").addClass("animate13");
	    $("#a2").addClass("animate14");
	    $("#a3").addClass("animate15");
	    $("#a4").addClass("animate16");
	    $("#a5").addClass("animate17");
	    $("#a6").addClass("animate18");
	};

	  function enter(){
	  	$("#001").removeClass();
	    $("#001").addClass("animate_enter");
	    $("#profile1").removeClass();
	  	$("#profile1").addClass("profile_white");  	
	  	$("#icon1").removeClass("icon_default","icon_white");  	
	  	$("#icon1").addClass("icon_white");
	  	$("#state1text1").removeClass();
	  	$("#state1text2").removeClass();
	  	$("#state1text1").addClass("state4");
	  	$("#state1text2").addClass("state2");
	  	$("#name1").removeClass();
	  	$("#stuid1").removeClass();
	  	$("#name1").addClass("name_enter");
	  	$("#stuid1").addClass("stuid_enter");
	  	$("#a1").removeClass();
	    $("#a2").removeClass();
	    $("#a3").removeClass();
	    $("#a4").removeClass();
	    $("#a5").removeClass();
	    $("#a6").removeClass();
	    $("#a1").addClass("animate7");
	    $("#a2").addClass("animate8");
	    $("#a3").addClass("animate9");
	    $("#a4").addClass("animate10");
	    $("#a5").addClass("animate11");
	    $("#a6").addClass("animate12");
	    $("#audio1").attr("src","sfx_store_sting_enter.wav");
	  };

	  function interview(){
	  	$("#001").removeClass();
	  	$("#001").addClass("animate_interview");
	  	$("#profile1").removeClass();
	  	$("#profile1").addClass("profile");  	
	  	$("#icon1").removeClass("icon_default","icon_white");  	
	  	$("#icon1").addClass("icon_default");
	  	$("#state1text1").removeClass();
	  	$("#state1text2").removeClass();
	  	$("#state1text1").addClass("state1");
	  	$("#state1text2").addClass("state2");
	  	$("#name1").removeClass();
	  	$("#stuid1").removeClass();
	  	$("#name1").addClass("name");
	  	$("#stuid1").addClass("stuid");
	  	$("#a1").removeClass();
	    $("#a2").removeClass();
	    $("#a3").removeClass();
	    $("#a4").removeClass();
	    $("#a5").removeClass();
	    $("#a6").removeClass();
	    $("#a1").addClass("animate1");
	    $("#a2").addClass("animate2");
	    $("#a3").addClass("animate3");
	    $("#a4").addClass("animate4");
	    $("#a5").addClass("animate5");
	    $("#a6").addClass("animate6");
	  };

	  function complete(){
	  	$("#001").removeClass();
	    $("#001").addClass("animate_complete");
	    $("#profile1").removeClass();
	  	$("#profile1").addClass("profile_white");  	
	  	$("#icon1").removeClass("icon_default","icon_white");  	
	  	$("#icon1").addClass("icon_white");
	  	$("#state1text1").removeClass();
	  	$("#state1text2").removeClass();
	  	$("#state1text1").addClass("state4");
	  	$("#state1text2").addClass("state2");
	  	$("#name1").removeClass();
	  	$("#stuid1").removeClass();
	  	$("#name1").addClass("name_complete");
	  	$("#stuid1").addClass("stuid_complete");
	  	$("#a1").removeClass();
	    $("#a2").removeClass();
	    $("#a3").removeClass();
	    $("#a4").removeClass();
	    $("#a5").removeClass();
	    $("#a6").removeClass();
	    $("#a1").addClass("animate7");
	    $("#a2").addClass("animate8");
	    $("#a3").addClass("animate9");
	    $("#a4").addClass("animate10");
	    $("#a5").addClass("animate11");
	    $("#a6").addClass("animate12");
        $("#audio1").attr("src","close.wav");
	  };

	$(document).ready(function() {
		function time() {
			var date = new Date();
			var n = date.getFullYear();
			var y = date.getMonth()+1;
			var t = date.getDate();
			var h = date.getHours();
			var m = date.getMinutes();
			var s = date.getSeconds();
			
			$('.time span').eq(0).html(h);
			$('.time span').eq(1).html(m);
			$('.time span').eq(2).html(s);
			for (var i = 0; i < $('div').length; i++) {
				if ($('div').eq(i).text().length == 1) {
					$('div').eq(i).html(function(index, html) {
						return 0 + html;
					});
				}
			}
		}
		time();
		setInterval(time, 1000);
	});

		function getinfo()
		{
		  var xmlhttp;    

		  if (window.XMLHttpRequest)
		  {
		    // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		    xmlhttp = new XMLHttpRequest();
		  }
		  else
		  {
		    // IE6, IE5 浏览器执行代码
		    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function()
		  {
		    if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
			  var allinfo = xmlhttp.responseText;
			  var arr = allinfo.split(",");
			  document.getElementById("stuid1").innerHTML = arr[0];
		      document.getElementById("name1").innerHTML = arr[1];
		      document.getElementById("state1text1").innerHTML = arr[2];
		      document.getElementById("state1text2").innerHTML = arr[3];
		      
		      document.getElementById("stuid2").innerHTML = arr[4];
		      document.getElementById("name2").innerHTML = arr[5];
		      document.getElementById("state2text1").innerHTML = arr[6];
		      document.getElementById("state2text2").innerHTML = arr[7];
		      
		      document.getElementById("stuid3").innerHTML = arr[8];
		      document.getElementById("name3").innerHTML = arr[9];
		      document.getElementById("state3text1").innerHTML = arr[10];
		      document.getElementById("state3text2").innerHTML = arr[11];
		      document.getElementById("li1").innerHTML = arr[13];
		      var default_audio = document.getElementById("audio2").getAttribute("src");
		      var get_audio = arr[14];
		      if(default_audio != get_audio){
		      	document.getElementById("audio2").setAttribute("src", arr[14]);
		      }
		      
		      
		      
		      var a = arr[12];
		      var b = document.getElementById("sound").innerHTML;
		      if(a!=b && a==0){
		      	waiting();
		      	b = arr[12];
		      }
		      if(a!=b && a==1){
		      	enter();
		      	b = arr[12];
		      }
		      if(a!=b && a==2){
		      	interview();
		      	b = arr[12];
		      }
		      if(a!=b && a==3){
		      	complete();
		      	b = arr[12];
			  }
			  document.getElementById("sound").innerHTML = b;
		      
		    }
	      }
		  xmlhttp.open("GET","info_get.php",true);
		  xmlhttp.send();
		}
		getinfo();
		setInterval(getinfo,1000);

		
	</script>
</head>
<body class="screen" >
	<div class="connect">

		<div class="nav">
			<div class="time">
				<span></span>:
				<span></span>:
				<span></span>
			</div>
			<div class="team"></div>
			<div class="notice" id="notice">
				<ul>
			        <li>在 「面试等候」 过程中有任何疑问，可以向现场工作人员咨询</li>
			        <li>「请大家保持场地环境干净整洁，谢谢」</li>
			        <li>「请同学们携带好自己的随身物品，以免丢失」</li>
			        <li>这里是 「长安大学兴华学院-桃成蹊工作室-初试现场」</li>
			        <li>可以向工作人员询问 「您的队列位置」 ，请同学们举手示意</li>
			        <li>等候室设有 「饮水处」 ，「卫生间」在出门右拐处</li>
			        <li id="li1"></li>
			        <li></li>

			    </ul>
			</div>
			<p id="sound" style="display: none;"></p>
			<p id="a"></p>
			
		</div>
		
		<div class="waiting">
			<div class="profile" id="profile1">
				<span class="glyphicon glyphicon-user icon_default" id="icon1">
				</span>
			</div>
			<div class="student">
				<div class="name" id="name1"></div>
				<div class="stuid" id="stuid1"></div>
			</div>
			<div class="state">
				<div class="state1" id="state1text1"></div>
				<div class="state3" id="state1text2"></div>
			</div>
			<div class="animate_waiting" id="001">
				<div class="animate13" id="a1"></div>
				<div class="animate14" id="a2"></div>
				<div class="animate15" id="a3"></div>
				<div class="animate16" id="a4"></div>
				<div class="animate17" id="a5"></div>
				<div class="animate18" id="a6"></div>
			</div>
		</div>
<br>

<audio id="audio1" src=""  autoplay="autoplay">
Your browser does not support the audio element.
</audio>

<audio id="audio2" src=""  autoplay="autoplay">
Your browser does not support the audio element.
</audio>


		<div class="waiting">
			<div class="profile" id="profile1">
				<span class="glyphicon glyphicon-user icon_default" id="icon1">
				</span>
			</div>
			<div class="student">
				<div class="name" id="name2"></div>
				<div class="stuid" id="stuid2"></div>
			</div>
			<div class="state">
				<div class="state1" id="state2text1"></div>
				<div class="state3" id="state2text2"></div>
			</div>
			<div class="animate_waiting" id="001">
				<div class="animate13" id="a1"></div>
				<div class="animate14" id="a2"></div>
				<div class="animate15" id="a3"></div>
				<div class="animate16" id="a4"></div>
				<div class="animate17" id="a5"></div>
				<div class="animate18" id="a6"></div>
			</div>
		</div>

		<div class="waiting">
			<div class="profile" id="profile1">
				<span class="glyphicon glyphicon-user icon_default" id="icon1">
				</span>
			</div>
			<div class="student">
				<div class="name" id="name3"></div>
				<div class="stuid" id="stuid3"></div>
			</div>
			<div class="state">
				<div class="state1" id="state3text1"></div>
				<div class="state3" id="state3text2"></div>
			</div>
			<div class="animate_waiting" id="001">
				<div class="animate13" id="a1"></div>
				<div class="animate14" id="a2"></div>
				<div class="animate15" id="a3"></div>
				<div class="animate16" id="a4"></div>
				<div class="animate17" id="a5"></div>
				<div class="animate18" id="a6"></div>
			</div>
		</div>

<div class="demo" style="display: none;">
	<div class="waiting">
			<div class="profile">
				<span class="glyphicon glyphicon-user" style="font-size: 124px;">
				</span>
			</div>
			<div class="student">
				<div class="name">Tony</div>
				<div class="stuid">IA002</div>
			</div>
			<div class="state">
				<div class="state1"></div>
				<div class="state3">Waiting</div>
			</div>
			<div class="animate_waiting" id="002">
				<div class="animate13"></div>
				<div class="animate14"></div>
				<div class="animate15"></div>
				<div class="animate16"></div>
				<div class="animate17"></div>
				<div class="animate18"></div>
			</div>
		</div>

		<div class="enter">
			<div class="profile_white">
				<span class="glyphicon glyphicon-user icon_white">
				</span>
			</div>
			<div class="student">
				<div class="name_enter">Jack</div>
				<div class="stuid_enter">IA004</div>
			</div>
			<div class="state">
				<div class="state4">Please</div>
				<div class="state2">Come in</div>
			</div>
			<div class="animate_enter">
				<div class="animate7"></div>
				<div class="animate8"></div>
				<div class="animate9"></div>
				<div class="animate10"></div>
				<div class="animate11"></div>
				<div class="animate12"></div>
			</div>
		</div>

		<div class="interview">
			<div class="profile">
				<span class="glyphicon glyphicon-user icon_default">
				</span>
			</div>
			<div class="student">
				<div class="name">Brown</div>
				<div class="stuid">IA003</div>
			</div>
			<div class="state">
				<div class="state1">Now</div>
				<div class="state2">interview</div>
			</div>
			<div class="animate_interview">
				<div class="animate1"></div>
				<div class="animate2"></div>
				<div class="animate3"></div>
				<div class="animate4"></div>
				<div class="animate5"></div>
				<div class="animate6"></div>
			</div>
		</div>



		<div class="complete">
			<div class="profile_white">
				<span class="glyphicon glyphicon-user icon_white">
				</span>
			</div>
			<div class="student">
				<div class="name_complete">Jack</div>
				<div class="stuid_complete">IA004</div>
			</div>
			<div class="state">
				<div class="state4">Complete</div>
				<div class="state2">interview</div>
			</div>
			<div class="animate_complete">
				<div class="animate7"></div>
				<div class="animate8"></div>
				<div class="animate9"></div>
				<div class="animate10"></div>
				<div class="animate11"></div>
				<div class="animate12"></div>
			</div>
		</div>
</div>
		
		
		<script>
			$('.notice').vTicker({ 
			showItems : 1, //显示滚动行数 
			pause : 5000, //滚动间歇 
			speed : 500, //滚动速度 
			animation : "fade", 
			mousePause : false, 
			direction : "up", //滚动方向 
			});
		</script>
	</div>
</body>
</html>

