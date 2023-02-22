<x-main-layout>
    @push('css')
        <livewire:styles/>
    @endpush

    {{--@if(session('success'))
        <div class="alert alert-success alert-dismissible fade show"
             style="position: fixed; top: 80px; right: 10px; z-index: 1;  "
             role="alert">
            <i class="mdi mdi-check-all mr-2"></i> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('deleteSuccess'))
        <div class="alert alert-warning alert-dismissible fade show"
             style="position: fixed; top: 80px; right: 10px; z-index: 1;  "
             role="alert">
            <i class="mdi mdi-check-all mr-2"></i> {{session('deleteSuccess')}}
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif--}}

    <x-slot name="pageTitle">
        {{ __('Data Lists') }}
    </x-slot>

    <livewire:update-data-list/>
    {{--<div class="container-fluid">

        <div class="row">

            @foreach($lists as $list)
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="d-flex justify-content-between">
                            <h3>{{$list->name}}</h3>
                            <button id="add-button" type="button" class="btn btn-lg"
                                    data-toggle="modal"
                                    data-target="#add-model">Add<i class="p-1 far fa-plus-square"></i>
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 text-center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Element</th>
                                    <th>Belong To</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list->content as $item)
                                    <tr>
                                        <th class="index" scope="row">{{$loop->iteration}}</th>
                                        @if($loop->first)
                                            <td class="id" hidden>{{$list->id}}</td>@endif
                                        <td class="item">{{$item}}</td>
                                        <td>@if($loop->first){{$list->report_name}}@endif</td>
                                        <td class="text-center">
                                            <button id="edit-button" type="button" class="btn  btn-lg"
                                                    data-toggle="modal"
                                                    data-target="#edit-model"><i class=" far fa-edit"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <button id="delete-button" type="button" class="btn  btn-lg"
                                                    data-toggle="modal"
                                                    data-target="#delete-model"><i class="far fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Add modal -->
        <div class="modal fade" id="add-model" tabindex="-1" role="dialog" aria-labelledby="add-model-label"
             aria-hidden="true">
            <!-- Start modal-dialog -->
            <div class="modal-dialog modal-sm">
                <!-- Start modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="add-model-label">Add Model</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form id="add-form" action="" method="POST">
                            @csrf
                            <input id="datalist-id" name="id" type="text" hidden value="">
                            <input id="add-name" name="name" type="text" class=" form-control" required>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button form="add-form" type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit modal -->
        <div class="modal fade" id="edit-model" tabindex="-1" role="dialog" aria-labelledby="edit-model-label"
             aria-hidden="true">
            <!-- Start modal-dialog -->
            <div class="modal-dialog modal-sm">
                <!-- Start modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="edit-model-label">Edit Model</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group ">
                            <label><strong>{{ __('Element') }}</strong></label>
                            <form id="edit-form" action="" method="POST">
                                @csrf
                                @method('PUT')
                                <input id="edit-index" value="" name="index" hidden>
                                <input id="edit-name" name="name" type="text" class=" form-control" required>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button form="edit-form" type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete modal -->
        <div class="modal fade" id="delete-model" tabindex="-1" role="dialog" aria-labelledby="delete-model-label"
             aria-hidden="true">
            <!-- Start modal-dialog -->
            <div class="modal-dialog modal-sm">
                <!-- Start modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="delete-model-label">Delete Model</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>Ary you Sure you want to delete this element ?</p>
                        <form id="delete-form" action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <input id="index2" value="" name="index" hidden>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button form="delete-form" type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@push('scripts')

    <script>
        $(document).on('click', '#edit-button', function () {
            let tr = $(this).closest('tr');
            let value = tr.find('.item').text();
            let index = tr.find('.index').text();

            let main_div = $(this).parents('.card-box');
            let id = main_div.find('.id').text();

            $('#edit-name').val(value);
            $('#edit-form').attr('action', 'datalist/' + id);
            $('#edit-index').attr('value', index);
        });

        $(document).on('click', '#delete-button', function () {
            let tr = $(this).closest('tr');
            let index = tr.find('.index').text();

            let main_div = $(this).parents('.card-box');
            let id = main_div.find('.id').text();

            $('#delete-form').attr('action', 'datalist/' + id);
            $('#index2').attr('value', index);
        });

        $(document).on('click', '#add-button', function () {
            let main_div = $(this).parents('.card-box');
            let id = main_div.find('.id').text();

            $('#datalist-id').attr('value', id);

        });


        /*$(document).on('click', '#e-btn', function () {
            $('#edit-model').modal('hide');
            //$('.modal-backdrop').hide();
        });*/


    </script>--}}


    @push('scripts')

    <!-- Table Editable plugin-->
        <script src="{{asset('libs/jquery-tabledit/jquery.tabledit.min.js')}}"></script>

        <!-- Table editable init-->
        <script src="{{asset('js/pages/tabledit.init.js')}}"></script>

        <livewire:scripts/>
    @endpush


</x-main-layout>
