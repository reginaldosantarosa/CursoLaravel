<div class="input-field">
    <input type="text" name="titulo" class="validate" value=" {{ isset( $pagina->titulo) ? $pagina->titulo : ''}}" >
    <label>Titulo</label>
</div>


<div class="input-field">  <input type="text" name="descricao" class="validate" value=" {{ isset(
    $pagina->descricao) ? $pagina->descricao : ''}}" >
    <label>Descrição</label>
</div>

@if(isset($pagina->email))

    <div class="input-field">
        <input type="text" name="email" class="validate" value=" {{ isset($pagina->email) ? $pagina->email : ''}}" >
        <label>Email</label>
    </div>

@endif

<div class="input-field">
    <textarea  class="materialize-textarea" name="texto" >
        {{isset($pagina->texto) ? $pagina->texto : ''}}
    </textarea>
    <label>Texto</label>
</div>


<div class="row">

    <div class="file-field input-field col m6 s12">
        <div class="btn">
            <span>Imagem</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validate">
        </div>
    </div>

    <div class="col m6 s12">
        @if(isset($pagina->imagem))
            <img  width="120" src="{{asset($pagina->imagem)}}" alt="">
        @endif
    </div>
</div>



<div class="input-field">
    <textarea  class="materialize-textarea" name="mapa" >
        {{isset($pagina->mapa) ? $pagina->mapa : ''}}
    </textarea>
    <label>Mapa</label>
</div>