<div class="wrapper">
		<div class="chat-box">
			<div class="chat-head">
				<p>Chat with us</p>
				<img src="https://maxcdn.icons8.com/windows10/PNG/16/Arrows/angle_down-16.png" title="Expand Arrow" width="16">
			</div>
			<div class="chat-body">
				<div class="msg-insert">
 					<div class="msg-receive"><p id="test"></p></div>
 					<script type="text/javascript">
 						var questionNum = -1;													
						var question = 'Hello';				  
						var output = document.getElementById("test");				
						output.innerHTML = question;
						function bot(){
							var input = document.getElementById("input").value;
    						console.log(input);
   							if(questionNum == -1) {
   								question = "What's your name?";
   								setTimeout(timedQuestion, 1500);
   							}
   							else if (questionNum == 0) {
        						$('.msg-insert').append("<div class='msg-receive'>It's a great name</div>");
        						document.getElementById("input").value = "";   		
       							question = 'What does it mean ?';			    			
        						setTimeout(timedQuestion, 1500);									
    						}

    						else if (questionNum == 1) {
        						$('.msg-insert').append("<div class='msg-receive'>Ohh, that's interesting!</div>");
        						document.getElementById("input").value = "";   
        						question = 'Which city do you live in?';					      	
        						setTimeout(timedQuestion, 1500);
        					}
    						else if (questionNum == 2){
        						$('.msg-insert').append("<div class='msg-receive'>It's a good place</div>");
        						document.getElemtentById("input").value = "";
        						question = 'Tell me about yourself';
        						setTimeout(timedQuestion, 1500);
    						}
    						
    					}
    					function timedQuestion() {
    						$('.msg-insert').append("<div class='msg-receive'>"+question+"</div>");
						}
						$(document).keypress(function(e) {
  						if (e.which == 13) {
    					bot();																
    					questionNum++;															
  						}
						});
 					</script>
				</div>
				<div class="chat-text">
					<input placeholder="Send" id="input"></input> 
				</div>
			</div>
		</div>
</div>

 