@extends('layouts.app')

@section('content')

    <<div class="container">
        <h2 class="center">Editar Tipos</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Inicio</a>
                        <a href="{{route('admin.tipos')}}" class="breadcrumb">Lista de Tipos</a>
                        <a class="breadcrumb">Editar de Tipos</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <form method="post" action="{{route('admin.tipos.atualizar',$registro->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                @include('admin.tipos._form')
                <button class="btn blue">Atualizar</button>
            </form>
        </div>

    </div>
@endsection