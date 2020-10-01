<!-- Footer Start -->
<div class="flex-grow-1"></div>
<div class="app-footer">
  <div class="row">
    <div class="col-md-9">
    </div>
  </div>
  <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
    <div style="width: 350px; height: 50px; margin-top:-47px">
      @include('backend.layouts.includes._img_logo')
    </div>
    <span class="flex-grow-1"></span>
    <div class="d-flex align-items-center footer-logo">
      <div>
        <p class="m-0">&copy; 2020 Universitas Trilogi</p>
        <p class="m-0">All rights reserved</p>
      </div>
    </div>
  </div>
</div>
<!-- fotter end -->
</div>
<!-- ============ Body content End ============= -->
</div>
<!--=============== End app-admin-wrap ================-->
@yield('script')
<script src="{{asset('backend/assets/js/common-bundle-script.js')}}"></script>
<script src="{{asset('backend/assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('backend/assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('backend/assets/js/es5/dashboard.v1.script.js')}}"></script>
<script src="{{asset('backend/assets/js/es5/script.min.js')}}"></script>
<script src="{{asset('backend/assets/js/es5/sidebar.large.script.min.js')}}"></script>
<script src="{{asset('backend/assets/js/es5/customizer.script.min.js')}}"></script>
</body>

</html>