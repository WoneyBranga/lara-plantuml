<div>
    <textarea cols="30"
              id='aa'
              rows="20"
              wire:model.debounce.1000ms="codigo"></textarea>

    <div wire:loading>
        convertendo...
    </div>

    <img alt="Imagem Gerada"
         src="http://localhost:8080/plantuml/svg/{{ $imagem }}">
</div>
