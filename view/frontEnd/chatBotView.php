<?php
require './view/frontEnd/template.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Assistant Qcm Live</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./public/css/chatbot.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./public/js/autosize.min.js"></script>
	<link rel="stylesheet" href="./public/css/jquery.convform.css">
	<script type="text/javascript" src="./public/js/jquery.convform.js"></script>
</head>
<body>
<div class ="test">
	<p>chatbot</p>
	<p>chatbot</p>
	<p>chatbot</p>
	<p>chatbot</p>
</div>

<section id="demo">
	    <div class="vertical-align">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-6 col-sm-offset-3 col-xs-offset-0">
	                    <div class="card no-border">
	                        <div id="chat" class="conv-form-wrapper">
	                            <form action="" method="GET" class="hidden">
	                                <select data-conv-question="Salut! Je suis un assistant à votre service n'hésitez pas à poser toutes vos questions !" name="first-question">
	                                    <option value="yes">Oui</option>
	                                    <option value="sure">Avec plaisir!</option>
	                                </select>
	                                <input type="text" name="name" data-conv-question="Très bien! Tout d'abord,faisons connaissance,comment t'appelles-tu?|Très bien! Tout d'abord,faisons connaissance,comment t'appelles-tu?.">
	                                <input type="text" data-conv-question="Salut, {name}:0! Ravi de te rencontrer." data-no-answer="true">
	                              
	                                <select name="multi[]" data-conv-question="Quels sont les matières avec lesquelles vous avez le plus de difficulté?" multiple>
	                                    <option value="Rock">AAV</option>
	                                    <option value="Pop">PWEB</option>
	                                    <option value="Country">PSE</option>
	                                    <option value="Classic">BDA</option>
	                                </select>
	                                <select name="programmer" data-callback="storeState" data-conv-question="Voulez vous des compléments de cours qui vont permettront de vous améliorer?">
	                                    <option value="yes">Yes</option>
	                                    <option value="no">No</option>
	                                </select>
	                                <div data-conv-fork="programmer">
	                                    <div data-conv-case="yes">
	                                        <input type="text" data-conv-question="A fellow programmer! Cool." data-no-answer="true">
	                                    </div>
	                                    <div data-conv-case="no">
		                                    <select name="thought" data-conv-question="Have you ever thought about learning? Programming is fun!">
		                                    	<option value="yes">Yes</option>
		                                    	<option value="no">No..</option>
		                                    </select>
	                                    </div>
	                                </div>
	                                <input type="text" data-conv-question="convForm also supports regex patterns. Look:" data-no-answer="true">
	                                <input data-conv-question="Type in your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">
	                                <input data-conv-question="Now tell me a secret (like a password)" type="password" data-minlength="6" id="senha" name="password" required placeholder="password">
									<select data-conv-question="Selects also support callback functions. For example, try one of these:">
											<option value="google" data-callback="google">Google</option>
											<option value="bing" data-callback="bing">Bing</option>
									</select>
	                                <select name="callbackTest" data-conv-question="You can do some cool things with callback functions. Want to rollback to the 'programmer' question before?">
	                                    <option value="yes" data-callback="rollback">Yes</option>
	                                    <option value="no" data-callback="restore">No</option>
	                                </select>
	                                <select data-conv-question="This is it! If you like me, consider donating! If you need support, contact me. When the form gets to the end, the plugin submits it normally, like you had filled it." id="">
	                                    <option value="">Awesome!</option>
	                                </select>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>


	<script>
		function google(stateWrapper, ready) {
			window.open("https://google.com");
			ready();
		}
		function bing(stateWrapper, ready) {
			window.open("https://bing.com");
			ready();
		}
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}
		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
	<script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(convForm);
		});
	</script>
</body>
</html>

