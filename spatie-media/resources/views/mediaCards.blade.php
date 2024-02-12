@extends('layout.layout')

@section('title')
    Media Cards
@endsection

@section('content')
    <div class="container">
        @foreach($medias as $media)
            @foreach($media->getMedia() as $mediaItem)
                <div class="card">
                    <div class="card-header">
                        @if($mediaItem->type == 'image')
                            <img src="{{ $mediaItem->getUrl() }}" alt="{{ $mediaItem->name }}"/>
                        @elseif($mediaItem->type == 'pdf')
                            <img src="R.png" alt="">
                            <a href="{{ $mediaItem->getUrl() }}" class="pdf-view-link">Download PDF</a>
                        @elseif($mediaItem->type == 'video')
                            <video class="video" height="600" controls>
                                <source  src="{{ $mediaItem->getUrl() }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                    <div class="card-body">
                        <span class="tag tag-pink">{{ $mediaItem->type }}</span>
                        <h4>
                            {{ $mediaItem->name }}
                        </h4>
                        <p>
                            {{ number_format($mediaItem->size / 1024 / 1024, 2) }} MB
                        </p>
                        <div class="user">
                            <div class="user-info">
                                <small>{{ $mediaItem->created_at->toFormattedDateString() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
@endsection
