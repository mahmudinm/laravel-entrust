@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    {{-- Jika admin bisa akses --}}
                    @role('admin')
                        <h1>Hi Admin</h1>
                    @endrole

                    {{-- Jika admin atau user bisa akses --}}
                    @role(['user', 'admin'])
                        <h1>Hi user</h1>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
