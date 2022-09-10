
<!-- jQuery  -->
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="{!! asset('js/app.js') !!}"></script>



<!-- App js -->
<script>
(function (window, document) {
    var loader = function () {
        var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
        script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
        tag.parentNode.insertBefore(script, tag);
    };

    window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
@yield('raw_javascript')
    
$(document).ready(function(){
    
    @yield('jquery')
})
</script>