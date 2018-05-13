@extends('welcome')

@section('content')
    <h1 class="ui header blue centered">CRUD LARAVEL Y VUEjs</h1>

    <div class="row" style="padding-left: 10%;">
        <div class="ui grid">
            <div class="three wide column">
                <a href="#" class="ui labeled green icon button">
                    <i class="plus icon"></i>
                    Tarea
                </a>
            </div>
        </div>
    </div>

    <div class="row" style="padding-left:10%;padding-right:1%;margin-top:5%;" id="crud">
        <div class="ui grid">
            <div class="nine wide column">
                <table class="ui selectable celled striped table">
                    <thead class="ui inverted table">
                        <tr>
                            <th>ID</th>
                            <th>Tarea</th>
                            <th colspan="2">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="tarea in keeps">
                            <td width="10px">@{{ tarea.id }}</td>
                            <td>@{{ tarea.keep }}</td>
                            <td>
                                <div class="ui grid">
                                    <div class="eight wide column">
                                        <a href="#" class="circular ui icon teal button" data-tooltip="Editar Tarea" data-position="top left" data-inverted="">
                                            <i class="edit outline icon"></i>
                                        </a>
                                    </div>
                                    <div class="eight wide column">
                                        <a href="#" class="circular ui icon red button" data-tooltip="Eliminar Tarea" data-position="top left" data-inverted="">
                                            <i class="trash alternate outline icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="seven wide column">
                <pre class="ui secondary segment">
                    @{{ $data | json }}
                </pre>
            </div>
        </div>
    </div>
@endsection()