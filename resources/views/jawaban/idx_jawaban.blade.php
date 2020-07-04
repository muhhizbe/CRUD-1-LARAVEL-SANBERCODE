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
                    <span class="mr-2 p-2 badge badge-pill badge-danger">Like {{$pertanyaan->like}} </span>
                    <span class="mr-2 p-2 badge badge-pill badge-secondary">Disike {{$pertanyaan->dislike}} </span>
                    <span class="mr-2 p-2 badge badge-pill badge-warning">Vote {{$pertanyaan->vote}} </span>
                </div>
                <h5 class="card-subtitle mb-2 text-muted mt-3">{{ $pertanyaan->isi }}</h5>
            </div>
        </div>
    </div>
    <div class="container text-left my-4 px-0">
        <h3>Jawaban</h3>
    </div>
    <button class="btn btn-success mb-4" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        + Tambahkan Jawaban
    </button>
    <div class="collapse mb-4" id="collapseExample">
        <div class="col-12">
            <h4 class="text-center">New Answer</h4>
        </div>
        <form action="/jawaban/{{$pertanyaan->id}}" method="POST">
        @csrf()
            <div class="form-group">
                <textarea class="form-control" name="isi" id="validationTextarea" placeholder="Tuliskan jawaban anda disini" rows="10" required></textarea> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    @isset($jawaban)
        @foreach($jawaban as $item)
            <div class="card col-12 border-0 bg-dark shadow-sm mb-2">
                <div class="card-body bg-white form-inline">
                    <div class="col-12">
                        <h5 class="card-title">{{ $item->isi }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->created_at }}</h6>
                        <div class="form-inline">
                            <span class="mr-2 p-2 badge badge-pill badge-danger">Like {{$item->like}} </span>
                            <span class="mr-2 p-2 badge badge-pill badge-secondary">Disike {{$item->dislike}} </span>
                            <span class="mr-2 p-2 badge badge-pill badge-warning">Vote {{$item->vote}} </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endisset

    @empty($jawaban)
        <h4 class="text-center text-muted">Opps! Belum ada jawaban!</h4>
    @endempty
@endsection

