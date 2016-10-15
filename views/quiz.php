<h1>Quiz sur le stockage des données numérique</h1>

<div class="quiz" id="quiz1">
	
	<h2>Question 1</h2>

	<div class="answersQuizBloc">
		<div class="answersQuiz">
			<label for="answerQuiz1_1">Réponse 1</label>
			<br />
			<!-- La class sert pour JQUERY, le name sert pour selectioner seulement 1 radio, l'id sert pour JQUERY, value sert pour JQUERY -->
			<input class="answersQuiz1" type="radio" name="answerQuiz1_1" id="answerQuiz1_1" value="1" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz1_1">Réponse 2</label>
			<br />
			<input class="answersQuiz1" type="radio" name="answerQuiz1_1" id="answerQuiz1_2" value="2" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz1_1">Réponse 3</label>
			<br />
			<input class="answersQuiz1" type="radio" name="answerQuiz1_1" id="answerQuiz1_3" value="3" />
		</div>
	</div>

	<input type="button" class="btnQuiz" id="btnQuiz1" value="Question suivante !" />

</div>

<div class="quiz" id="quiz2">
	
	<h2>Question 2</h2>

	<div class="answersQuizBloc">
		<div class="answersQuiz">
			<label for="answerQuiz2_1">Réponse 1</label>
			<br />
			<input class="answersQuiz2" type="radio" name="answerQuiz2_1" id="answerQuiz2_1" value="1" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz2_2">Réponse 2</label>
			<br />
			<input class="answersQuiz2" type="radio" name="answerQuiz2_2" id="answerQuiz2_2" value="2" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz2_2">Réponse 3</label>
			<br />
			<input class="answersQuiz2" type="radio" name="answerQuiz2_2" id="answerQuiz2_3" value="3" />
		</div>
	</div>

	<input type="button" class="btnQuiz" id="btnQuiz2" value="Question suivante !" />

</div>

<div class="quiz" id="quiz3">
	
	<h3>Question 3</h3>

	<div class="answersQuizBloc">
		<div class="answersQuiz">
			<label for="answerQuiz3_1">Réponse 1</label>
			<br />
			<!-- La class sert pour JQUERY, le name sert pour selectioner seulement 3 radio, l'id sert pour JQUERY, value sert pour JQUERY -->
			<input class="answersQuiz3" type="radio" name="answerQuiz3_1" id="answerQuiz3_1" value="1" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz3_2">Réponse 2</label>
			<br />
			<input class="answersQuiz3" type="radio" name="answerQuiz3_2" id="answerQuiz3_2" value="2" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz3_3">Réponse 3</label>
			<br />
			<input class="answersQuiz3" type="radio" name="answerQuiz3_3" id="answerQuiz3_3" value="3" />
		</div>
	</div>

	<input type="button" class="btnQuiz" id="btnQuiz3" value="Question suivante !" />

</div>

<div class="quiz" id="quiz4">
	
	<h3>Question 4</h3>

	<div class="answersQuizBloc">
		<div class="answersQuiz">
			<label for="answerQuiz4_1">Réponse 1</label>
			<br />
			<input class="answersQuiz4" type="radio" name="answerQuiz4_1" id="answerQuiz4_1" value="1" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz4_2">Réponse 2</label>
			<br />
			<input class="answersQuiz4" type="radio" name="answerQuiz4_2" id="answerQuiz4_2" value="2" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz4_3">Réponse 3</label>
			<br />
			<input class="answersQuiz4" type="radio" name="answerQuiz4_3" id="answerQuiz4_3" value="3" />
		</div>
	</div>

	<input type="button" class="btnQuiz" id="btnQuiz4" value="Question suivante !" />

</div>

<div class="quiz" id="quiz5">
	
	<h3>Question 5</h3>

	<div class="answersQuizBloc">
		<div class="answersQuiz">
			<label for="answerQuiz5_1">Réponse 1</label>
			<br />
			<!-- La class sert pour JQUERY, le name sert pour selectioner seulement 5 radio, l'id sert pour JQUERY, value sert pour JQUERY -->
			<input class="answersQuiz5" type="radio" name="answerQuiz5_1" id="answerQuiz5_1" value="1" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz5_2">Réponse 2</label>
			<br />
			<input class="answersQuiz5" type="radio" name="answerQuiz5_2" id="answerQuiz5_2" value="2" />
		</div>

		<div class="answersQuiz">
			<label for="answerQuiz5_3">Réponse 3</label>
			<br />
			<input class="answersQuiz3" type="radio" name="answerQuiz5_3" id="answerQuiz5_3" value="3" />
		</div>
	</div>

	<input type="button" class="btnQuiz" id="btnQuiz5" value="Voir mon resultat !" />

</div>

<div class="quiz" id="quiz6">
	
	<h1 id="resultat">Ton score est de : 0 réponses juste !!</h1>

	<input type="button" class="btnQuiz" id="btnQuiz5" value="Recommencer !" />

</div>


<script type="text/javascript">
	
	$(function() {

		$("#quiz2").hide();
		$("#quiz3").hide();
		$("#quiz4").hide();
		$("#quiz5").hide();
		$("#quiz6").hide();

		var score = 0;

		$("#btnQuiz1").click(function(event) {

			var answer = $('.answersQuiz1:radio:checked').val();

			if(answer == 1) {
				score++;
			}
			
			if(answer != null) {
				$("#quiz1").fadeOut('slow', function() {
					answer = 0;
					$("#quiz2").fadeIn('fast');

				});
			}

		});

		$("#btnQuiz2").click(function(event) {

			var answer = $('.answersQuiz2:radio:checked').val();

			if(answer == 1) {
				score++;
			}
			
			if(answer != null) {
				$("#quiz2").fadeOut('slow', function() {
					answer = 0;
					$("#quiz3").fadeIn('fast');

				});
			}

		});

		$("#btnQuiz3").click(function(event) {

			var answer = $('.answersQuiz3:radio:checked').val();

			if(answer == 1) {
				score++;
			}
			
			if(answer != null) {
				$("#quiz3").fadeOut('slow', function() {
					answer = 0;
					$("#quiz4").fadeIn('fast');

				});
			}

		});

		$("#btnQuiz4").click(function(event) {

			var answer = $('.answersQuiz4:radio:checked').val();

			if(answer == 1) {
				score++;
			}
			
			if(answer != null) {
				$("#quiz4").fadeOut('slow', function() {
					answer = 0;
					$("#quiz5").fadeIn('fast');

				});
			}

		});

		$("#btnQuiz5").click(function(event) {

			var answer = $('.answersQuiz5:radio:checked').val();

			if(answer == 1) {
				score++;
			}
			
			if(answer != null) {
				$("#quiz5").fadeOut('slow', function() {
					answer = 0;
					$("#resultat").replaceWith('<h1>Ton score est de <b style="color:green">'+score+'</b> réponses justes !!</h1>');
					
					$("#quiz6").fadeIn('fast');

				});
			}

		});		

		$("#btnQuiz6").click(function(event) {
			
			window.location = "index.php?p=quiz";

		});

	});

</script>