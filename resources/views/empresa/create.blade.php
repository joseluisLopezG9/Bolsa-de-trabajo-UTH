@extends('adminlte::page')

@section('title', 'Nueva empresa')

@section('template_title')
    Create Empresa
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

            <center><h3 style="color: green;font-size: 30px;">Bolsa de Trabajo Institucional</h3></center>
                @includeif('partials.errors')

                
                <div class="card card-default">
                    <div class="card-header">
                    <h4 id="card_title">
                                {{ __('Nueva Empresa') }}
					</h4>
                    </div>
                        <form method="POST" action="{{ route('admin.empresas.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('empresa.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
