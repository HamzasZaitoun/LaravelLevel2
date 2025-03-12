<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')


<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
         @include('front.partials.spinner')
        
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
       @include('front.partials.nav')
      
        </div>
        <!-- Navbar & Hero End -->
         @yield('hero')

    @yield('content')

      

   <!-- Footer Start -->
        @include('front.partials.footer')
    
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('front.partials.scripts')
   
</body>

</html>