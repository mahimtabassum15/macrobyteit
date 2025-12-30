<!DOCTYPE html>
<html lang="en">

@include('common.head')    

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        @include('common.navbar')
        <!-- Navbar End -->
        
        <!-- Content Start -->
        @yield("content")
        <!-- Content End -->

        <!-- Footer Start -->
        @include('common.footer')
        <!-- Footer End -->

        


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        <!-- JavaScript Start -->
         @include('common.script')
        <!-- JavaScript End -->
        
    </body>

</html>