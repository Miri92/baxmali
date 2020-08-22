<h1>create</h1>

<form method="post" action="{{route('channel.store')}}">
    @csrf

    <div class="from-group">
        <label for="">Channel name</label>
        <input type="text" name="name" class="from-control">
    </div>

    <div class="from-group">
        <button class="btn-primary">Create</button>
    </div>
</form>