@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h4 mb-0">Daftar Pengguna</h1>
    <a href="{{ route('user.create') }}" class="btn btn-brand btn-sm">
        <i class="bi bi-person-plus"></i> Tambah Pengguna
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<x-user_table :users="$users" />
@endsection