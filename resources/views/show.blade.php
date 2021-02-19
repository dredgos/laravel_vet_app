@extends("App")

@section("main")
    <section>
       <p>{{ $owner->fullName() }}</p>
       <p>{{ $owner->fullAddress() }}</p>
       <p>{{ $owner->email }}</p>
       <p>{{ $owner->telephone }}</p>
    </section>
@endsection