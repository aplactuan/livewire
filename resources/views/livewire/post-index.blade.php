<div>
    @foreach($posts as $post)
        <livewire:post-single :post="$post" :key="$post->id">
    @endforeach
</div>
