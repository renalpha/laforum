{!! Html::script('exdeliver/js/axios.min.js') !!}
{!! Html::script('exdeliver/js/vue.min.js') !!}
{!! Html::script('exdeliver/js/vue-resource.min.js') !!}
{!! Html::script('exdeliver/js/jquery.min.js') !!}
{!! Html::script('exdeliver/js/tether.min.js') !!}
{!! Html::script('exdeliver/js/bootstrap.min.js') !!}

<script>
    Vue.http.interceptors.push(function(request, next) {

        // modify method
        request.method = 'POST';

        // modify headers
        request.headers.set('X-CSRF-TOKEN', 'TOKEN');
        request.headers.set('Authorization', 'Bearer TOKEN');

        // continue to next interceptor
        next();
    });
</script>
@yield('js')