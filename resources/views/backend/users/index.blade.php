@extends('layouts.backend.main')

@section('title','Myusers | Kullanıcılar')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kullanıcı
                <small> Tüm Kullanıcılar</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/home') }}"><i class="fa fa-dashboard"> Dashboard </i></a>
                </li>
                <li><a href="{{ route('users.index') }}">Kullanıcılar</a></li>
                <li class="active">Tüm Kayıtlar</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header clearfix">
                            <div class="pull-left">
                                <a href="{{ route('users.create') }}" class="btn btn-success">Yeni Ekle</a>
                            </div>
                            <div class="pull-right">
                            </div>
                        </div>
                        <div class="box-body ">
                            @include('backend.partials.message')
                            @if(! $users->count())
                                <div class="alert alert-danger">
                                    <strong>Kayıt Bulunamadı!</strong>
                                </div>
                            @endif


                                @include('backend.users.table')
                        </div>
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                                {{ $users->appends( Request::query() )->render() }}
                            </div>
                            <div class="pull-right">
                                <small>{{ $usersCount }} kayıt bulundu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
      $('ul.pagination').addClass('no-margin pagination-sm')
    </script>
@endsection