@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">{{ $pagetitle }}</h4>
                    <p class="card-category"> {{ $pagedescription }}</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="/admin/political-parties">
                        @csrf
                        @include ('admin.political_parties.form', ['formMode' => 'create'])
                        <button type="submit" class="btn btn-primary pull-right">Crear entidad</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
