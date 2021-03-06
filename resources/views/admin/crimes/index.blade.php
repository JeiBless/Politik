@extends('admin.layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ $pagetitle }}</h4>
                        <p class="card-category"> {{ $pagedescription }}</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Descripción
                                    </th>
                                    <th>
                                        Opciones
                                    </th>
                                </thead>
                                <tbody>
                                @foreach($crimes as $item)
                                    <tr>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->description }}
                                        </td>
                                        <td>
                                            <a href="{{ url('/admin/crimes/' . $item->id . '/edit') }}" title="Editar rol"><button class="btn btn-primary btn-sm">Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/crimes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar rol" onclick="return confirm(&quot;Confirm delete?&quot;)"> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(Session::has('flash_message'))
            {{Session::get('flash_message')}}
        @endif
@endsection
