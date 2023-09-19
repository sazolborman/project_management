@include('layouts.header')
@include('layouts.slider')
<section class="home-section">
  <div class="home-content">
    @include('layouts.navigation')
    @include('layouts.calendar')
  </div>
</section>
@include('admin.admin_js')