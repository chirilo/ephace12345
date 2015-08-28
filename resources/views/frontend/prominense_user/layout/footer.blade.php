<div class="row">
    <div class="col-sm-3 padding-md">
        <p class="block">About Our Company</p>
        <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</small></p>
    </div><!-- /.col -->
    <div class="col-sm-3 padding-md">
        <p class="block">Useful Links</p>
        <ul class="list-unstyled useful-link">
            <li>
                <a href="#">
                    <small><i class="fa fa-chevron-right"></i> Our Profile</small>
                </a>
            </li>
            <li>
                <a href="#">
                    <small><i class="fa fa-chevron-right"></i> New Products</small>
                </a>
            </li>
            <li>
                <a href="#">
                    <small><i class="fa fa-chevron-right"></i> Support Portal</small>
                </a>
            </li>
        </ul>
    </div><!-- /.col -->
    <div class="col-sm-3 padding-md">
        <p class="block">Stay Connect</p>
        <a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="social-connect tooltip-test google-plus-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="social-connect tooltip-test rss-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Rss feed"><i class="fa fa-rss"></i></a>
        <a href="#" class="social-connect tooltip-test tumblr-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Tumblr"><i class="fa fa-tumblr"></i></a>
        <a href="#" class="social-connect tooltip-test dribbble-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Dribbble"><i class="fa fa-dribbble"></i></a>
        <a href="#" class="social-connect tooltip-test linkedin-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="social-connect tooltip-test pinterest-hover pull-left" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
    </div><!-- /.col -->
    <div class="col-sm-3 padding-md">
        <p class="block">Contact Us</p>
        Email : developer@legacystatus.com
        <div class="seperator"></div>
        <a class="btn btn-sm btn-info"><i class="fa fa-envelope"></i> Contact support</a>
    </div><!-- /.col -->
</div><!-- /.row -->

<!-- chat sidebar -->
<script src="{{ asset('assets/chatsidebarmenu/js/classie.js') }}"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        menuTop = document.getElementById( 'cbp-spmenu-s3' ),
        menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
        showLeft = document.getElementById( 'showLeft' ),
        showRight = document.getElementById( 'showRight' ),
        showTop = document.getElementById( 'showTop' ),
        showBottom = document.getElementById( 'showBottom' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        showRightPush = document.getElementById( 'showRightPush' ),
        body = document.body;

    showLeft.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeft' );
    };
    showRight.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRight' );
    };
    showTop.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuTop, 'cbp-spmenu-open' );
        disableOther( 'showTop' );
    };
    showBottom.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuBottom, 'cbp-spmenu-open' );
        disableOther( 'showBottom' );
    };
    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };
    showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
    };

    function disableOther( button ) {
        if( button !== 'showLeft' ) {
            classie.toggle( showLeft, 'disabled' );
        }
        if( button !== 'showRight' ) {
            classie.toggle( showRight, 'disabled' );
        }
        if( button !== 'showTop' ) {
            classie.toggle( showTop, 'disabled' );
        }
        if( button !== 'showBottom' ) {
            classie.toggle( showBottom, 'disabled' );
        }
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
        if( button !== 'showRightPush' ) {
            classie.toggle( showRightPush, 'disabled' );
        }
    }
</script>