<??>

<div class='container'>
	<div class='row'>
		<div class='col-lg-9'>
			<div id="addNewElement" style="text-align: center; margin-top: 56px; min-height: 100%;">
				<form method="post" action="/classic4you/admin/addFunction">
					<div class="form-group">
					  	<label for="usr" style="font-size: 14px;">Name:</label><br>
					  	<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="form-group">
					  	<label for="comment" style="font-size: 14px;">Short description:</label><br>
					  	<textarea class="form-control" rows="2" id="short_desc" name="short_desc" required></textarea>
					</div>
					<div class="form-group">
					  	<label for="comment" style="font-size: 14px;">Description:</label><br>
					  	<textarea class="form-control" rows="5" id="desc" name="desc" required></textarea>
					</div>
					<div class="form-group">
					  	<label for="usr" style="font-size: 14px;">Year:</label><br>
					  	<input type="text" class="form-control" id="year" name="year" required>
					</div>
					<div class="form-group">
					  	<label for="usr" style="font-size: 14px;">Prize:</label><br>
					  	<input type="text" class="form-control" id="prize" name="prize" required>
					</div>
					<div class="form-group">
					  	<input type="submit" id="submit" name="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>