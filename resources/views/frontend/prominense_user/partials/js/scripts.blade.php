    
    <!-- Jquery -->
    <script src="{{ asset('assets/new_user/assets/js/jquery-1.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/new_user/assets/js/bootstrap.js') }}"></script>

    <!-- jcarousel -->
    <script src="{{ asset('assets/new_user/assets/js/jcarousel.js') }}"></script>

    <!-- Modernizr -->
    <script src="{{ asset('assets/new_user/assets/js/modernizr.js') }}"></script>

    <!-- Pace -->
    <script src="{{ asset('assets/new_user/assets/js/pace.js') }}"></script>

    <!-- Popup Overlay -->
    <script src="{{ asset('assets/new_user/assets/js/jquery-popup-overlay.js') }}"></script>

    <!-- Slimscroll -->
    <script src="{{ asset('assets/new_user/assets/js/jquery-slimscroll.js') }}"></script>

    <!-- Resize -->
    <script src="{{ asset('assets/new_user/assets/js/jquery-resize.js') }}"></script>

    <!-- holder -->
    <script src="{{ asset('assets/new_user/assets/js/holder.js') }}"></script>

    <!-- Cookie -->
    <script src="{{ asset('assets/new_user/assets/js/jquery-cookie.js') }}"></script>

    <!-- Endless -->
    <script src="{{ asset('assets/new_user/assets/js/hub.js') }}"></script>
    
    <script>
        $(function()    {
        
            $('#popularMovie').on('jcarousel:create', function () {
                var width = $('#popularMovie').innerWidth();

                $('#popularMovie').jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });
            
            $('#newGame').on('jcarousel:create', function () {
                var width = $('#newGame').innerWidth();

                $('#newGame').jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });
            
            $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

            $('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });
        
            $('.movie-jcarousel').resize(function() {   
                var width = $('.movie-jcarousel').innerWidth();
                
                if (Modernizr.mq('(min-width: 980px)')) {
                    width = width / 4;
                } 
                else if (Modernizr.mq('(min-width: 768px)') && Modernizr.mq('(max-width: 979px)')) {
                    width = width / 3;
                }
                else if (Modernizr.mq('(min-width: 351px)') && Modernizr.mq('(max-width: 767px)')) {
                    width = width / 2;
                }
                
                $('#popularMovie').jcarousel('items').css('width', width + 'px');
                $('#newGame').jcarousel('items').css('width', width + 'px');
            });
        });
    
    </script>