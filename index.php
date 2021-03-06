<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animation</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="animate.css"> -->
	<!-- <link rel="stylesheet" href="magic.css"> -->

	<style>
		body {
			padding: 0 15px 70px;
		}
		.box-1 {
			padding: 20px;
			background-color: green;
			transition-property: all;
			transition-duration: 0.9s;
			transition-timing-function: cubic-bezier(0.0,0.5,0.5,0.1);
			transition-timing-function: steps(3, end);
			transition-delay: 0.1s;
			animation-duration: 3s;
		}		

/*		.box-1:hover{
			padding: 40px;
			background-color: blue;
			border-radius: 40px;
		}*/
		.box-1.active{
			color: red;
		}
		
		.box-1.cds{
			color: green;
		}

		.progress {
			position: relative;
			width: 20px;
			height: 15px;
			background-color: blue;
			border 2px solid black;
			animation: myAnimation 3s infinite alternate;
		}

		@keyframes myAnimation {
			from {
				left: 0;
			}
			to {
				left: calc(100% - 20px);
			}
		}

		#box-2{
			height: 200px;
			width: 200px;
			background-color: red;
		}

		body {
			position: relative;
		}

		#box-3{
			display: none;
			height: 200px;
			width: 200px;
			background-color: yellow;
			position: fixed;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
		}

		#box-5{
			background-color: orange;
			padding: 10px;
			animation: myFadeIn 3s;
		}

		@keyframes myFadeIn {
			from {opacity: 0;}
			to {opacity: 1;}
		}

		#box-6{
			position: absolute;
			top: 0;
			left: 0;
			width: 150px;
			height: 150px;
			border-radius: 50%;
			background-color: red;
			animation-name: ballAnimation;
			animation-duration: 10s;
			animation-iteration-count: 3;
			animation-timing-function: linear;
			animation-fill-mode: forwards;
			animation-direction: alternate-reverse;
			/*animation: ballAnimation 3s infinite;*/
		}

		#box-6:hover{
			animation-play-state: paused;
		}

		@keyframes ballAnimation {
			0% {
				left:10%;
				top: 10%;
			}

			50% {
				left:50%;
				top: 50%;
				background-color: yellow;
			}

			80% {
				top:30%;
				left: 70%;
				background-color: red;
			}

			100% {
				top:10%;
				left:10%;
				background-color: blue;
			}
		}

		ul li {
			padding: 10px;
			background-color: red;
			border: 1px solid black;
		}

		li span {
			background-color: green
		}

		#ajax-resp {
			padding: 15px;
			margin-top: 15px;
			margin-bottom: 80px;
			border: 1px solid black;
		}

		#loader {
			display: none;
			position: fixed;
			width: 50%;
			top: 50%;
			left: 50%;
			transform: translateX(-50%) translateY(-50%);
			margin: auto;
			padding: 40px 60px 40px 40px;
			background-color: yellow;
			text-align: center;
			vertical-align: middle;
			/*overflow: scroll;*/
		}

		.spiner{
			position: absolute;
			right: 10px;
			top: calc(50% - 25px);			
			width: 50px;
			height: 50px;
			background-color: green;
			animation-name: spiner;
			animation-duration: 1s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
		}
		.spiner-m{
			position: absolute;
			width: 20px;
			height: 20px;
			top: calc(50% - 10px);
			right: calc(50% - 10px);
			background-color: yellow;
			animation-name: spiner-m;
			animation-duration: 1s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
		}

		@keyframes spiner {
			0% {
				transform: rotate(0deg);
			}
			100% {
				transform: rotate(360deg);				
			}
		} 

		@keyframes spiner-m {
			0% {
				transform: rotate(0deg);
			}
			100% {
				transform: rotate(-720deg);				
			}
		} 

		#user-check {
			color: red;
		}
		.declined,
		.accepted {
			position: relative;
		}
		.declined::after,
		.accepted::after {
			content: '';
			display: inline-block;
			position: absolute;
			top: 50%;
			right: 10px;
			width: 27px;
	    height: 29px;
			background-image: url(img/accept.png);
			background-repeat: no-repeat;
			background-size: contain;
			background-position: center;
		}

		.declined::after {
			background-image: url(img/cross.png);
		}

	</style>

