
@extends('layouts.master')

@section('contenu')

<livewire:patient-component />

@endsection()

<script>
    window.addEventListener("openFormModal" , event=>{
        $("#modaladdPatient").modal({
            "show": true,
            "backdrop":"static"
        })
    })
</script>

<script>
    window.addEventListener("closeModal" , event=>{
        $("#modaladdPatient").modal("hide")
    })
</script>
