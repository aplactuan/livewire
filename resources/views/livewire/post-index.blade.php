<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <livewire:post-create>
    @foreach($posts as $post)
        <livewire:post-single :post="$post" :key="$post->id">
    @endforeach

    {{ $posts->links() }}
</div>
