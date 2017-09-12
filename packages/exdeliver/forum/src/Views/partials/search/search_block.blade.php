{!! Form::open(['url' => '/search', 'class' => 'form-inline']) !!}
<label class="sr-only" for="search">{!! trans('forum.search.search') !!}</label>
<div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><i class="fa fa-search"></i></div>
    {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => trans('forum::search.search')]) !!}
    <span class="input-group-btn">
    {!! Form::submit(trans('forum::search.go'), ['class' => 'btn btn-primary']) !!}
    </span>
</div>
{!! Form::close() !!}