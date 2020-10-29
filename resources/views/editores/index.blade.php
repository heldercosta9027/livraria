@extends ('titulo')
@extends ('conteudo')
<ul>
    {{$editores->render()}}
@foreach($editores as $editor)
<li>{{$editor->nome}}</li>
@endforeach
</ul>