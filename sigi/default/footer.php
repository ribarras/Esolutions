</div>
            <!--/.fluid-container-->
            <!-- end: Content -->
        </div>
        <!--/#content.span10-->
    </div>
    <!--/fluid-row-->

    <div class="clearfix"></div>
    <footer>

        <p>
            <span style="text-align:left;float:left">
				&copy; 2016 
				<a target="_blank" href="#" alt="Kevin Chirinos">
					TRACKER GPS
				</a>
			</span>
        </p>

    </footer>

    <!-- start: JavaScript-->
    <script src="/eweb2019/sigi/js/jquery-1.9.1.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery-migrate-1.0.0.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.ui.touch-punch.js"></script>
    <script src="/eweb2019/sigi/js/modernizr.js"></script>
    <script src="/eweb2019/sigi/js/bootstrap.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.cookie.js"></script>
    <script src='/eweb2019/sigi/js/fullcalendar.min.js'></script>
    <script src='/eweb2019/sigi/js/jquery.dataTables.min.js'></script>
    <script src="/eweb2019/sigi/js/excanvas.js"></script>
    <script src="/eweb2019/sigi/js/jquery.flot.js"></script>
    <script src="/eweb2019/sigi/js/jquery.flot.pie.js"></script>
    <script src="/eweb2019/sigi/js/jquery.flot.stack.js"></script>
    <script src="/eweb2019/sigi/js/jquery.flot.resize.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.chosen.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.uniform.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.cleditor.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.noty.js"></script>
    <script src="/eweb2019/sigi/js/jquery.elfinder.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.raty.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.iphone.toggle.js"></script>
    <script src="/eweb2019/sigi/js/jquery.uploadify-3.1.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.gritter.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.imagesloaded.js"></script>
    <script src="/eweb2019/sigi/js/jquery.masonry.min.js"></script>
    <script src="/eweb2019/sigi/js/jquery.knob.modified.js"></script>
    <script src="/eweb2019/sigi/js/jquery.sparkline.min.js"></script>
    <script src="/eweb2019/sigi/js/counter.js"></script>
    <script src="/eweb2019/sigi/js/retina.js"></script>
    <script src="/eweb2019/sigi/js/custom.js"></script>
    <?php //include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/js/custom.php'; ?>
    
    <script type="text/javascript">     

    $(document).ready(function(){
      $("#hide").click(function(){
        $("#element").hide();
      });
      $("#show").click(function(){
        $("#element").show();
      });
      
      $("#hide2").click(function(){
        $("#element2").hide();
      });
      $("#show2").click(function(){
        $("#element2").show();
      });
    });

    
    var nextinput = 0;

    function AgregarCampos(){

    nextinput++;
    campo = '<div id="div1"><input class="input-file uniform_on" name="campo' + nextinput + '"&nbsp; id="fileInput" type="file"></div>';
    $("#campos").append(campo);

    }
    /*

    $(document).ready(function(){
    $(".remove").click(function(){
        $("#div1").remove();
    });
    });
    */

    </script>
</body>

</html>