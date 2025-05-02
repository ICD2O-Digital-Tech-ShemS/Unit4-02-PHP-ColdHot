<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Celsius to Fahrenheit</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h3>Celsius to Fahrenheit</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./result.php" method="post" target="results">
        <label for="Celsius">Celsius</label>
        <input type="text" id="Celsius" placeholder="Enter number" name="Celsius">
        <br><br>
        <input type="submit" value="Calculate degrees">
		</form>

			<iframe id="results" name="results">			
        <div id="user-info">
          <div id="$Final"></div>
        </div>
	    </iframe>
	</body>
	</body>
</html>
