<html>
	<head>
		<title>Annyang speech recognition</title>
		<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.0.0/annyang.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link rel="stylesheet" href="main.css">
	</head>

	<body>
		<!--<div id='show' style="width:200px; height:200px; background-color: green; color: red;
		text-decoration: bold;"></div>-->
		<div id='alert'></div>
		
		<div id="left_side"></div>
		<div id="right_side"></div>
		
		<ul id='msg'>
			<li>Say "OPEN" to open the door</li>
			<li>Say "CLOSE" (if the door is already opened) to close the door</li>
		</ul>
		
		
		<script>
		if(annyang){
			
			//$("#show").hide("slow");
			//$("#show").show("slow");
			
			var hello = function(){
				$("#show").hide("slow");
				$("#show").show("slow");
			};
			
			var howru = function(){
				$("#show").html("I am fine , how about you?");
			}
			
			var what_is_your_name = function(){
				$("#show").html("My name is sisylana, yours?");
			}
			
			var add = function(text){
				$("#show").append("<div style='padding: 2px; width: 200px; height: 40px; background-color: black;'>"+text+"</div>");
			}
			
			var open = function(){
				$("#left_side").animate({left: '0px'});
				$("#right_side").animate({'left': '650px'});
			}
			
			var close = function(){
				$("#left_side").animate({left : '200px'});
				$("#right_side").animate({left:'400px'});
			}
			
			var commands = {
				'hello':  hello,
				'how are you' : howru,
				'what is your name' : what_is_your_name,
				'append *text' : add,
				'open' : open,
				'close' : close,
			};
			
			annyang.addCommands(commands);
			annyang.setLanguage('en');
			annyang.debug();
			annyang.start( { autorestart : false } );
				
		}else{
			alert("Your browser doesn't support annyang ! For batter result use google chrome");
		}
		</script>
	</body>
</html>