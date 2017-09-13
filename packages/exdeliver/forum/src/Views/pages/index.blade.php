@extends('forum::layouts.master')

@section('content')
    <div class="container homepage categories-list">
        <div class="row">
            <div class="col-md-6">
                {!! trans('forum::elements.thread') !!}
            </div>
            <div class="col-md-1">
                {!! trans('forum::elements.topics') !!}
            </div>
            <div class="col-md-1">
                {!! trans('forum::elements.posts') !!}
            </div>
            <div class="col-md-4">
                {!! trans('forum::elements.last_post') !!}
            </div>
        </div>
        @if(count(\ForumService::categories()) > 0)
            @each('forum::partials.forum.category', \ForumService::categories(), 'category')
        @endif
    </div>
@stop