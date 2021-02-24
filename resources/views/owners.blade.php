@extends("app")

@section("title")
    <h5 class="mb-1">Owners List</h5>
@endsection


@section("content")
    

    @if ($owners->count() === 0)
        <p>No Owners Found</p>
    @else
        @foreach ($owners as $owner)
            <ul class="mt-4">
                <a href="owners/{{$owner->id}}"><li class="list-group-item">{{$owner->fullName()}}</li></a>
            </ul>
        @endforeach
    @endif

@endsection