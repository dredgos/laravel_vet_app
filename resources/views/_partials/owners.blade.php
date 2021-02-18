<h5 class="mb-1">Owners List</h5>
@foreach (App\Models\Owner::All() as $owner)
    <ul>
        <li class="mb-1">{{$owner->fullName()}}</li>
    </ul>
@endforeach