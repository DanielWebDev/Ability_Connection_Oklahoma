        
        <footer>
            <p>&copy; 2012 Ability Connection Oklahoma ~ 10400 Greenbriar Place, Suite 101 ~ Oklahoma City, OK 73159 ~ </p>
	    <img src="./images/okcphone.png" alt="ability connection phone number in footer">
        </footer>

        <!--<script src="js/jquery.min.js"></script>-->

        <!-- THIS IS SLIDESHOW CODE -->
	<script src="./js/jquery-1.7.2.min.js"></script>
	<script src="./js/jquery.cross-slide.js"></script>
	<!-- END OF SLIDESHOW CODE -->
        
        <script src="./js/superfish.js"></script>
        <script>
            $(document).ready(function() {
                $('ul.sf-menu').superfish();
            });
        </script>
        
    </div> <!-- end of id=wrapper -->
    <!-- THIS IS SLIDESHOW CODE -->
        <script>
          $(function() {
                $('#slideshow').crossSlide({
                  sleep: 2,
                  fade: 1
                }, [
		  { src: './images/Banner_11.jpg' },
		  { src: './images/Banner_33molly.jpg' },
		  { src: './images/Banner_44gavin.jpg' },
                  { src: './images/Banner_22.jpg' }
                ])
          });
        </script>
    <!-- END OF SLIDE SHOW CODE -->
</body>
</html>