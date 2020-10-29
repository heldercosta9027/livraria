@extends ('titulo')
@extends ('conteudo')
<ul>
    {{$livros->render()}}
@foreach($livros as $livro)
<li>{{$livro->titulo}}</li>
@endforeach
</ul>
