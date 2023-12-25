<ul class="list-group">
    @foreach ($team->comments as $comment)
        <li class="list-group-item">{{ $comment->content }}<br>by: {{ $comment->user->name }}</li>
    @endforeach
</ul>