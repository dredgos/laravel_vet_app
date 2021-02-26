@extends ("App")

@section("content")
<form class="form card" method="post">
    @csrf
    <h2 class="card-header">Create Animal</h2>

    <fieldset class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" />
            @error('name')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input id="date_of_birth" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" value="{{old('date_of_birth')}}" />
            @error('date_of_birth')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input id="type" name="type" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}"/>
            @error('type')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="weight_kg">Weight (kg)</label>
            <input id="weight_kg" name="weight_kg" class="form-control @error('weight_kg') is-invalid @enderror" value="{{old('weight_kg')}}"/>
            @error('weight_kg')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="height_m">Height (m)</label>
            <input id="height_m" name="height_m" class="form-control @error('height_m') is-invalid @enderror" value="{{old('height_m')}}"/>
            @error('height_m')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="biteyness">Biteyness (1-5)</label>
            <input id="biteyness" name="biteyness" class="form-control @error('biteyness') is-invalid @enderror" value="{{old('biteyness')}}"/>
            @error('biteyness')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
        </div>

 
    </fieldset>

    <div class="card-footer text-right">
        <button class="btn btn-success">Create</button>
    </div>
</form>
@endsection