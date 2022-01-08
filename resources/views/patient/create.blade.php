<div class="modal fade" id="modaladdPatient" tabindex="-1" role="dialog" wire:ignore.self>
    <div class="modal-dialog modal-xl" style="padding-right: 17px; display: block;">
        <div class="modal-content">

            <div class="card bg-gray-light ">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-edit"></i><font style="vertical-align: inherit;">
                    Formulaire ajout patient
                    </font></h3>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">

                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nom</label>
                                                        <input type="text" class="form-control
                                                        @error('newPatient.nom') is-invalid @enderror" wire:model="newPatient.nom">
                                                        @error("newPatient.nom")
                                                            <div class="text-danger"> {{ $message }} </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Prenom</label>
                                                        <input type="text" class="form-control
                                                        @error('newPatient.prenom') is-invalid @enderror" wire:model="newPatient.prenom">
                                                        @error("newPatient.prenom")
                                                            <div class="text-danger"> {{ $message }} </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Sexe</label>
                                                        <select class="form-control
                                                                @error('newPatient.genre') is-invalid @enderror" wire:model="newPatient.genre">
                                                            <option value="">---------</option>
                                                            <option value="1">Homme</option>
                                                            <option value="0">Femme</option>
                                                        </select>
                                                        @error("newPatient.genre")
                                                            <div class="text-danger"> {{ $message }} </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Date de naissance</label>
                                                        <input type="text" class="form-control
                                                        @error('newPatient.dateNaissance') is-invalid @enderror" wire:model="newPatient.dateNaissance">
                                                        @error("newPatient.dateNaissance")
                                                            <div class="text-danger"> {{ $message }} </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Lieu de naissance</label>
                                                        <input type="text" class="form-control
                                                        @error('newPatient.lieuNaissance') is-invalid @enderror" wire:model="newPatient.lieuNaissance">
                                                        @error("newPatient.lieuNaissance")
                                                            <div class="text-danger"> {{ $message }} </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Téléphone 1</label>
                                                        <input type="text" class="form-control
                                                        @error('newPatient.telephone') is-invalid @enderror" wire:model="newPatient.telephone">
                                                        @error("newPatient.telephone")
                                                            <div class="text-danger"> {{ $message }} </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Téléphone 2</label>
                                                        <input type="text" class="form-control" wire:model="newPatient.telephone2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Adresse</label>
                                                <input type="text" class="form-control
                                                @error('newUse.adresse') is-invalide @enderror"
                                                wire:model="newPatient.adresse">
                                                @error("newPatient.adresse")
                                                    <div class="text-danger"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">

                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Clan</label>
                                                        <input type="text" class="form-control" wire:model="newPatient.clan">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Clan du grand père</label>
                                                        <input type="text" class="form-control" wire:model="newPatient.clanGrandPere">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Clan du père</label>
                                                        <input type="text" class="form-control" wire:model="newPatient.clanPere">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Clan de la mère</label>
                                                        <input type="text" class="form-control" wire:model="newPatient.clanMere">
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
            <div class="modal-footer">
                <button type="button" wire:click="" class="btn btn-primary">Valider</button>
                <button type="button" wire:click="" class="btn btn-danger">Fermer</button>
            </div>
        </div>
    </div>
</div>
