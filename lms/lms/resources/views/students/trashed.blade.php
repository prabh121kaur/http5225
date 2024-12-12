@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">trashed students</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($students as $student)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$student -> fname}}
                        </h5>
                        <a href="{{route('students.restore',$student -> id)}}">
                            restore
                        </a>
                        <a href="{{route('students.destroy',$student -> id)}}">
                            delete permanently
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection