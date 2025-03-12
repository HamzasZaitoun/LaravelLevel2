<!doctype html>
<html lang="en">
    @include('admin.partials.head')
 
  <body class="vertical  light  ">
    <div class="wrapper">
        
        <!-- nav-bar  -->
        @include('admin.partials.nav')

        <!-- side-bar -->
        @include('admin.partials.sidebar')
      
    
    <main role="main" class="main-content">
   
      @yield('content')

      </main> 

      <!-- main -->

      
    </div> <!-- .wrapper -->


    <!-- scripts -->
   @include('admin.partials.scripts')
  </body>
</html>