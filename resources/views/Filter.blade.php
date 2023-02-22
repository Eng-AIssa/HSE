<div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show"
         style="position: fixed; top: 80px; right: 10px; z-index: 2; padding: .35rem 3.9rem .35rem 1.2rem;"
         role="alert">
        <i class="mdi mdi-checkbox-marked-circle-outline mdi-24px mr-1"></i>
        <span style="vertical-align: super;  font-weight: 500; ">{{session('success')}}</span>
        <button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    {{--<div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-inline">
                            <div class="form-group mx-sm-3">
                                <label for="search"
                                       class="mr-2 text-dark font-weight-bold">{{ __('Search') }}</label>
                                <input class="form-control gccShadow" wire:model="search" id="search">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-right mt-3 mt-lg-0">
                            <a wire:click="" data-toggle="modal" data-target="#add-new-system-user"
                               class="text-white btn btn-danger waves-effect waves-light">
                                <i class="mdi mdi-plus-circle mr-1"></i>
                                {{ __('New System User') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}


    <div class="row" x-data="{process:'none'}">
        <div class="col-lg-5">
            <div class="card-box" style="padding-top: 0.88rem;">
                <div class="d-flex justify-content-between mb-2">
                    <h3 class="font-weight-bold mb-3">{{ __('Groups') }}</h3>
                    <span>
                        <button class="btn text-blue" data-toggle="modal" data-target="#add-new-group">
                            {{ __('Add Group') }}
                            <i class="pl-1 clicky mdi mdi-24px mdi-account-group-outline text-blue"></i>
                        </button>
                    </span>
                </div>
                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">{{ __('Group Name') }}</th>
                            <th class="border-top-0 text-center">Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td style="width: 40%" class="text-dark font-15">{{$role->name}}</td>

                            <td class="text-center">
                                    <span class="badge badge-pill badge-success clicky"
                                          @click="process='members-{{$role->name}}'">
                                        {{ __('Members') }}
                                    </span>
                                <span class="badge badge-pill badge-blue clicky"
                                      @click="process='permissions-{{$role->name}}'">
                                        {{ __('Permissions') }}
                                    </span>
                                <span class="badge badge-pill badge-danger clicky">
                                        <a data-target="#delete-{{str_replace(' ', '-', $role->name)}}"
                                           data-toggle="modal">
                                            {{ __('Delete') }}
                                        </a>
                                    </span>
                            </td>
                        </tr>

                        <div wire:ignore class="modal fade" id="delete-{{str_replace(' ', '-', $role->name)}}"
                             aria-labelledby="delete-{{str_replace(' ', '-', $role->name)}}-model-label"
                             tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light">
                                        <h4 id="delete-{{str_replace(' ', '-', $role->name)}}-model-label"
                                            class="modal-title">
                                            {{ __('Delete') }} {{$role->name}} {{ __('Group') }}
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            ×
                                        </button>
                                    </div>
                                    <div class="modal-body p-3">
                                        <div class="form-group">
                                            <p>
                                                <b>{{ __('WARNING:') }}</b><br>
                                                {{ __('all related') }} <b>{{ __('Permissions') }}</b>
                                                {{ __('will be removed') }},<br>
                                                {{ __("this action can't be undone") }}
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-light" data-dismiss="modal">
                                                {{ __('Cancel') }}
                                            </button>
                                            <button wire:click="deleteRole({{$role->id}})" type="button"
                                                    class="btn btn-primary" data-dismiss="modal">
                                                {{ __('Delete') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @foreach($roles as $role)
        <div wire:key="permissions-{{str_replace(' ', '-', $role->name)}}" class="col-lg-7"
             x-show="process=='permissions-{{$role->name}}'">
            <div class="card-box">
                <h3 class="font-weight-bold mt-0 mb-3">
                    {{ $role->name . ' Permissions'}}
                </h3>

                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">{{ __('Module') }}</th>
                            <th class="border-top-0 text-center">{{ __('Create') }}</th>
                            <th class="border-top-0 text-center">{{ __('Read') }}</th>
                            <th class="border-top-0 text-center">{{ __('Update') }}</th>
                            <th class="border-top-0 text-center">{{ __('Delete') }}</th>
                            {{--<th class="border-top-0 text-center">Stages</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($models as $model)
                        <tr x-data="{stage:'no'}">
                            <td class="text-left"><span>{{$model['label']}}</span></td>
                            <td class="text-center pl-3">
                                {{--<x-form.checkbox
                                    wire:click="controlPermission('{{$role->id}}', '{{lcfirst($model)}}_create')"
                                    wire:model="permissions.{{$role->id}}.{{lcfirst($model) . '_create'}}"
                                    @if($role->hasPermission("$model" . '_create')) {{'checked'}} @endif
                                    id="{{$role->name}}_{{$model}}-create" name="{{$model}}" value="1"/>--}}
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input
                                            wire:click="controlPermission('{{$role->id}}', '{{$model['name']}}_create')"
                                            wire:model="permissions.{{$role->id}}.{{$model['name'] . '_create'}}"
                                            id="{{str_replace(' ', '-', $role->name)}}-{{$model['name']}}-create"
                                            name="{{$model['name']}}[]" class='custom-control-input checkbox'
                                            value="1" type="checkbox">
                                        <label
                                            for="{{str_replace(' ', '-', $role->name)}}-{{$model['name']}}-create"
                                            class="custom-control-label"></label>
                                    </div>

                                    {{--<div x-show="stage=='yes'" class="custom-control custom-checkbox mb-1">
                                        <input id="{{$role->name}}-{{$model}}-first-stage" name="{{$model}}[]"
                                               value="1"
                                               type="checkbox" class='custom-control-input checkbox'
                                               wire:click="controlPermission('{{$role->id}}', '{{lcfirst($model)}}_first_stage')"
                                               wire:model="permissions.{{$role->id}}.{{lcfirst($model) . '_first_stage'}}">
                                        <label class="custom-control-label "
                                               for="{{$role->name}}-{{$model}}-first-stage">first</label>
                                    </div>--}}
                            </td>

                            <td class="text-center pl-3">
                                <div class="custom-control custom-checkbox mb-1">
                                    <input
                                        wire:click="controlPermission('{{$role->id}}', '{{$model['name']}}_read')"
                                        wire:model="permissions.{{$role->id}}.{{$model['name'] . '_read'}}"
                                        id="{{str_replace(' ', '-', $role->name)}}-{{$model['name']}}-read"
                                        name="{{$model['name']}}[]" class='custom-control-input checkbox'
                                        value="1" type="checkbox">
                                    <label for="{{str_replace(' ', '-', $role->name)}}-{{$model['name']}}-read"
                                           class="custom-control-label"></label>
                                </div>
                            </td>

                            <td class="text-center pl-3">
                                <div class="custom-control custom-checkbox mb-1">
                                    <input
                                        wire:click="controlPermission('{{$role->id}}', '{{$model['name']}}_update')"
                                        wire:model="permissions.{{$role->id}}.{{$model['name'] . '_update'}}"
                                        id="{{str_replace(' ', '-', $role->name)}}-{{$model['name']}}-update"
                                        name="{{$model['name']}}[]" class='custom-control-input checkbox'
                                        value="1" type="checkbox">
                                    <label
                                        for="{{str_replace(' ', '-', $role->name)}}-{{$model['name']}}-update"
                                        class="custom-control-label"></label>
                                </div>
                            </td>

                            <td class="text-center pl-3">
                                <div class="custom-control custom-checkbox mb-1">
                                    <input
                                        wire:click="controlPermission('{{$role->id}}', '{{$model['name']}}_delete')"
                                        wire:model="permissions.{{$role->id}}.{{$model['name'] . '_delete'}}"
                                        id="{{str_replace(' ', '-', $role->name)}}-{{$model['name']}}-delete"
                                        name="{{$model['name']}}[]" class='custom-control-input checkbox'
                                        value="1" type="checkbox">
                                    <label
                                        for="{{str_replace(' ', '-', $role->name)}}-{{$model['name']}}-delete"
                                        class="custom-control-label"></label>
                                </div>
                            </td>
                            {{--<td>
                                <button @click="stage='yes'" x-show="stage=='no'" type="button" class="btn"><i
                                        class="mdi mdi-plus-circle mdi-24px "></i>
                                </button>
                                <button @click="stage='no'" x-show="stage=='yes'" type="button" class="btn"><i
                                        class="mdi mdi-minus-circle mdi-24px "></i>
                                </button>
                            </td>--}}

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div wire:key="members-{{str_replace(' ', '-', $role->name)}}" class="col-lg-7"
             x-show="process=='members-{{$role->name}}'">
            <div class="card-box" style="padding-top: 0.88rem;">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-between mb-2">
                        <h3 class="font-weight-bold">
                            {{$role->name . ' '}} {{ __('Members') }}
                        </h3>
                        <span>
                                <button data-target="#add-{{str_replace(' ', '-', $role->name)}}-member"
                                        class="btn text-blue" data-toggle="modal">
                                    {{ __('Add Members') }}
                                    <i class="pl-1 clicky mdi mdi-24px mdi-account-plus-outline text-blue"></i>
                                </button>
                            </span>
                    </div>
                    {{--<div class="d-flex">
                        <div class="w-25 d-flex">
                            <label for="filter-location"
                                   class="d-flex align-items-center mr-2 text-dark font-weight-bold">{{ __('Filter') }}</label>
                            <select id="filter-location" class="custom-select gccShadow">
                                <option value="" hidden>{{ __('Select') }}</option>
                                <option value="department">{{ __('Department') }}</option>
                                <option value="name">{{ __('Name') }}</option>
                                <option value="userid">{{ __('Userid') }}</option>
                                <option value="email">{{ __('Email') }}</option>
                                <option value="phone">{{ __('Phone') }}</option>
                                <option value="job_title">{{ __('Job Title') }}</option>
                            </select>
                        </div>
                        <input type="text" class="form-control gccShadow w-50">
                    </div>--}}
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">{{ __('User Name') }}</th>
                            <th class="border-top-0 text-center">{{ __(' ID') }}</th>
                            <th class="border-top-0 text-center">{{ __(' Location') }}</th>
                            <th class="border-top-0 text-center">{{ __(' Email') }}</th>
                            <th class="border-top-0 text-center">{{ __(' Department') }}</th>
                            <th class="border-top-0 text-center">{{ __(' Job Title') }}</th>
                            <th class="border-top-0 text-center">{{ __('Remove Member') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($role->users as $user)
                        <tr>
                            <td class="text-left"><span>{{$user->name}}</span></td>
                            <td class="text-center"><span>{{$user->userid}}</span></td>
                            <td class="text-center"><span>{{$user->location->name}}</span></td>
                            <td class="text-center"><span>{{$user->email}}</span></td>
                            <td class="text-center"><span>{{$user->department}}</span></td>
                            <td class="text-center"><span>{{$user->job_title}}</span></td>
                            <td class="text-center">
                                <button
                                    data-target="#delete-{{str_replace(' ', '-', $role->name)}}-{{$user->id}}"
                                    class="btn" data-toggle="modal">
                                    <i class="mdi mdi-24px mdi-trash-can-outline clicky text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <div wire:ignore wire:key="delete-{{str_replace(' ', '-', $role->name)}}-{{$user->id}}"
                             id="delete-{{str_replace(' ', '-', $role->name)}}-{{$user->id}}"
                             aria-labelledby="delete-{{str_replace(' ', '-', $role->name)}}-{{$user->id}}-label"
                             role="dialog" aria-hidden="true" class="modal fade" tabindex="-1">
                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light">
                                        <h4 id="delete-{{str_replace(' ', '-', $role->name)}}-{{$user->id}}-label"
                                            class="modal-title">
                                            {{ __('Delete Member from') }} {{$role->name}}
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body p-3">
                                        <div class="form-group">
                                            <p>{{ __('Are you Sure you want to remove this member') }} ?</p>
                                        </div>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-light" data-dismiss="modal">
                                                {{ __('Cancel') }}
                                            </button>
                                            <button wire:click="removeRole('{{$user->id}}', '{{$role->name}}')"
                                                    type="button" class="btn btn-primary" data-dismiss="modal">
                                                {{ __('Remove') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div wire:ignore wire:key="new-{{str_replace(' ', '-', $role->name)}}-member"
             aria-labelledby="add-{{str_replace(' ', '-', $role->name)}}-member-label"
             id="add-{{str_replace(' ', '-', $role->name)}}-member" class="modal fade"
             tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="add-{{str_replace(' ', '-', $role->name)}}-member-label">
                            {{ __('Add Member to') }} {{$role->name}}
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body p-3">
                        <form wire:submit.prevent="giveRole('{{str_replace(' ', '-', $role->name)}}')"
                              id="add-{{str_replace(' ', '-', $role->name)}}-member-form"
                              action="" class="new-member-form" method="POST" onsubmit="hideModalOnSubmit(this)">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <x-form.select-input label="{{ __('New Member') }}"
                                                         wire:model="new_members.{{str_replace(' ', '-', $role->name)}}"
                                                         name="{{str_replace(' ', '-', $role->name)}}"
                                                         class="js-select new-member"
                                                         required="required">
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </x-form.select-input>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <x-form.text-input
                                        wire:model="new_members.{{str_replace(' ', '-', $role->name)}}department"
                                        label="{{ __('Department') }}" placeholder="{{ __('Department')}}"
                                        readonly="readonly"/>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <x-form.text-input
                                        wire:model="new_members.{{str_replace(' ', '-', $role->name)}}userid"
                                        label="{{ __('User ID') }}" placeholder="{{ __('User ID')}}"
                                        readonly="readonly"/>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <x-form.text-input
                                        wire:model="new_members.{{str_replace(' ', '-', $role->name)}}location"
                                        label="{{ __('Location') }}" placeholder="{{ __('Location')}}"
                                        readonly="readonly"/>
                                </div>

                                <div class="col-12 col-sm-6 ">
                                    <x-form.text-input
                                        wire:model="new_members.{{str_replace(' ', '-', $role->name)}}email"
                                        label="{{ __('Email') }}" placeholder="{{ __('Email')}}"
                                        readonly="readonly"/>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <x-form.text-input
                                        wire:model="new_members.{{str_replace(' ', '-', $role->name)}}job_title"
                                        label="{{ __('Job Title') }}" placeholder="{{ __('Job Title')}}"
                                        readonly="readonly"/>
                                </div>
                            </div>
                            <div class="text-right mt-3">
                                <button type="button" class="btn btn-light" data-dismiss="modal">
                                    {{ __('Cancel') }}
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        <div wire:ignore wire:key="add-new-role" id="add-new-group" class="modal fade"
             aria-labelledby="add-new-group-label" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="add-new-group-label">
                            {{ __('Add New Group') }}
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body p-3">
                        <form wire:submit.prevent="addRole()" id="add-form" action="" method="POST"
                              onsubmit="hideModalOnSubmit(this)">
                            @csrf

                            <div class="form-group">
                                <x-form.text-input wire:model="new_group"
                                                   onkeypress="return /[a-z ]/i.test(event.key)"
                                                   label="{{ __('Group Name') }}"
                                                   id="group-name" required="required"/>
                            </div>
                            <div class="text-right mt-3">
                                <button type="button" class="btn btn-light" data-dismiss="modal">
                                    {{ __('Cancel') }}
                                </button>
                                <button class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
