
@extends('layouts.master')

@section('contenu')


<div class="col-12">
        <div class="card">
            <div class="card-header bg-primary  d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="nav-icon fas fa-users fa-2x"></i> Liste des patients</h3>

                <div class="card-tools d-flex align-items-center">
                    <livewire:ajout-patient-comp />
                        <div class="input-group input-group-md" style="width: 250px;">
                            <input type="text" wire:model="search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0 table-striped" style="height: 550px;">
                <table class="table table-head-fixed text-nowrap table-sm">
                    <thead>
                    <tr style="height:50px;">
                        <th style="width:5%;"></th>
                        <th style="width:25%;">Identité</th>
                        <th style="width:10%;">Téléphone</th>
                        <th style="width:20%;">Adresse</th>
                        <th style="width:10%;">Clan</th>
                        <th style="width:10%;">Village</th>
                        <th style="width:10%;">Créer le</th>
                        <th style="width:10%;" colspan="3" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($patients as $patient)
                            <tr>
                                <td>
                                    @if($patient->genre == "0")
                                        <img src="{{ asset('images/woman.png') }}" width="24" />
                                    @else
                                        <img src="{{ asset('images/man.png') }}" width="24" />
                                    @endif
                                </td>
                                <td>{{ $patient->nom }} {{ $patient->prenom }}</td>
                                <td>{{ $patient->telephone1 }}</td>
                                <td>{{ $patient->adresse }}</td>
                                <td>{{ $patient->clan }}</td>
                                <td>{{ $patient->village->nom }}</td>
                                <td>{{ optional($patient)->created_at->diffForHumans() }}</td>
                                <td class="">
                                    <button class="btn btn-link" wire:click=""><i class="fas fa-users-cog"></i> </button>
                                </td>
                                <td>
                                    <button class="btn btn-link" wire:click=""><i class="far fa-edit"></i></button>
                                </td>
                                <td>
                                    <button class="btn btn-link" wire:click=""><i class="fas fa-trash-alt text-danger"></i></button>
                                </td>
                            </tr>

                        @empty
                            <span>Aucun patient enregistré </span>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer ">
                <div class="float-right">

                </div>
            </div>
        </div>
    <!-- /.card -->
    </div>
</div>



@endsection()

