@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h4 mb-0">Daftar Pengguna</h1>
    <a href="{{ route('user.create') }}" class="btn btn-brand btn-sm">
        <i class="bi bi-person-plus"></i> Tambah Pengguna
    </a>
</div>

<x-user_table :users="$users" />
@endsection