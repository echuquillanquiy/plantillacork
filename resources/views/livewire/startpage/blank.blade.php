<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $componentName }}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">{{ $pageName }}</a></li>
            </ol>
        </nav>

        <div class="dropdown filter custom-dropdown-icon">
            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#theModal">Nuevo Paciente</a>
        </div>
    </div>

    Search

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <div class="widget-content">
                    <div class="table table-responsive">
                        <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mt-1">
                            <thead class="text-white">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="">DNI</th>
                                <th class="">NOMBRES Y APELLIDOS</th>
                                <th class="">ACCIONES</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="text-center"><h6>1</h6></td>
                                <td><h6>46589634</h6></td>
                                <td><h6>EDUARDO CHUQUILLANQUI</h6></td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-info mtmobile" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="javascript:void(0)" class="btn btn-danger mtmobile" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        Pagination
                    </div>
                </div>
            </div>
        </div>
    </div>
    Include Form
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

    });
</script>
