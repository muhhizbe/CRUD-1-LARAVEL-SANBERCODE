@extends('layouts.master')

@section('content')
    <div class="container text-right mb-4 px-0">
        <a href="/pertanyaan/create" class="btn btn-outline-success">+ New</a>
    </div>
    @isset($data)
        @foreach($data as $item)
            <div class="card col-12 border-0 mb-3 shadow-sm">
                <div class="card-body form-inline">
                    <div class="col-10">
                        <h3 class="card-title">{{ $item->judul }}</h3>
                        @if($item->updated_at != null)
                        <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $item->updated_at }}</h6>
                        @else
                        <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $item->created_at }}</h6>
                        @endif
                        <div class="form-inline">
                            <span class="mr-2 p-2 badge badge-pill badge-danger"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{$item->like}} </span>
                            <span class="mr-2 p-2 badge badge-pill badge-secondary"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> {{$item->dislike}} </span>
                            <span class="mr-2 p-2 badge badge-pill badge-warning"><i class="fa fa-star-o" aria-hidden="true"></i> {{$item->vote}} </span>
                        </div>
                    </div>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <div class="col-2 form-inline p-0">
                        <a href="/pertanyaan/{{$item->id}}" class="card-link btn btn-outline-primary">Detail</a>
                        <a href="/jawaban/{{$item->id}}" class="card-link btn btn-outline-secondary">Answers</a>
                    </div>
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