@extends ('titulo')
@extends ('conteudo')
<ul>
    
    {{$autores->render()}}
@foreach($autores as $autor)
<li>{{$autor->nome}}</li>
@endforeach
</ul>
