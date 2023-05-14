@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <a href="/new-task">Dodajte novi rad</a>
        <br>

        <div class="col-md-8">
            <div class="card">

                @foreach ($students as $student)
                    <div style="display: flex; justify-content: space-between;">
                        <h3>{{ $student->name }} - </h3>
                        <h3>{{ $teachers_tasks[$loop->index]->naziv_rada }}</h3>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
