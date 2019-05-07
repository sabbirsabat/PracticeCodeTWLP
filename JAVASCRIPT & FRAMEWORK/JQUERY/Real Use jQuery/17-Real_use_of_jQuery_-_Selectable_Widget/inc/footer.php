<section class="footeroption">
			<h2><?php echo "Training With Live Project";?></h2>
		</section> 
</div>

   <div id="gotoup"></div>
<script>
	$(window).scroll(function(){
		if ($(this).scrollTop()>300){
			$("#gotoup").fadeIn();

		} else {
			$("#gotoup").fadeOut();
		}
		
	});	

	$("#gotoup").click(function(){
		$("html, body").animate({scrollTop:0}, 500);
	});

</script>

</body>
</html>