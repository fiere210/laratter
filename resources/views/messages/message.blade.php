<img src="{{ $message->image }}" alt="imagen-{{ $message->id }}" class="img-thumbnail">
<p class="card-text">
	<div class="text-muted">
		Escrito por <a href="/{{ $message->user->username }}">{{ $message->user->name }}</a>
	</div>
	{{ $message->content }}
	<a href="/messages/{{ $message->id }}">Leer más</a>
</p>
<div class="card-text text-muted float-right">
	Creado el {{ $message->created_at }}
</div>