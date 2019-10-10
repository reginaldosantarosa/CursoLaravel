@extends('layouts.app')

@section('content')
    <<div class="container">
        <h2 class="center">Editar Paginas</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Inicio</a>
                        <a href="{{route('admin.paginas')}}" class="breadcrumb">Lista de Paginas</a>
                        <a class="breadcrumb">Editar de Pagina</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <form method="post" enctype="multipart/form-data" action="{{route('admin.paginas.atualizar',$pagina->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                @include('admin.paginas._form')
                <button class="btn blue">Atualizar</button>

            </form>

        </div>

    </div>
@endsection