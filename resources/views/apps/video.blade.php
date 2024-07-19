@extends('apps.main')

@section('content')
    @if($allowedVideos == 'all')
        <div class="row p-5">
            <p>Videos</p>
            @foreach($videos as $video)
            <div class="col-lg-4">
                <div class="card mb-3">
                <iframe height="215" src="https://www.youtube.com/embed/UFasJE-d3QY?si=88oj2xKjrvIK5wc-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">{{ $video->title }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
         
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $videos->links() }}
            </ul>
        </nav>
    @else 
        <div class="row p-5">
            <p>Videos</p>
            @foreach($videos as $video)
            <div class="col-lg-4">
                <div class="card mb-3">
                <iframe height="215" src="https://www.youtube.com/embed/UFasJE-d3QY?si=88oj2xKjrvIK5wc-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">{{ $video->title }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
@endsection
