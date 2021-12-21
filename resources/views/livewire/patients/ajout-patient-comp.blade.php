<div>


@include("livewire.patients.form-add-patient")

<a href="" class="btb btn-link text-white mr-4 d-block" wire:click.prevent="goToAddPatient()"><i class="fas fa-plus-circle"></i> Patient</a>
</div>




<script>
    window.addEventListener("showModal" , event=>{
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
