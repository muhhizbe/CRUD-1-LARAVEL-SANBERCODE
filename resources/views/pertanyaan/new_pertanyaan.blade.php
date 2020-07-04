@extends('layouts.master')

@section('content')
    <div class="col-12">
        <h4 class="text-center">New Question</h4>
    </div>
    <form action="/pertanyaan" method="POST">
    @csrf()
        <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="validationTextarea">Isi</label>
            <textarea class="form-control" name="isi" id="validationTextarea" placeholder="Tuliskan pertanyaann anda disini" rows="10" required></textarea> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@push('js')

@endpush