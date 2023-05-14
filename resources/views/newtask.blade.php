@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1>Novi rad</h1>

            <form method="POST" action="{{ route('create-task') }}" style="display: flex; flex-direction: column;">

                @csrf
                <label for="naziv_rada"><b>Naziv rada</b></label>
                <input type="text" name="naziv_rada" required>

                <label for="naziv_rada_eng"><b>Naziv rada na engleskom</b></label>
                <input type="text" name="naziv_rada_eng" required>

                <label for="zadatak_rada"><b>Zadatak rada</b></label>
                <input type="text" name="zadatak_rada" required>

                <select name="tip_studija" id="tip_studija">
                    <option value="value0">Odaberite studij</option>
                    <option value="value1">stručni</option>
                    <option value="value2">preddiplomski</option>
                    <option value="value3">diplomski</option>
                </select>

                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>

            </form>
        </div>
    </div>
</div>
@endsection
