<!--

 Copyright (c) 2015, Austin Meyers (AK5A) & Mark Silliman
 All rights reserved.
 Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
 THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.


 http://learn.turtlebot.com/

 -->


<!doctype html>
<html>
  <head>
    <title>CoffeeBot</title>
     <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
     <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
     <meta name="apple-mobile-web-app-capable" content="yes">
     <meta name="mobile-web-app-capable" content="yes">     
     <link rel="icon" type="image/png" href= "../../img/icon48.png">     
	 <link rel="icon" sizes="192x192" href="../../img/android-icon.png">
     <link rel="apple-touch-icon" href="../../img/icon.png">
    <style>
	    
	  body, html{
        overflow: hidden;
        position:fixed;
        width:100%;
        height: 100%;		  
	  }
      body {
        font-family: Roboto, Helvetica, Arial, sans-serif;
        font-size: 1.5rem;
        /*width:220px;*/
        /*height: 310px;*/
        background: #fff;
        padding:0;
        margin:0;

      }
      input { /* Disable iOS form rounding*/
		-webkit-appearance: none;
	    border-radius: 0; 
	    
	  }
	  input[type=text]{
		  font-size:1.5rem;
	  }
	  .container{
		  max-width: 640px;
	  }
      .btn{
	      background-color:#60BF56;
	      margin-left:auto;
	      margin-right:auto;
	      display: block;
	      width:100%;
      }
      button:focus{
	      background-color: #3E8F35;
      }
      .btn:hover{

	      background-color: #266D1E;
      }
      #setCoordsView{

      }
      #editCoordsButton{
	      position: absolute;
	      top:0px;
	      right:8px;
		  opacity: 0.5;
      }
      #turtlebot-still, #turtlebot-animation{
	  	width: auto;
	  	max-width: 100%;
	  	max-height: 600px;
	  	margin: 0 auto;
      }
      footer{
	      position: absolute;
	      bottom:0;
	      width:100%;
      }
    </style>
	<script type="text/javascript" src="../../js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="../../js/materialize.min.js"></script>	
	</head>
    <body>
    <?php if($_COOKIE["position_id"] == 0){ ?>
    <div id="setCoordsView">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<p>Welcome to CoffeeBot, please set your X &amp; Y coordinates</p>
					</div>
					<div class="input-field col s12">
						<input id="xCoord" type="text" value=" ">
						<label for="xCoord">X</label>	    					
					</div>
					<div class="input-field col s12">				
						<input id="yCoord" type="text" value=" ">
						<label for="yCoord">Y</label>	    
					</div>	
				</div>
			</div>
			<footer>
			<div class="container">				
				<button id="saveCoordsButton" class="waves-effect waves-light btn btn-large">Save</button>
			</div>
			</footer>
        </div>
        <?php }else{ ?>
        <div id="orderView">
			<button class="small mdi-action-settings" id="editCoordsButton"></button>			
	
				<img src="../../img/turtlebot-still.jpg" id="turtlebot-still">
				<img src="../../img/turtlebot-animation.gif" id="turtlebot-animation" style="display:none;">					

			<footer>
			<div class="container">				
				<button id="cancelButton" class="waves-effect waves-light btn btn-large" style="display:none;">Cancel</button>
				<button  id="orderButton" class="waves-effect waves-light btn btn-large">Order</button>
			</div>
		    </footer>
        </div>
        <?php } ?>
	   	<script type="text/javascript" src="../../js/index.js"></script>   	
	</body>
</html>

