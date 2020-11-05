<div class="mb-4">
    <form wire:submit.prevent="addPost">
        <div class="form-group">
            <label for="body" class="sr-only">Enter your post</label>
            <textarea name="body" id="body" class="form-control" wire:model="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
