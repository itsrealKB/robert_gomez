
@props([
    'doc' => $doc ?? '',
])
<div class="doc-card">
    <a href="" >
        <img src="{{ asset('assets/web/images/'.$doc['img']) }}" alt=""
            class="img-fluid">
    </a>
    <div class="card-desc">
        <h2>{{ $doc['title'] }}</h2>
        <div class="d-flex gap-4">
            <p>Label: {{ $doc['label'] }}</p>
            <p>Date Created: {{ $doc['date'] }}</p>
        </div>
    </div>
</div>
