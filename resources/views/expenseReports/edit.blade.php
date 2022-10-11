@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Edit Report {{$report->title}}</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense_report/">Back</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <form action="/expense_report/{{$report->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
                <label for="title">CC</label>
                <input type="number" class="form-control" id="cc" name="cc" placeholder="Type a cc">
                <label for="title">VALOR</label>
                <input type="number" class="form-control" id="valor" name="valor" placeholder="Type a valor">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection