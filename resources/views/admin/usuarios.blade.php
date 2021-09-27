@extends('layouts.master')
@section('title', 'Todos los usuarios')
@section('main')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="instructor-dashboard.html">Inicio</a></li>
    <li class="breadcrumb-item active">Todos los Usuarios</li>
  </ol>

  <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
    <div class="flex mb-2 mb-sm-0">
      <h1 class="h2">Usuarios</h1>
    </div>
    <a href="instructor-quiz-edit.html" class="btn btn-success">Nuevo usuario</a>
  </div>

  <div class="card">
    <div class="card-header form-inline">
      <div class="form-group ml-auto">
        <label for="flatpickrSample02" class="form-label mr-3">BUSCAR</label>
        <input id="flatpickrSample02" type="text" class="form-control flatpickr-input" placeholder="Select dates" data-toggle="flatpickr" data-flatpickr-mode="range" data-flatpickr-alt-input="false" value="" readonly="readonly">
      </div>
    </div>

    <div data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" class="table-responsive">
    <table class="table table-nowrap m-0">
      <tbody class="list"><tr>
        <td>
          <div class="media align-items-center">
            <a href="instructor-course-edit.html" class="avatar avatar-4by3 avatar-sm mr-3">
              <img src="assets/images/gulp.png" alt="course" class="avatar-img rounded">
            </a>
            <div class="media-body">
              <a class="text-body js-lists-values-course" href="instructor-course-edit.html"><strong>Usuario 1</strong></a><br>
              <small class="text-muted mr-1">
                SECRETARIA DE ADMINISTRACION
              </small>
            </div>
          </div>
        </td>
        <td class="text-right">
          <small class="text-muted text-uppercase js-lists-values-date">15 Nov 2018</small>
        </td>
      </tr><tr>
        <td>
          <div class="media align-items-center">
            <a href="instructor-course-edit.html" class="avatar avatar-4by3 avatar-sm mr-3">
              <img src="assets/images/github.png" alt="course" class="avatar-img rounded">
            </a>
            <div class="media-body">
              <a class="text-body js-lists-values-course" href="instructor-course-edit.html"><strong>Usuario 2</strong></a><br>
              <small class="text-muted mr-1">
                SECRETARIA DE ADMINISTRACION
              </small>
            </div>
          </div>
        </td>
        <td class="text-right">
          <small class="text-muted text-uppercase js-lists-values-date">14 Nov 2018</small>
        </td>
      </tr><tr>
        <td>
          <div class="media align-items-center">
            <a href="instructor-course-edit.html" class="avatar avatar-4by3 avatar-sm mr-3">
              <img src="assets/images/vuejs.png" alt="course" class="avatar-img rounded">
            </a>
            <div class="media-body">
              <a class="text-body js-lists-values-course" href="instructor-course-edit.html"><strong>Usuario 3</strong></a><br>
              <small class="text-muted mr-1">
                SECRETARIA DE ADMINISTRACION
              </small>
            </div>
          </div>
        </td>
        <td class="text-right">
          <small class="text-muted text-uppercase js-lists-values-date">13 Nov 2018</small>
        </td>
      </tr><tr>
        <td>
          <div class="media align-items-center">
            <a href="instructor-course-edit.html" class="avatar avatar-4by3 avatar-sm mr-3">
              <img src="assets/images/vuejs.png" alt="course" class="avatar-img rounded">
            </a>
            <div class="media-body">
              <a class="text-body js-lists-values-course" href="instructor-course-edit.html"><strong>Usuario 4</strong></a><br>
              <small class="text-muted mr-1">
                SECRETARIA DE ADMINISTRACION
              </small>
            </div>
          </div>
        </td>
        <td class="text-right">
          <small class="text-muted text-uppercase js-lists-values-date">12 Nov 2018</small>
        </td>
      </tr></tbody>
    </table>
  </div>

</div>
@endsection
