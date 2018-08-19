<!DOCTYPE html>
<html>
<head>
	<title>Chat Box</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
		<meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    	.list-group{
    		height: 200px;
    		overflow-y: scroll;
    		
    	}
    </style>
</head>
<!-- In the message.vue we used <slot></slot> for pushing data -->
<body>
   <div class="container">
   		<div class="row" id="app">
   			<div class="offset-4 col-4">
   				<li class="list-group-item active">Chat room application</li>
   				<ul class="list-group" v-chat-scroll>
					<message 
					  v-for="value in chat.message" :key="value.index">

						@{{ value }}
					</message>
					
			</ul>
			<input type="text" class="form-control" name="" placeholder="  type your message  here..." v-model='message' @keyup.enter='send'>
			  
   			</div>
   		</div>
  </div>

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>
</html>