@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                @foreach ($tasks as $task)
                <form action="{{ route('task-application', $task->id) }}">
                    @csrf
                    <div style="display: flex; justify-content: space-between;">
                        <h3>{{ $task->naziv_rada }} - {{$task->id}}</h3>

                        @if(in_array($task->id, $selectedTasksIndexes))
                            @csrf
                            @method('DELETE')
                            <button type="submit">Odjavi se</button>
                        @else
                            @csrf
                            @method('POST')
                            <button type="submit">Prijavi se</button>
                        @endif

                    </div>
                </form>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
