<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-primary">Search</button>
    </form>
</div>
<!-- jquery vendor -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.nanoscroller.min.js')}}"></script>
<!-- nano scroller -->
<script src="{{asset('js/sidebar.js')}}"></script>
<script src="{{asset('js/pace.min.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- bootstrap -->

<script src="{{asset('js/scripts.js')}}"></script>
<!-- scripit init-->

@yield('js')
</body>
</html>
