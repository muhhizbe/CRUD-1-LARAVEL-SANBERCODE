@extends('layouts.master')

@section('content')
    <div class="col-12">
        <h4 class="text-center">Edit Question</h4>
    </div>
    <form action="/pertanyaan/{{$data->id}}" method="POST">
    @csrf()
    @method('PUT')
    <!-- {{csrf_field()}} -->
        <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->judul }}">
        </div>
        <div class="form-group">
            <label for="validationTextarea">Isi</label>
            <textarea class="form-control" name="isi" id="validationTextarea" placeholder="Tuliskan pertanyaann anda disini" rows="10" required>{{$data->isi}}</textarea> 
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

@push('js')

@endpush