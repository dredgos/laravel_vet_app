@extends("App")

@section("content")
    <section class="mt-4 list-group-item">
       <p><strong>Animal Name:</strong> {{ $animal->name }}</p>
       <p><strong>Date Of Birth:</strong> {{ $animal->date_of_birth }}</p>
       <p><strong>Type:</strong> {{ $animal->type }}</p>
       <p><strong>Weight (kg):</strong> {{ $animal->weight_kg }}</p>
       <p><strong>Height (m):</strong> {{ $animal->height_m }}</p>
       <p><strong>Treatments:</strong> {{ $animal->treatments->pluck("name")->implode(", ") }}</p>
       <p><strong>Owner:</strong> {{ $animal->owner->fullName() }}</p>
       <p><strong>Last Updated:</strong> {{ $animal->lastUpdated() }}</p>

    </section>
@endsection