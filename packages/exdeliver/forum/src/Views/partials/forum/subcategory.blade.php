<div class="subcategory-wrapper">
    <div class="row category">
        <div class="col-md-6">
            <span class="title">{!! $category->title !!}</span>
                        <span class="description">
                            {!! $category->description !!}
                        </span>
        </div>
        <div class="col-md-1">
            {!! count($category->topics) !!}
        </div>
        <div class="col-md-1">
            {!! count($category->posts) !!}
        </div>
        <div class="col-md-4">
            {!! trans('forum::elements.last_post') !!}
        </div>
    </div>
    @if(count($category->subcategories) > 0)
        @each('forum::partials.forum.subcategory', $category->subcategories, 'category')
    @endif
</div>