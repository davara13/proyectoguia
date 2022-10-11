@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Report</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense_report/">Back</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <form action="/expense_report" method="POST">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" value="{{old('title')}}">
                <label for="title">CC</label>
                <input type="number" class="form-control" id="cc" name="cc" placeholder="Type a cc" value="{{old('cc')}}">
                <label for="title">VALOR</label>
                <input type="number" class="form-control" id="valor" name="valor" placeholder="Type a valor" value="{{old('valor')}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection