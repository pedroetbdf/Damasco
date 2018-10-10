@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Cadastro de Pessoa Física</h1>
@stop

@section('content')
    <!-- Styles -->
    <link href="{{ asset('vendor/adminlte/bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/plugins/iCheck/all.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">








    <!-- Cadastrar Pessoa Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
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
                    <label for="campoDataNascimento1" class="col-sm-2 control-label">CPF</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="campoDataNascimento1" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="campoDataNascimento2" class="col-sm-2 control-label">RG</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="campoDataNascimento2" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="campoDataNascimento3" class="col-sm-2 control-label">UF Nascimento</label>

                    <div class="col-sm-10">
                        <select class="form-control" id="campoDataNascimento3" >
                            <option>Selecione</option>
                            <option>Ceará</option>
                            <option>Distrito Federal</option>
                            <option>Bahia</option>
                            <option>option 5</option>
                        </select>

                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-2 control-label" for="Date">Data de Nascimento</label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker"/>
                        </div>
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


    <!-- Scripts -->
    <script src="{{ asset('vendor/adminlte/bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    {{--<script src="{{ asset('vendor/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>--}}
    {{--<script src="{{ asset('vendor/adminlte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>--}}
    {{--<script src="{{ asset('vendor/adminlte/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>--}}
    {{--<script src="{{ asset('vendor/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>--}}
    {{--<script src="{{ asset('vendor/adminlte/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>--}}

    {{--<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">--}}
    {{--<link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" />--}}
    {{--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>--}}
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>--}}
    {{--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>--}}
    {{--<script type="text/javascript" src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>--}}

    <script src="{{ asset('vendor/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.pt-BR.js') }}"></script>

    <script type="text/javascript">


        var versaoJquery = $.fn.jquery;
        console.log('Versão jQuery: ' + versaoJquery);
        //Date picker
        //Date picker



        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy',
            language: 'pt-BR',
            autoclose:true

        });
        // $('#datepicker').on('changeDate', function(ev){
        //     $(this).datepicker('hide');
        // });
            // $('#datepicker').datepicker({
            //     defaultDate: "11/1/2013",
            //     locale: 'pt-br'
            // });


        $( document ).ready(function() {

            console.log( "ready!" );

        });



    </script>
@stop
