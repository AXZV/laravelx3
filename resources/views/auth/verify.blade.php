@extends('layouts.master')

@section('content')
<style>
.container
{
    margin-top:7em;
    margin-bottom:7em;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifikasi Alamat e-mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Sebuah tautan verifikasi baru telah dikirim ke alamat email anda.
                        </div>
                    @endif
                    

                    Alamat E-mail anda belum terverifikasi, silahkan cek email anda untuk tautan verifikasi. Jika anda tidak mendapatkan email,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">klik disini untuk mengirim ulang tautan verifikasi. ( {{ Auth::user()->email }} )</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
