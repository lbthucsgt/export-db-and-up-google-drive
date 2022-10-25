@extends('layouts.index')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>{!! session()->get('success') !!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form id="frmForm" method="post">
        @csrf
        <div class="form-wrapper w-50">
            <p class="pt-3">Export database and up Google Drive</p>
            <button type="submit" class="btn btn-primary btn-submit">Export</button>
        </div>
    </form>
@endsection