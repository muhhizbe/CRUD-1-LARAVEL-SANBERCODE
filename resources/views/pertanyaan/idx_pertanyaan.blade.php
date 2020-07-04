@extends('layouts.master')

@section('content')
    <div class="container text-right mb-4 px-0">
        <a href="/pertanyaan/create" class="btn btn-outline-success">+ New</a>
    </div>
    @isset($data)
        @foreach($data as $item)
            <div class="card col-12 border-0 mb-3 shadow-sm">
                <div class="card-body form-inline">
                    <div class="col-11">
                        <h3 class="card-title">{{ $item->judul }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->created_at }}</h6>
                        <div class="form-inline">
                            <span class="mr-2 p-2 badge badge-pill badge-danger">Like {{$item->like}} </span>
                        <span class="mr-2 p-2 badge badge-pill badge-secondary">Disike {{$item->dislike}} </span>
                        <span class="mr-2 p-2 badge badge-pill badge-warning">Vote {{$item->vote}} </span>
                        </div>
                    </div>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="/jawaban/{{$item->id}}" class="card-link col-1 btn btn-outline-primary">Detail</a>
                </div>
            </div>
        @endforeach
    @endisset

    @empty($data)
        <h4 class="text-center text-muted">Opps! Belum ada pertanyaan!</h4>
    @endempty
@endsection

@push('js')

@endpush

@push('css')
<style>
    .card:hover{
        box-shadow: 0 0.125rem 0.75rem rgba(0, 0, 0, 0.100) !important;
        transition: 0.3s;
    }
</style>
@endpush