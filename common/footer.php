		<!-- Footer -->
        <footer id="footer">
				<div class="inner">
					<h2>保持联系</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(086) 180-67900947</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">help@daigou.com</a></li>
						<li><span class="icon fa-map-marker"></span>杭州，中国</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; 代购.设计 <a href="https://templated.co">桑泽</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
        <script>
            jQuery(document).ready(function() {

                jQuery('.tabs .tab-links a').on('click', function(e)  {
                    var currentAttrValue = jQuery(this).attr('href');
// Show/Hide Tabs
                    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
// Change/remove current tab to active
                    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
                    e.preventDefault();
                });
            });

        </script>
        <style type="text/css">
            .popup-overlay{
                /*Hides pop-up when there is no "active" class*/
                visibility:hidden;
                position:fixed;
                left: 0;
                top:0;
                z-index: 1;
                background-color: rgba(3,3,3,.8);
                height: 100%;
                width: 100%;
                display: none;

            }
            .popup-overlay.active{
                /*displays pop-up when "active" class is present*/
                visibility:visible;
                text-align:center;
                display: inline-block;
            }

            .popup-content {
                /*Hides pop-up content when there is no "active" class */
                visibility:hidden;
                display: none;
            }

            .popup-content.active {
                /*Shows pop-up content when "active" class is present */
                visibility:visible;
                display: inline-block;
                margin: 10%;
            }

        </style>
        <script>
            $("#Next").on("click", function(){
                $(".popup-overlay, .popup-content").addClass("active");
            });

        </script>


	</body>
</html>
