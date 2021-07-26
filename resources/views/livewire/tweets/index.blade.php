<div>
    <div class="card">
        <div class="card-header">Timeline</div>
        <div class="card-body">
            @foreach ($tweets as $tweet)
                <livewire:tweets.single :key="$tweet->id" :tweet="$tweet">
            @endforeach

            @if ($tweets->hasMorePages())
                <button class="btn btn-primary" wire:click.prevent="loadMore">Load more!</button>
            @endif
        </div>
    </div>
</div>
