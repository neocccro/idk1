<div style="margin:10% auto;width:300px">
	<h1>
		<?php echo $question; ?>
	</h1>
	<form name="questionform" method="post">
		<img src="http://www.m8ball.com/answers/en/ball_<?php echo str_pad($ballNumber, 2, "0", STR_PAD_LEFT); ?>.gif" onclick="questionform.submit()"/>
		<div>
			Question: <textarea name="question" >
			</textarea>
		</div>
	</form>
</div>
