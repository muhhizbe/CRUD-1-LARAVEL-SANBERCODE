@extends('layouts.master')

@section('content')
    <div class="container text-left my-4 px-0">
        <h3>Pertanyaan</h3>
    </div>
    <div class="card col-12 border-0 shadow-sm">
        <div class="card-body form-inline">
            <div class="col-10">
                <h3 class="card-title">{{ $pertanyaan->judul }}</h3>
                @if($pertanyaan->updated_at != null)
                <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $pertanyaan->updated_at }}</h6>
                @else
                <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $pertanyaan->created_at }}</h6>
                @endif
                <div class="form-inline">
                    <span class="mr-2 p-2 badge badge-pill badge-danger"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{$pertanyaan->like}} </span>
                    <span class="mr-2 p-2 badge badge-pill badge-secondary"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> {{$pertanyaan->dislike}} </span>
                    <span class="mr-2 p-2 badge badge-pill badge-warning"><i class="fa fa-star-o" aria-hidden="true"></i> {{$pertanyaan->vote}} </span>
                </div>
                <h5 class="card-subtitle mb-2 text-muted mt-3">{{ $pertanyaan->isi }}</h5>
            </div>
            <div class="col-2 form-inline" style="font-size: 20px">
                <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="delete">Edit</a>| 
                <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit" class="delete text-danger">Delete</button>                
                </form>
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

@push('css')
<style>
    .delete{
        background: none;
        border: none;
        padding: 5px;
        text-decoration: underline 0;
    }
    .delete:hover{
        text-decoration: underline;
        transition-delay: 0.3s;
    }
</style>
@endpush