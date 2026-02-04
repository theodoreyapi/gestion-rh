@extends('layouts.master', [
    'title' => 'Projects',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/owl.carousel.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

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

    <!-- Owl Carousel JS -->
    <script src="{{ URL::asset('') }}assets/js/owl.carousel.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Fancybox JS -->
    <script src="{{ URL::asset('') }}assets/plugins/fancybox/jquery.fancybox.min.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/file-manager.js"></script>
    <script src="{{ URL::asset('') }}assets/js/todo.js"></script>
    <script src="{{ URL::asset('') }}assets/js/projects.js"></script>
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

        <div class="row align-items-center mb-4">
            <div class="d-md-flex d-sm-block justify-content-between align-items-center flex-wrap">
                <h6 class="fw-medium d-inline-flex align-items-center mb-3 mb-sm-0"><a href="{{ url('projects') }}">
                        <i class="ti ti-arrow-left me-2"></i>Retour a la liste</a>
                </h6>
                <div class="d-flex">
                    <div class="text-end">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_project"><i
                                class="ti ti-edit me-1"></i>Modifier projet</a>
                    </div>
                    <div class="head-icons ms-2 text-end">
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @php
            $start = \Carbon\Carbon::parse($project->start_date);
            $end = \Carbon\Carbon::parse($project->end_date);
            $diff = $start->diff($end);
        @endphp

        <div class="row">
            <div class="col-xxl-3 col-xl-4 theiaStickySidebar">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Détails du projet</h5>
                        <div class="list-group details-list-group mb-4">
                            <div class="list-group-item">
                                <span>Client</span>
                                <p class="text-gray-9">{{ $project->client_name ?? 'Aucun' }}</p>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Coût total du projet</span>
                                    <p class="text-gray-9">{{ number_format($project->project_value, 0, ',', ' ') }} FCFA
                                    </p>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Heures de travail</span>
                                    <p class="text-gray-9">{{ $diff->days }} jours (≈ {{ $diff->days * 8 }} hrs de
                                        travail)</p>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Créé le</span>
                                    <p class="text-gray-9">
                                        {{ \Carbon\Carbon::parse($project->created_at)->format('d M Y') }}</p>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Commencé le</span>
                                    <p class="text-gray-9">
                                        {{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }}</p>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Fini le</span>
                                    <div class="d-flex align-items-center">
                                        <p class="text-gray-9 mb-0">
                                            {{ \Carbon\Carbon::parse($project->end_date)->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Priorité</span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-light rounded p-3 mb-3">
                            <div class="d-flex align-items-center">
                                <a href="#" class="flex-shrink-0 me-2">
                                    <img src="{{ URL::asset('') }}assets/img/social/project-01.svg" alt="Img">
                                </a>
                                <div>
                                    <h6 class="mb-1"><a href="#">{{ $project->project_name }}</a></h6>
                                    <p>ID du projet : <span class="text-primary"> {{ $project->project_code }}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-sm-3">
                                <p class="d-flex align-items-center mb-3"><i class="ti ti-square-rounded me-2"></i>Statut
                                </p>
                            </div>
                            <div class="col-sm-9">
                                @if ($project->status == 'Active')
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Actif
                                    </span>
                                @else
                                    <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Inactif
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-3">
                                <p class="d-flex align-items-center mb-3"><i class="ti ti-users-group me-2"></i>Équipe</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex align-items-center mb-3">
                                    @if (!empty($project->member_names))
                                        @foreach (explode(',', $project->member_names) as $member)
                                            <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                                                <h6 class="fs-12 mb-0">
                                                    <a href="#" class="text-dark">{{ trim($member) }}</a>
                                                </h6>
                                            </div>
                                        @endforeach
                                    @else
                                        <span class="text-muted">Aucun Membre</span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-sm-3">
                                <p class="d-flex align-items-center mb-3"><i class="ti ti-user-shield me-2"></i>Chef
                                    d'équipe
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex align-items-center mb-3">
                                    @if (!empty($project->leader_names))
                                        @foreach (explode(',', $project->leader_names) as $leader)
                                            <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                                                <h6 class="fs-12 mb-0">
                                                    <a href="#" class="text-dark">{{ trim($leader) }}</a>
                                                </h6>
                                            </div>
                                        @endforeach
                                    @else
                                        <span class="text-muted">Aucun leader</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <p class="d-flex align-items-center mb-3"><i class="ti ti-user-star me-2"></i>Chef de
                                    projet</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex align-items-center mb-3">
                                    @if (!empty($project->manager_names))
                                        @foreach (explode(',', $project->manager_names) as $manager)
                                            <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                                                <h6 class="fs-12 mb-0">
                                                    <a href="#" class="text-dark">{{ trim($manager) }}</a>
                                                </h6>
                                            </div>
                                        @endforeach
                                    @else
                                        <span class="text-muted">Aucun Manager</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <p class="d-flex align-items-center mb-3"><i class="ti ti-bookmark me-2"></i>Mots-clés</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex align-items-center mb-3">
                                    @if (!empty($project->tags))
                                        @foreach (explode(',', $project->tags) as $tag)
                                            <a href="#" class="badge task-tag bg-primary rounded-pill me-2">
                                                {{ trim($tag) }}
                                            </a>
                                        @endforeach
                                    @else
                                        <span class="text-muted">Aucun tag</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <h6 class="mb-1">Description</h6>
                                    <p>{{ $project->description ?? 'Aucune description' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-accordion-items">
                    <div class="accordion accordions-items-seperate" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <div class="accordion-button">
                                    <div class="d-flex align-items-center flex-fill">
                                        <h5>Fichiers</h5>
                                    </div>
                                </div>
                            </div>
                            <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                aria-labelledby="headingFour">
                                <div class="accordion-body">
                                    <div class="files-carousel owl-carousel">
                                        <div class="card shadow-none mb-0">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <h6 class="mb-1">Project_1.docx</h6>
                                                            <span>7.6 MB</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="btn btn-sm btn-icon"><i
                                                                class="ti ti-download"></i></a>
                                                        <a href="#" class="btn btn-sm btn-icon"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mb-4">
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="d-inline-flex align-items-center avatar avatar-lg avatar-rounded bg-primary"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-plus fs-24 text-white"></i>
                            </a>
                            <ul
                                class="dropdown-menu dropdown-menu-end bg-gray-900 dropdown-menu-md dropdown-menu-dark p-3">
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item rounded-1 d-flex align-items-center">
                                        <span class="avatar avatar-md bg-gray-800 flex-shrink-0 me-2"><i
                                                class="ti ti-basket-code"></i></span>
                                        <div>
                                            <h6 class="fw-medium text-white mb-1">Add a Task</h6>
                                            <p class="text-white">Create a new Priority tasks </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item rounded-1 d-flex align-items-center">
                                        <span class="avatar avatar-md bg-gray-800 flex-shrink-0 me-2"><i
                                                class="ti ti-file-invoice"></i></span>
                                        <div>
                                            <h6 class="fw-medium text-white mb-1">Add Invoice</h6>
                                            <p class="text-white">Create a new Billing</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item rounded-1 d-flex align-items-center">
                                        <span class="avatar avatar-md bg-gray-800 flex-shrink-0 me-2"><i
                                                class="ti ti-file-description"></i></span>
                                        <div>
                                            <h6 class="fw-medium text-white mb-1">Notes</h6>
                                            <p class="text-white">Create new note for you & team</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item rounded-1 d-flex align-items-center">
                                        <span class="avatar avatar-md bg-gray-800 flex-shrink-0 me-2"><i
                                                class="ti ti-folder-open"></i></span>
                                        <div>
                                            <h6 class="fw-medium text-white mb-1">Add Files</h6>
                                            <p class="text-white">Upload New files for this Client</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Project -->
    <div class="modal fade" id="edit_project" role="dialog">
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
                    <form action="{{ route('projects.update', $project->id_project) }}" method="POST"
                        enctype="multipart/form-data">
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
                                                <input type="text" class="form-control" name="name" required
                                                    value="{{ $project->project_name }}">
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
                                                                placeholder="dd/mm/yyyy"
                                                                value="{{ $project->start_date }}">
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
                                                                placeholder="dd/mm/yyyy"
                                                                value="{{ $project->end_date }}">
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
                                                            <option value="{{ $project->priority }}">Sélectionner</option>
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
                                                            step="0.01" value="{{ $project->project_value }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Type de prix</label>
                                                        <input type="text" name="price_type" class="form-control"
                                                            value="{{ $project->price_type }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" class="form-control">
                                                    {{ $project->description }}
                                                </textarea>
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

    <!-- Edit Todo -->
    <div class="modal fade" id="edit_todo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Todo</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="project-details.html">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Todo Title</label>
                                    <input type="text" class="form-control" value="Update calendar and schedule">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Tag</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Internal</option>
                                        <option>Projects</option>
                                        <option>Meetings</option>
                                        <option>Reminder</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Priority</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>High</option>
                                        <option selected>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Descriptions</label>
                                    <div class="summernote"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Add Assignee</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Sophie</option>
                                        <option>Cameron</option>
                                        <option>Doris</option>
                                        <option>Rufana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-0">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Completed</option>
                                        <option>Pending</option>
                                        <option>Onhold</option>
                                        <option>Inprogress</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Todo -->

    <!-- Todo Details -->
    <div class="modal fade" id="view_todo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-white">Respond to any pending messages</h4>
                    <span class="badge badge-danger d-inline-flex align-items-center"><i
                            class="ti ti-square me-1"></i>Urgent</span>
                    <span><i class="ti ti-star-filled text-warning"></i></span>
                    <a href="#"><i class="ti ti-trash text-white"></i></a>
                    <button type="button"
                        class="btn-close custom-btn-close bg-transparent fs-16 text-white position-static"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="mb-2">Task Details</h5>
                    <div class="border rounded mb-3 p-2">
                        <div class="row row-gap-3">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <span class="d-block mb-1">Created On</span>
                                    <p class="text-dark">22 July 2025</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <span class="d-block mb-1">Due Date</span>
                                    <p class="text-dark">22 July 2025</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <span class="d-block mb-1">Status</span>
                                    <span class="badge badge-soft-success d-inline-flex align-items-center">
                                        <i class="fas fa-circle fs-6 me-1"></i>Completed
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5 class="mb-2">Description</h5>
                        <p>Hiking is a long, vigorous walk, usually on trails or footpaths in
                            the countryside. Walking for pleasure developed in Europe during the eighteenth century.
                            Religious pilgrimages have existed much longer but they involve walking long distances
                            for a
                            spiritual purpose associated with specific
                            religions and also we achieve inner peace while we hike at a local park.
                        </p>
                    </div>
                    <div class="mb-3">
                        <h5 class="mb-2">Tags</h5>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-danger me-2">Internal</span>
                            <span class="badge badge-success me-2">Projects</span>
                            <span class="badge badge-secondary">Reminder</span>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-2">Assignee</h5>
                        <div class="avatar-list-stacked avatar-group-sm">
                            <span class="avatar avatar-rounded">
                                <img class="border border-white"
                                    src="{{ URL::asset('') }}assets/img/profiles/avatar-23.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-rounded">
                                <img class="border border-white"
                                    src="{{ URL::asset('') }}assets/img/profiles/avatar-24.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-rounded">
                                <img class="border border-white"
                                    src="{{ URL::asset('') }}assets/img/profiles/avatar-25.jpg" alt="img">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Todo Details -->

    <!-- Add Todo -->
    <div class="modal fade" id="add_todo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Todo</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="project-details.html">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Todo Title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Tag</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Internal</option>
                                        <option>Projects</option>
                                        <option>Meetings</option>
                                        <option>Reminder</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Priority</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Medium</option>
                                        <option>High</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Descriptions</label>
                                    <div class="summernote"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Add Assignee</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Sophie</option>
                                        <option>Cameron</option>
                                        <option>Doris</option>
                                        <option>Rufana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-0">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Completed</option>
                                        <option>Pending</option>
                                        <option>Onhold</option>
                                        <option>Inprogress</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add New Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Todo -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked items, this cant be undone once you
                        delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="project-details.html" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection
