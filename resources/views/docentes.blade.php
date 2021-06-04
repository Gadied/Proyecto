@extends('layouts.app', 'js.app', 'css.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <h1>Docentes</h1>
            </div>
        </div>
    </div>

    <div id="wrapperMenu">
        <ul id="menu-dashboard"class="nav nav-pills nav-stacked">
            <li class="active"><a href="#"><span class="icon-home4"></span> <span class="hidden-xs">Inicio</span></a></li>
            <li><a href="#"><span class="icon-user3"></span> <span class="hidden-xs">Perfil</span></a></li>
            <li><a href="#"><span class="icon-search-2"></span> <span class="hidden-xs"> Buscar</span></a></li>
            <li><a href="#"><span class="icon-speacker-1"></span> <span class="hidden-xs"> Publicaciones</span> <span class="badge pull-right">42</span></a></li>
            <li><a href="#"><span class="icon-files"></span> <span class="hidden-xs">Facturación</a></li>


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#submenu" aria-expanded="false">
                    <span class="icon-link2"></span>
                    Nuevos Link<span class="caret"></span></a>
                <ul class="nav collapse" id="submenu" role="menu" aria-labelledby="btn-1">
                    <li><a href="#">Elementos del Submenu</a></li>
                    <li><a href="#">Elementos del Submenu</a></li>
                    <li><a href="#">Elementos del Submenu</a></li>
                    <li><a href="#">Elementos del Submenu</a></li>
                </ul>
            </li>
            <li><a href="#"><span class="icon-link2"></span> <span class="hidden-xs">Nuevos link</span></a></li>
            <li><a href="#"><span class="icon-link2"></span> <span class="hidden-xs">Nuevos link</span></a></li>
        </ul>
    </div>

@endsection

