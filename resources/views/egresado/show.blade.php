@extends('layouts.app')

@section('template_title')
    {{ $egresado->name ?? 'Show Egresado' }}
@endsection


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h3>Mostrar egresado </h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('egresados.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $egresado->name }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $egresado->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname2:</strong>
                            {{ $egresado->lastname2 }}
                        </div>
                        <div class="form-group">
                            <strong>Level:</strong>
                            {{ $egresado->level }}
                        </div>
                        <div class="form-group">
                            <strong>Career:</strong>
                            {{ $egresado->career }}
                        </div>
                        <div class="form-group">
                            <strong>Enrollment:</strong>
                            {{ $egresado->enrollment }}
                        </div>
                        <div class="form-group">
                            <strong>Division:</strong>
                            {{ $egresado->division }}
                        </div>
                        <div class="form-group">
                            <strong>Gen:</strong>
                            {{ $egresado->gen }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $egresado->address }}
                        </div>
                        <div class="form-group">
                            <strong>Suburb:</strong>
                            {{ $egresado->suburb }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $egresado->state }}
                        </div>
                        <div class="form-group">
                            <strong>Mun:</strong>
                            {{ $egresado->mun }}
                        </div>
                        <div class="form-group">
                            <strong>Tel:</strong>
                            {{ $egresado->tel }}
                        </div>
                        <div class="form-group">
                            <strong>Cel:</strong>
                            {{ $egresado->cel }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $egresado->email }}
                        </div>
                        <div class="form-group">
                            <strong>User:</strong>
                            {{ $egresado->user }}
                        </div>
                        <div class="form-group">
                            <strong>Pass:</strong>
                            {{ $egresado->pass }}
                        </div>
                        <div class="form-group">
                            <strong>Reg Date:</strong>
                            {{ $egresado->reg_date }}
                        </div>
                        <div class="form-group">
                            <strong>Validity:</strong>
                            {{ $egresado->validity }}
                        </div>
                        <div class="form-group">
                            <strong>Skills:</strong>
                            {{ $egresado->skills }}
                        </div>
                        <div class="form-group">
                            <strong>Skills1:</strong>
                            {{ $egresado->skills1 }}
                        </div>
                        <div class="form-group">
                            <strong>Skills2:</strong>
                            {{ $egresado->skills2 }}
                        </div>
                        <div class="form-group">
                            <strong>Skills3:</strong>
                            {{ $egresado->skills3 }}
                        </div>
                        <div class="form-group">
                            <strong>Skills4:</strong>
                            {{ $egresado->skills4 }}
                        </div>
                        <div class="form-group">
                            <strong>Skills5:</strong>
                            {{ $egresado->skills5 }}
                        </div>
                        <div class="form-group">
                            <strong>Skills6:</strong>
                            {{ $egresado->skills6 }}
                        </div>
                        <div class="form-group">
                            <strong>Skills7:</strong>
                            {{ $egresado->skills7 }}
                        </div>
                        <div class="form-group">
                            <strong>Skills8:</strong>
                            {{ $egresado->skills8 }}
                        </div>
                        <div class="form-group">
                            <strong>Skills9:</strong>
                            {{ $egresado->skills9 }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $egresado->area }}
                        </div>
                        <div class="form-group">
                            <strong>Cv:</strong>
                            {{ $egresado->cv }}
                        </div>
                        <div class="form-group">
                            <strong>Invoice:</strong>
                            {{ $egresado->invoice }}
                        </div>
                        <div class="form-group">
                            <strong>Remark:</strong>
                            {{ $egresado->remark }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
