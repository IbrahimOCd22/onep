@extends('layouts.onep')


@section('cont')

<div class="col-md-6 grid-margin stretch-card">
    <h2>Nouveau problème</h2>
    @if ($message = Session::get('x'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <form class="col-8" method="post" action="{{ route('prblm.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Matricule</label>
            <input type="text" class="form-control" name="matricule" value="{{ Auth::user()->matricule }}"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Site</label>
            <input type="text" class="form-control" name="Site" value="{{ Auth::user()->site }}"/>
        </div>

        <div class="mb-3">
          <label class="form-label">Motif</label>
          <select class="form-select" name="motif">
              <option value="">Select Motif</option>
              @foreach($prblms as $prblm)
                  <optgroup label="{{ $prblm->type_de_problemes }}">
                      @if ($prblm->type_de_problemes == "SurPc")
                          @foreach($Pc as $P)
                              <option value="{{ $P->nom_de_problemes }}">{{ $P->nom_de_problemes }}</option>
                          @endforeach
                      @endif
                      @if ($prblm->type_de_problemes == "Soft")
                          @foreach($Soft as $P)
                              <option value="{{ $P->nom_de_problemes }}">{{ $P->nom_de_problemes }}</option>
                          @endforeach
                      @endif
                      @if ($prblm->type_de_problemes == "Reseaux")
                          @foreach($Res as $P)
                              <option value="{{ $P->nom_de_problemes }}">{{ $P->nom_de_problemes }}</option>
                          @endforeach
                      @endif
                      @if ($prblm->type_de_problemes == "Imprimant")
                      @foreach($Imp as $P)
                          <option value="{{ $P->nom_de_problemes }}">{{ $P->nom_de_problemes }}</option>
                      @endforeach
                  @endif
                  </optgroup>
              @endforeach
          </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Date du Problème</label>
        <input type="date" class="form-control" name="date_probleme" />
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
