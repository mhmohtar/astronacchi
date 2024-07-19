@extends('apps.main')

@section('content')
@if($allowedArticles == 'all')
<div class="row p-5">
    <p>Article</p>
    @foreach($articles as $article)
    <div class="col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <!-- <a href="#" class="btn btn-primary">Button</a> -->
            </div>
        </div>
    </div>
    @endforeach
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        {{ $articles->links() }}
    </ul>
</nav>
@else 
<div class="row p-5">
    <p>Article</p>
    @foreach($articles as $article)
    <div class="col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <!-- <a href="#" class="btn btn-primary">Button</a> -->
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection