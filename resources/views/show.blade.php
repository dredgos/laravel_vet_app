@extends("App")

@section("content")
    <section class="mt-4 list-group-item">
       <p>{{ $owner->fullName() }}</p>
       <p>{{ $owner->fullAddress() }}</p>
       <p>{{ $owner->email }}</p>
       <p>{{ $owner->telephone }}</p>
    </section>
@endsection