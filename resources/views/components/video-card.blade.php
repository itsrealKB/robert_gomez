@props([
    'video' => $video ?? '',
])
<div class="doc-card">
    <a href="">
        <img src="{{ asset('assets/web/images/'.$video['img']) }}" alt="" class="img-fluid">

    </a>
    <div class="card-desc">
        <h2 class="text-white">{{ $video['title'] }}</h2>
        <div class="d-flex gap-4">
            <p class="text-white">Label: {{ $video['label'] }}</p>
            <p class="text-white">Date Created: {{ $video['date'] }}</p>
        </div>
    </div>
</div>