</head>
<body>
<a style="display: inline-block; padding: 40px; border: 1px solid black;" href="ui.php">ui</a>
	<input class="form-control" type="text" id="inp-1">
	<input class="form-control" type="checkbox" id="inp-2">

	<select class="form-control" name="sel" id="sel-1">
		<option value="0">item 1</option>
		<option value="1">item 2</option>
		<option value="2">item 3</option>
		<option value="3">item 4</option>
	</select>
	<button class="btn" id="btn-1">hide</button>	
	<button class="btn" id="btn-2">show</button>	

	<p id="box-1" class="box-1 animated tada">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, maiores, quos. At, animi, facilis. Alias itaque ab minima rerum, eaque animi nesciunt harum nemo est cumque voluptas, qui reprehenderit atque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, maiores, quos. At, animi, facilis. Alias itaque ab minima rerum, eaque animi nesciunt harum nemo est cumque voluptas, qui reprehenderit atque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, maiores, quos. At, animi, facilis. Alias itaque ab minima rerum, eaque animi nesciunt harum nemo est cumque voluptas, qui reprehenderit atque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, maiores, quos. At, animi, facilis. Alias itaque ab minima rerum, eaque animi nesciunt harum nemo est cumque voluptas, qui reprehenderit atque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, maiores, quos. At, animi, facilis. Alias itaque ab minima rerum, eaque animi nesciunt harum nemo est cumque voluptas, qui reprehenderit atque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, maiores, quos. At, animi, facilis. Alias itaque ab minima rerum, eaque animi nesciunt harum nemo est cumque voluptas, qui reprehenderit atque.</p>

	<div id="box-2" class="magictime twisterInDown"></div>
	<!-- <div class="progress"></div> -->
	<div id="box-3">Hello world</div>

	<p id="box-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam, adipisci sunt facilis temporibus nulla mollitia voluptate obcaecati, quisquam est quaerat vel similique magnam cupiditate necessitatibus quod eaque deleniti animi!</p>

	<p id="box-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore consequatur corporis eaque quibusdam expedita alias. Sapiente soluta enim labore. Ex sed et, aut expedita facere quis quae deleniti quo molestiae.</p>
	<div id="box-6"></div>

	<ul id="list">
		<li><span>text 1</span></li>
		<li><span>text 2</span></li>
		<li class="active"><span>text 3</span></li>
		<li><span>text 4</span></li>
		<li><span>text 5</span></li>
	</ul>

	<button class="btn" id="ajax-btn">ajax-1</button>
	
	<p id="ajax-resp"></p>

		
	<div id="loader">
		<p id="loader-txt"></p>		
		
		<div class="spiner">
			<div class="spiner-m"></div>		
		</div>
	</div>

	<button class="btn" id="ajax-btn-1">$.ajax()</button>
	<p id="ajax-resp-1"></p>

	<br>
	<label>name <input type="text" class="form-control" id="usuer-input" placeholder="Enter name">
	</label>
	<button class="btn" id="user-btn">Check</button>
	<p id="user-check"></p>

	<br><br>
	<input id="input-get" name="get-field" type="text" class="form-control"><br>
	<button class="btn" id="get-btn">Get</button>
	<p id="get-cont"></p>

	<br><br>
	<button class="btn btn-alert" id="get-script">Get script</button>
	<br><br>
	<p id="animated-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, possimus, architecto excepturi maiores quidem id veritatis, debitis modi optio reiciendis porro asperiores quam in blanditiis sapiente suscipit expedita. Esse, consequatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, possimus, architecto excepturi maiores quidem id veritatis, debitis modi optio reiciendis porro asperiores quam in blanditiis sapiente suscipit expedita. Esse, consequatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, possimus, architecto excepturi maiores quidem id veritatis, debitis modi optio reiciendis porro asperiores quam in blanditiis sapiente suscipit expedita. Esse, consequatur.</p>
	<button class="btn" id="animate-p">animate p</button>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>

