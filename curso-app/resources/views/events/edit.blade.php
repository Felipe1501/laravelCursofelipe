@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')
   <div id="event-create-container" class="col-md-6 offset-md-3">
      <h1>Editando: {{$event->title}}</h1>
      <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
         </div>
         <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento..." value="{{ $event->title }}">
         </div>
         <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{date('Y-m-d', strtotime($event->date));}}">
         </div>
         <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value="{{ $event->city }}">
         </div>
         <div class="form-group">
            <label for="title">
               O evento é Privado?
            </label>
            <select name="private" id="private" class="form-control">
               <option value="0">NÃO</option>
               <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }} >SIM</option>
            </select>
         </div>
         <div class="form-group">
            <label for="title">
               Descrição:
            </label>
            <textarea name="description" id="description" class="form-control" placeholder="o que vai acontecer no evento?">{{$event->description}}</textarea>
         </div>
         <div class="form-group">
            <label for="title">
               Adicione itens de infraestrutura:
            </label>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Cadeiras" {{ (in_array("Cadeiras", $event->items)) ? "checked='checked' "  :  ' '  }}> Cadeiras
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Palco" {{ (in_array("Palco", $event->items)) ? "checked='checked' "  :  ' '  }}> Palco
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Suco Tang grátis" {{ (in_array("Suco Tang grátis", $event->items)) ? "checked='checked' "  :  ' '  }}> Suco Tang grátis
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Open Food" {{ (in_array("Open Food", $event->items)) ? "checked='checked' "  :  ' '  }}> Open Food
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Brindes" {{ (in_array("Brindes", $event->items)) ? "checked='checked' "  :  ' '  }}> Brindes
            </div>
         </div>
         <input type="submit" class="btn btn-primary" value="Editar Evento">
      </form>
   </div>
@endsection