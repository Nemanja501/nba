<form method="POST" action="{{ url('/createcomment') }}">
    @csrf
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="content"></textarea>
        <label for="floatingTextarea">Add comment:</label>
    </div>
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <input type="hidden" name="team_id" value="{{ $team->id }}">
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
</form>
<br>