@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboardsadf fatte</h1>
@stop

@section('content')
    wer
    <!-- Cadastrar Pessoa Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Horizontal Form</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="nomePessoaFisica" class="col-sm-2 control-label">Nome</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="nomePessoaFisica" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="campoDataNascimento" class="col-sm-2 control-label">Data de nascimento</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="campoDataNascimento" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="campoidade" class="col-sm-2 control-label">Data de nascimento</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="campoidade" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
@stop
