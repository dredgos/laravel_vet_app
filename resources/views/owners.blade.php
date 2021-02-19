@extends("app")

@section("main")
    <h5 class="mb-1">Owners List</h5>

    @if ($owners->count() === 0)
        <p>No Owners Found</p>
    @else
        @foreach (App\Models\Owner::All() as $owner)
            <ul>
                <li class="mb-1">{{$owner->fullName()}}</li>
            </ul>
        @endforeach
    @endif

@endsection