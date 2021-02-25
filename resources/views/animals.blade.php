@extends("app")

@section("title")
    <h5 class="mb-1">Animals List</h5>
@endsection


@section("content")
    

    @if ($animals->count() === 0)
        <p>No Animals Found</p>
    @else
        @foreach ($animals as $animal)
            <ul class="mt-4">
                <li class="list-group-item">Name: <a href="animals/{{$animal->id}}">{{$animal->name}}</a></li>
                <li class="list-group-item">Owner: <a href="../../owners/{{$animal->owner->id}}">{{$animal->owner->fullName()}}</a></li>
            </ul>
        @endforeach
    @endif

@endsection