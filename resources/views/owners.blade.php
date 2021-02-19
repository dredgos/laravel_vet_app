@extends("app")

@section("title")
    <h5 class="mb-1">Owners List</h5>
@endsection


@section("main")
    

    @if ($owners->count() === 0)
        <p>No Owners Found</p>
    @else
        @foreach ($owners as $owner)
            <ul>
                <li class="mb-1">{{$owner->fullName()}}</li>
            </ul>
        @endforeach
    @endif

@endsection