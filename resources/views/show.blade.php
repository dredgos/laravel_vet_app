@extends("App")

@section("content")
    <section class="mt-4 list-group-item">
       <p><strong>Name: </strong>{{ $owner->fullName() }}</p>
       <p><strong>Address: </strong>{{ $owner->fullAddress() }}</p>
       <p><strong>Email: </strong>{{ $owner->email }}</p>
       <p><strong>Telephone: </strong>{{ $owner->telephone }}</p>
        <p><strong>Animals: </strong>
            @foreach ($owner->animals as $animal)
                <a href="{{$owner->id}}/animals/{{$animal->id}}">{{$animal->name}}</a>
            @endforeach
        </p>
        <p><strong>Last Updated: </strong>{{ $owner->lastUpdated() }}</p>
    </section>
@endsection