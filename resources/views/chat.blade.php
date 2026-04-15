<h1>Chat</h1>

@foreach($messages as $msg)
    <p><b>{{ $msg->sender }}</b>: {{ $msg->content }}</p>
@endforeach

<form method="POST">
    @csrf
    <input name="content">
    <button type="submit">Send</button>
</form>