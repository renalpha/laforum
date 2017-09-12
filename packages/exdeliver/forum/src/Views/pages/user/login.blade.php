@extends('forum::layouts.master')

@section('content')
    <div class='container'>
        <div class='hero-unit'>

            <div id="login-box" class="pull-right control-group">
                @include('forum.partials.user.login_block')
            </div>

            <h2>{!! trans('forum::elements.welcome') !!}</h2>

            <p>{!! trans('forum::auth.please_login') !!}</p>

        </div>
    </div>
@stop