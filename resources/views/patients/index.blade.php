
@extends('layouts.master')

@section('contenu')

<livewire:patients-comp />

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