<script>

	$(function(){  

		loader(true);

		$('#animate-p').on('click', function(){
			console.log('animate me');
			$('#animated-p').animate({
				width: [ "toggle", "swing" ],
		    height: [ "toggle", "linear" ],
		    opacity: "toggle"
			}, 500, function(){
				console.log('animation complete');
			});
		});

		$('#get-script').on('click', function(){
			$.getScript('ajax/script.js').then(
					function(res) {

					},
					function(req) {
						console.log(req.status);
					}
				);
		});

		$('#get-btn').on('click', function(){

			$.get('ajax/get-serv.php',
				{ name: $('#input-get').val() }

				).then(
					function(res){
						$('#get-cont').html( $('#get-cont').html()+res );
					},
					function(req){
						console.log(req.status);
					}
				)
		});

    $('#ajax-btn').click(function(){
    		
			$.post('ajax/example.html').then(
	    	function(res){
	    		$('#loader').fadeIn();
	    		var user = JSON.parse(res);
	    		var users = JSON.parse(res);

					setTimeout(function(){
		    		$('#loader').fadeOut();

		    	// 	$('#ajax-resp').html(`
							// <ul>
							// 	<li>user.name</li>
							// 	<li>user.surname</li>
							// 	<li>user.age</li>
							// 	<li>user.sex</li>
							// </ul>
		    	// 		`);
		    		var data='<table>';

		    		$.each(users, function(i, item){
		    			data+=`	
		    					<tr>
										<td>${item.name}</td>
										<td>${item.surname}</td>
										<td>${item.age}</td>
										<td>${item.sex}</td>								
									</tr>
		    			`;
		    		});
		    		$('#ajax-resp').html(data+'</table>');

	    		}, 1000);
	    		
	    	},
	    	function(req){
	    		console.log(req.status);		    			    		
	    		$('#loader').fadeOut();
	    	});
        
    });

    $('#ajax-btn-1').bind("click", function() {
    	$.ajax({
    		// url: 'ajax/user.json',
    		url: 'ajax/login.php',
    		type: 'POST',
    		data: ({name:'Admin', age:123}),
    		dataType: 'html',
    		beforeSend: function() {
    			$('#loader').fadeIn();
    		},
    		success: function(res) { 
    			// setTimeout(function(){
	    			$('#loader').fadeOut();   				
	    			$('#ajax-resp-1').html(res);
    			// }, 800);
    		 }
    	})
    });

    $('#usuer-input').on('keyup', function() {
    	$.ajax({
    		url: 'ajax/check.php',
    		type: 'POST',
    		data: ({ name: ($('#usuer-input').val().toLowerCase()) }),
    		dataType: 'html',
    		beforeSend: function() {
					$('#loader').fadeIn();

    		},
    		success: function(res) {
    			$('#loader').fadeOut();
    			console.log(res);

    			if (res) {
    				$('#usuer-input').closest('label').addClass('accepted');
    				$('#usuer-input').closest('label').removeClass('declined');
    				$('#user-check').fadeOut();

    			} else {
	  				$('#usuer-input').val('');
    				var str = 'You cannot chose this name'
    				$('#usuer-input').closest('label').removeClass('accepted');
    				$('#usuer-input').closest('label').addClass('declined');

    				$('#user-check').fadeIn();
    				$('#user-check').text(str);
    			}

    		}
    	});
    });

		function loader(res) {
			var count = 3;
			var str = 'Waiting for response from server...';

			var interval = setInterval(function() {
				if (count >= 0){
					var str1 = str.slice(0, str.length-count);
					count--;
				} else {
					count = 3;
				}

				$('#loader-txt').text(str1);
				
			}, 500);
		}

	});	
</script>


<!-- 	<script>

		$('#list').on('click', 'li.active', function(event){
				console.log(event);
				console.log(event.target);
		});

		$('#box-1').on('click', function(){
				if( !$(this).hasClass('infinite')){
					$(this).addClass('infinite');
				} else {
					$(this).removeClass('infinite');					
				}
		});

		$('#box-4').on('mouseover', function() {
				$(this).animate({
				padding: '+=10',
				opacity: '1',
				fontSize:'16px'
			},
				300,
				function(){ console.log('animation finised')}
			)
		}).on('mouseleave', function() {
				$(this).animate({
				padding: '0',
				opacity: '0.5',
				fontSize:'14px'
			},
				300,
				function(){ console.log('animation finised')}
			)
		});


		$('#btn-1').on('click', function(){
			// $('#box-1').hide();
			// $('#box-1').fadeIn("slow");
			// $('#box-1').slideUp();
			$('#box-1').fadeToggle(function(){

				$('#box-2').html('<p>Animation complete</p>');

				$('#box-3').fadeIn(function(){
					$(this).delay(800).fadeOut(800, function(){
						$(this).remove();						
					});
				});

			});
		});	

		$('#btn-2').on('click', function(){
			// $('#box-1').show();
			// $('#box-1').fadeOut("slow");
			// $('#box-1').slideDown();
		});

		console.log($.support);
		// console.log($('#box-1').text());
		console.log($('p').text());

		$('p').each(function(i, elem) {
			console.log(i);
			console.log(this);
			console.log(elem);
		})

		$('#inp-1').val('Hello world');

		setTimeout(function() {
			console.log($('#inp-1').val());			
		},5000);

		$('#sel-1').val(1);
		
		$('#inp-2').prop('checked', 'checked');
		$('#inp-2').attr('title', 'I\'m checked already!');

		console.log($('#box-1').css('background-color'));

		// $('p').on('click', function () {
		// 	$(this).toggleClass('active', 'cds');

		// 	 var times = 1;

		// 	  function go() {
		// 	    if (times % 2) {
		// 				console.log(times);
		// 	    } else {
		// 				console.log(times);

		// 	    }

		// 	  }

		// 	  go();

		// 	  this.addEventListener('transitionend', function() {
		// 	    times++;
		// 	    go();
		// 	  });
		// })
	</script>
 -->
	<script src="device.js"></script>
</body>
</html>