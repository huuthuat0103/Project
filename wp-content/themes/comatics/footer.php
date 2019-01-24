<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-contents">
					<h3 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h3>
					<p>Địa chỉ : 14/2 Nguyễn An Ninh, KP Bình Minh 1, P Dĩ An, thị xã Dĩ An, Bình Dương.</p>
					<p>Hotline : 0983.902.943</p>
					<p>Hotline : 0983.902.945</p>
				</div>
			</div>
			<div class="col-md-4">
				<h3 class="text-center">VỀ CHÚNG TÔI</h3>
				<P></P>
				<P></P>
				<P></P>
			</div>
			<div class="col-md-4">
				<div class="footer-fanpags">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=300px&height=200px&small_header=false&adapt_container_width=false&hide_cover=true&show_facepile=true&appId" width="300px" height="200px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
			</div>

		</div>
	</div>
	

</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="<?php echo js ?>/assets/vendors/bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="<?php echo btjs ?>/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("img").mousemove(function(event){
		var mousex = event.pageX - $(this).offset().left;
		var mousey = event.pageY - $(this).offset().top;
		var imgx = (mousex - 300) / 40;
		var imgy = (mousey - 200) / 40;
		$(this).css("transform", "translate(" + imgx + "px," + imgy + "px)");
	});
	$("img").mouseout(function(){
		$(this).css("transform", "translate(0px,0px)");
	});
</script>
<?php wp_footer(); ?>
</body>
</html>