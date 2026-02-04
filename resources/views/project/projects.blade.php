@extends('layouts.master', [
    'title' => 'Projects',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush

@push('scripts')
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery (si pas déjà présent) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>

    <script>
        $(document).ready(function() {
            $('#managers').select2({
                placeholder: "Sélectionnez les chefs de projet",
                allowClear: true,
                width: '100%'
            });
            $('#team_members').select2({
                placeholder: "Sélectionnez les Membres de l’équipe",
                allowClear: true,
                width: '100%'
            });
            $('#team_leaders').select2({
                placeholder: "Sélectionnez les Leaders de l’équipe",
                allowClear: true,
                width: '100%'
            });
        });
    </script>
@endpush

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Projets</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Employee
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Projets</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="me-2 mb-2">
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <i class="ti ti-file-export me-1"></i>Exporter
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                        class="ti ti-file-type-pdf me-1"></i>Exporter en PDF</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                        class="ti ti-file-type-xls me-1"></i>Exporter en Excel </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_project"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Ajouter un
                        projet</a>
                </div>
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        @include('layouts.status')

        <!-- Project list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Liste des projets</h5>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Select Statut
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Sort By : Last 7 Days
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently
                                    Added</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7
                                    Days</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>ID projet</th>
                                <th>Nom du projet</th>
                                <th>Chef</th>
                                <th>Equipe</th>
                                <th>Date limite</th>
                                <th>Priorité</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <!-- ID Projet -->
                                    <td><a
                                            href="{{ route('projects.show', $project->id_project) }}">{{ $project->project_code }}</a>
                                    </td>

                                    <!-- Nom du projet -->
                                    <td>
                                        <h6 class="fw-medium">
                                            <a
                                                href="{{ route('projects.show', $project->id_project) }}">{{ $project->project_name }}</a>
                                        </h6>
                                    </td>

                                    <!-- Chef de projet -->
                                    <td>
                                        {{ $project->manager_names ?? 'Aucun' }}
                                    </td>

                                    <!-- Équipe -->
                                    <td>
                                        {{ $project->member_names ?? 'Aucun' }}
                                    </td>

                                    <!-- Date limite -->
                                    <td>
                                        {{ \Carbon\Carbon::parse($project->end_date)->format('d M Y') }}
                                    </td>

                                    <!-- Priorité -->
                                    <td>
                                        <span
                                            class="badge
                                            @if ($project->priority == 'High') bg-danger
                                            @elseif($project->priority == 'Medium') bg-warning
                                            @else bg-success @endif">
                                            @if ($project->priority == 'High')
                                                <i class="ti ti-arrow-up-right"></i> Haute
                                            @elseif($project->priority == 'Medium')
                                                <i class="ti ti-minus"></i> Moyenne
                                            @elseif($project->priority == 'Low')
                                                <i class="ti ti-arrow-down-left"></i> Faible
                                            @endif
                                        </span>
                                    </td>

                                    <!-- Statut -->
                                    <td>
                                        @if ($project->status == 'Active')
                                            <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Actif
                                            </span>
                                        @else
                                            <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Inactif
                                            </span>
                                        @endif
                                    </td>
                                    <!-- Actions -->
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="{{ route('projects.show', $project->id_project) }}"
                                                class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal{{ $project->id_project }}"><i
                                                    class="ti ti-trash"></i></a>
                                            <div class="modal fade" id="delete_modal{{ $project->id_project }}">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center">
                                                            <span
                                                                class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                                                                <i class="ti ti-trash-x fs-36"></i>
                                                            </span>
                                                            <h4 class="mb-1">Confirmer la suppression</h4>
                                                            <p class="mb-3">Etes-cous sure de vouloir supprimer cet
                                                                projet?</p>
                                                            <form
                                                                action="{{ route('projects.destroy', $project->id_project) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="d-flex justify-content-center">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-light me-3"
                                                                        data-bs-dismiss="modal">Annuler</a>
                                                                    <button type="submit" class="btn btn-danger">Oui,
                                                                        Supprimer</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- / Project list  -->

    </div>

    <!-- Add Project -->
    <div class="modal fade" id="add_project" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header header-border align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <h5 class="modal-title me-2">Ajout d'un projet</h5>
                    </div>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="add-info-fieldset ">
                    <div class="contact-grids-tab p-3 pb-0">
                        <ul class="nav nav-underline" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="basic-tab" data-bs-toggle="tab"
                                    data-bs-target="#basic-info" type="button" role="tab"
                                    aria-selected="true">Information Basique</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member"
                                    type="button" role="tab" aria-selected="false">Membres</button>
                            </li>
                        </ul>
                    </div>
                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="basic-info" role="tabpanel"
                                aria-labelledby="basic-tab" tabindex="0">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div
                                                class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">

                                                <div class="profile-upload">
                                                    <label>Logo du projet</label>
                                                    <input type="file" name="logo" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Nom du projet</label>
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Client</label>
                                                <select name="client_id" class="form-select">
                                                    <option value="">Sélectionner un client</option>
                                                    @foreach ($clients as $client)
                                                        <option value="{{ $client->id_client }}">{{ $client->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Date de début</label>
                                                        <div class="input-icon-end position-relative">
                                                            <input type="text" name="start_date"
                                                                class="form-control datetimepicker"
                                                                placeholder="dd/mm/yyyy">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar text-gray-7"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Date de fin</label>
                                                        <div class="input-icon-end position-relative">
                                                            <input name="end_date" type="text"
                                                                class="form-control datetimepicker"
                                                                placeholder="dd/mm/yyyy">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar text-gray-7"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Priorité</label>
                                                        <select name="priority" class="form-select">
                                                            <option value="">Sélectionner</option>
                                                            <option value="High">Haute</option>
                                                            <option value="Medium">Moyenne</option>
                                                            <option value="Low">Faible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Valeur du projet</label>
                                                        <input type="number" name="project_value" class="form-control"
                                                            step="0.01">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Type de prix</label>
                                                        <input type="text" name="price_type" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-block mb-0">
                                                <label class="form-label">Fichier joint</label>
                                                <input class="form-control" type="file" name="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab"
                                tabindex="0">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label me-2">Membres de l’équipe</label>
                                                <select required class="form-control select2" name="team_members[]"
                                                    id="team_members" multiple>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                            {{ $user->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label me-2">Leaders de l’équipe</label>
                                                <select required class="form-control select2" name="team_leaders[]"
                                                    id="team_leaders" multiple>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                            {{ $user->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label me-2">Managers</label>
                                                <select required class="form-control select2" name="managers[]"
                                                    id="managers" multiple>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                            {{ $user->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div>
                                                <label class="form-label">Tags</label>
                                                <input required class="input-tags form-control"
                                                    placeholder="Entrer virgule pour séparer" type="text"
                                                    data-role="tagsinput" name="tags[]" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Statut</label>
                                                <select name="status" class="form-select">
                                                    <option value="Active">Actif</option>
                                                    <option value="Inactive">Inactif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button type="button" class="btn btn-outline-light border me-2"
                                        data-bs-dismiss="modal">Annuler</button>
                                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Project -->

    <!-- Edit Project -->
    <div class="modal fade" id="edit_project" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header header-border align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <h5 class="modal-title me-2">Edit Project </h5>
                        <p class="text-dark">Project ID : PRO-0004</p>
                    </div>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="add-info-fieldset ">
                    <div class="contact-grids-tab p-3 pb-0">
                        <ul class="nav nav-underline" id="myTab1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="basic-tab1" data-bs-toggle="tab"
                                    data-bs-target="#basic-info1" type="button" role="tab"
                                    aria-selected="true">Basic Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="member-tab1" data-bs-toggle="tab" data-bs-target="#member1"
                                    type="button" role="tab" aria-selected="false">Members</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent1">
                        <div class="tab-pane fade show active" id="basic-info1" role="tabpanel"
                            aria-labelledby="basic-tab1" tabindex="0">
                            <form action="projects.html">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div
                                                class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                                <div
                                                    class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                    <i class="ti ti-photo text-gray-2 fs-16"></i>
                                                </div>
                                                <div class="profile-upload">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Upload Project Logo</h6>
                                                        <p class="fs-12">Image should be below 4 mb</p>
                                                    </div>
                                                    <div class="profile-uploader d-flex align-items-center">
                                                        <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                            Upload
                                                            <input type="file" class="form-control image-sign"
                                                                multiple="">
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-light btn-sm">Cancel</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Project Name</label>
                                                <input type="text" class="form-control" value="Office Management">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Client</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Anthony Lewis</option>
                                                    <option>Brian Villalobos</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Start Date</label>
                                                        <div class="input-icon-end position-relative">
                                                            <input type="text" class="form-control datetimepicker"
                                                                placeholder="dd/mm/yyyy" value="02-05-2024">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar text-gray-7"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">End Date</label>
                                                        <div class="input-icon-end position-relative">
                                                            <input type="text" class="form-control datetimepicker"
                                                                placeholder="dd/mm/yyyy" value="02-05-2024">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar text-gray-7"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Priority</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>High</option>
                                                            <option>Medium</option>
                                                            <option>Low</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Project Value</label>
                                                        <input type="text" class="form-control" value="$">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Price Type</label>
                                                        <input type="text" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <div class="summernote"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-block mb-0">
                                                <label class="form-label">Upload Files</label>
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="btn btn-outline-light border me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="member1" role="tabpanel" aria-labelledby="member-tab1"
                            tabindex="0">
                            <form action="projects.html">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label me-2">Team Members</label>
                                                <input class="input-tags form-control" placeholder="Add new"
                                                    type="text" data-role="tagsinput" name="Label"
                                                    value="Jerald,Andrew,Philip,Davis">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label me-2">Team Leader</label>
                                                <input class="input-tags form-control" placeholder="Add new"
                                                    type="text" data-role="tagsinput" name="Label"
                                                    value="Hendry,James">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label me-2">Project Manager</label>
                                                <input class="input-tags form-control" placeholder="Add new"
                                                    type="text" data-role="tagsinput" name="Label" value="Dwight">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div>
                                                <label class="form-label">Tags</label>
                                                <input class="input-tags form-control" placeholder="Add new"
                                                    type="text" data-role="tagsinput" name="Label"
                                                    value="Collab,Promotion,Rated">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Active</option>
                                                    <option>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="btn btn-outline-light border me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#success_modal">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Project -->

    <!-- Add Project Success -->
    <div class="modal fade" id="success_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center p-3">
                        <span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i
                                class="ti ti-check fs-24"></i></span>
                        <h5 class="mb-2">Project Added Successfully</h5>
                        <p class="mb-3">Stephan Peralt has been added with Client ID : <span class="text-primary">#pro
                                - 0004</span>
                        </p>
                        <div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <a href="projects.html" class="btn btn-dark w-100">Back to List</a>
                                </div>
                                <div class="col-6">
                                    <a href="project-details.html" class="btn btn-primary w-100">Detail Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Project Success -->
@endsection
