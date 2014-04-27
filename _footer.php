<footer role="footer" class="footer">

    <div class="row">
        <div class="small-12 columns marginBig">
            <ul class="inline-list clearfix">
                <li>&copy;2013 tenniscomp. All rights reserved.</li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>

    </div><!-- row -->

</footer><!-- reveal -->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>

<script type="text/javascript" src="js/custom.modernizr.js"></script>


<script type="text/javascript" src="js/netteForms.js"></script>
<script type="text/javascript" src="js/jquery.nette.js"></script>
<script type="text/javascript" src="js/jquery.ajaxForms.js"></script>
<script type="text/javascript" src="js/jquery.tokeninput.js"></script>
<script type="text/javascript" src="js/tennisCompFunctions.js"></script>


<script type="text/javascript" src="js/fastclick.js"></script>

<script type="text/javascript" src="js/foundation.min.js"></script>


<!-- <script type="text/javascript" src="js/foundation.js"></script>
<script type="text/javascript" src="js/foundation.tab.js"></script>
<script type="text/javascript" src="js/foundation.tooltip.js"></script>
<script type="text/javascript" src="js/foundation.reveal.js"></script> -->


<script type="text/javascript" src="js/jquery.mmenu.js"></script>

<script type="text/javascript" src="js/isotope.pkgd.js"></script>

<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
$(function() {
    var $menu = $('#menu');

    //  Toggle menu 
    $('#open-icon-menu a').click(function( e ) {
        e.stopImmediatePropagation();
        e.preventDefault();
        $menu.trigger( $menu.hasClass( 'mm-opened' ) ? 'close.mm' : 'open.mm' );                    
    });

    //  Create the menu
    $menu.mmenu();


    //  Click an anchor, scroll to section

});
</script>

