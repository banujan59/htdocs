<?php
	?>
			<div class="logo">Shoe++</div>
			<div class="container">
				<div class="row">
					<form>
						<input id="searchBox" type="text" placeholder="Search Shoe++">
					</form>
				</div>
			</div>
			
			<script>
				$("#searchBox").keydown(function(e)
				{
					// prevent submission when enter is pressed
					if(e.keyCode == 13)
					{
						e.preventDefault();
					
						// get text
						var name = $(this).val();
					
						// request url
						var url = "/home/search/" + name;
					
						// go to location
						location = url;
					}
				});
			</script>
	<?php
?>