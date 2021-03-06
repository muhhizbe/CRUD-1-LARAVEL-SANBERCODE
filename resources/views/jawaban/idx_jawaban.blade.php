@extends('layouts.master')

@section('content')
    <div class="container text-left my-4 px-0">
        <h3>Pertanyaan</h3>
    </div>
    <div class="card col-12 border-0 shadow-sm">
        <div class="card-body form-inline">
            <div class="col-11">
                <h3 class="card-title">{{ $pertanyaan->judul }}</h3>
                <h6 class="card-subtitle mb-2 text-muted">{{ $pertanyaan->created_at }}</h6>
                <div class="form-inline">
                    <span class="mr-2 p-2 badge badge-pill badge-danger"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{$pertanyaan->like}} </span>
                    <span class="mr-2 p-2 badge badge-pill badge-secondary"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> {{$pertanyaan->dislike}} </span>
                    <span class="mr-2 p-2 badge badge-pill badge-warning"><i class="fa fa-star-o" aria-hidden="true"></i> {{$pertanyaan->vote}} </span>
                </div>
                <h5 class="card-subtitle mb-2 text-muted mt-3">{{ $pertanyaan->isi }}</h5>
            </div>
        </div>
    </div>
    <div class="container text-left my-4 px-0">
        <h3>Jawaban</h3>
    </div>

    @isset($jawaban)
        @foreach($jawaban as $item)
            <div class="card col-12 border-0 bg-dark shadow-sm mb-2">
                <div class="card-body bg-white form-inline">
                    <div class="col-12">
                        <h5 class="card-title">{{ $item->isi }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->created_at }}</h6>
                        <div class="form-inline">
                            <span class="mr-2 p-2 badge badge-pill badge-danger"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{$item->like}} </span>
                            <span class="mr-2 p-2 badge badge-pill badge-secondary"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> {{$item->dislike}} </span>
                            <span class="mr-2 p-2 badge badge-pill badge-warning"><i class="fa fa-star-o" aria-hidden="true"></i> {{$item->vote}} </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endisset

    @if(count($jawaban) == 0)
        <h4 class="text-center text-muted">Opps! Belum ada jawaban!</h4>
    @endif
@endsection

