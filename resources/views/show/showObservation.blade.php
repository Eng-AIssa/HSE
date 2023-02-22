<x-main-layout>

    <x-slot name="pageTitle">
        {{ __('Observation') }}
    </x-slot>

    {{--main container--}}
    <div class="container-fluid">
        {{--base for the card size--}}
        <div class="row">
            {{--card size--}}
            <div class="col-sm-11 col-md-10 col-lg-9">
                {{--the card--}}
                <div class="card-box">
                    <div class="row justify-content-center">


                        <div class="col-12 col-sm-6 justify-content-start " style="display: flex;">
                            <h3 class="mb-2 mb-sm-4 ml-2">{{ __('Observation') }}
                                # {{$observation->id}} </h3>
                        </div>
                        <div class="col-12 col-sm-6 justify-content-sm-end justify-content-start"
                             style="display: flex;">
                            <div style="display: flex;" class="mb-3 mb-sm-0 mr-sm-2 ml-2 ml-sm-0">
                                <h3 class="">{{ __('Status:') }}</h3>
                                <p class=" ml-2  font-20"
                                   style="padding-top: 0.6rem;">{{$observation->stage->name ?? 'Initiation'}}</p>
                            </div>
                        </div>


                        <form id="observation-form" class="col-sm-11 mt-2 reporting-form" action="" method="">
                            @csrf

                            <x-form.workflow stage="{{$observation->stage->name}}"/>


                            <h5 class=" bg-light p-2 mt-0 mb-3">{{ __('Category & Title') }}</h5>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <x-form.select-input label="{{ __('Category') }}" required='required'>
                                        <option value="{{$observation->category}}"{{'selected'}}>
                                            {{$observation->category}}
                                        </option>
                                    </x-form.select-input>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <x-form.select-input label="{{ __('Sub Category') }}" required='required'>
                                        <option value="{{$observation->sub_category}}"{{'selected'}}>
                                            {{$observation->sub_category}}
                                        </option>
                                    </x-form.select-input>
                                </div>


                                <div class="col-12 ">
                                    <x-form.text-input value="{{$observation->title}}"
                                                       label="{{ __('Title') }}" mb="3"
                                                       required='required' readonly="readonly"/>
                                </div>
                            </div>


                            <h5 class=" bg-light p-2 mt-0 mb-3">{{ __('Time & Location') }}</h5>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <x-form.date-input value="{{$observation->observation_date}}"
                                                       label="{{ __('Observation Date') }}" readonly="readonly"
                                                       required='required'/>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <x-form.time-input value="{{$observation->observation_time}}"
                                                       label="{{ __('Observation Time') }}" readonly="readonly"
                                                       required='required'/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-6 col-xl-4">
                                    <x-form.select-input label="{{ __('Location') }}" required='required'>
                                        <option value="{{$observation->location_id}}"{{'selected'}}>
                                            {{$observation->location?->name}}
                                        </option>
                                    </x-form.select-input>
                                </div>

                                <div class="col-12 col-sm-6 col-xl-4">
                                    <x-form.select-input label="{{ __('Area') }}" required='required'>
                                        <option value="{{$observation->area_id}}" {{'selected'}}>
                                            {{ $observation->area?->name }}
                                        </option>
                                    </x-form.select-input>
                                </div>

                                <div class="col-12 col-sm-6 col-xl-4">
                                    <x-form.text-input value="{{$observation->location_details}}"
                                                       label="{{ __('-') }}" readonly="readonly"
                                                       placeholder="{{ __('Further Details') }}"/>
                                </div>
                            </div>


                            <h5 class=" bg-light p-2 mt-0 mb-3">{{ __('Observation Data') }}</h5>

                            <div class="row">
                                <div class="col-12 ">
                                    <x-form.textarea-input value="{{$observation->observation_description}}"
                                                           label="{{ __('Observation Description') }}"
                                                           readonly="readonly" required='required'/>
                                </div>

                                <div class="col-12">
                                    <x-form.textarea-input value="{{$observation->immediate_action_taken}}"
                                                           label="{{ __('Immediate Action Taken') }}" rows="2"
                                                           required='required' readonly="readonly"/>
                                </div>
                            </div>


                            <h5 class=" bg-light p-2 mt-0 mb-3">{{ __('Potential Consequences') }}</h5>


                            <div class="row mb-3 pl-2">
                                <div class="col-sm-4">
                                    <x-form.checkbox label="{{ __('People') }}" value="1" id="people-checkbox"/>
                                </div>

                                <div class="col-sm-4">
                                    <x-form.checkbox label="{{ __('Environment') }}" value="1"
                                                     id="environment-checkbox"/>
                                </div>

                                <div class="col-sm-4 ">
                                    <x-form.checkbox
                                        label="{{ __('Asset and Production Loss') }}" value="1" id="cost-checkbox"/>
                                </div>
                            </div>


                            <div class="row " id="potential-consequences-container">
                                <div class="col-12 hide" id="people-potential-consequences-container">
                                    <x-form.select-input label="{{ __('People') }}"
                                                         id="people-potential-consequences-list">
                                        <option value="{{$observation->people_potential_consequences}}" {{"selected"}} >
                                            {{$observation->people_potential_consequences}}
                                        </option>
                                    </x-form.select-input>
                                </div>

                                <div class="col-12 hide" id="environment-potential-consequences-container">
                                    <x-form.select-input label="{{ __('Environment') }}"
                                                         id="environment-potential-consequences-list">
                                        <option
                                            value="{{$observation->environment_potential_consequences}}" {{"selected"}}>
                                            {{$observation->environment_potential_consequences}}
                                        </option>
                                    </x-form.select-input>
                                </div>

                                <div class="col-12 hide" id="asset-potential-consequences-container">
                                    <x-form.select-input label="{{ __('Asset and Production Lost') }}"
                                                         id="asset-potential-consequences-list">
                                        <option value="{{$observation->asset_potential_consequences}}" {{"selected"}}>
                                            {{$observation->asset_potential_consequences}}
                                        </option>
                                    </x-form.select-input>
                                </div>
                            </div>


                            <h5 class="bg-light p-2 mt-0 mb-3">{{ __('Related People') }}</h5>

                            <div class="row mb-1">
                                <div class="col-12 col-sm-6">
                                    <x-form.text-input value="{{$observation->reporter->name}}"
                                                       label="{{ __('Reported By') }}" users="users"
                                                       placeholder="{{ __('Name') }}"
                                                       readonly="readonly" mb="0"/>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <x-form.text-input value="{{$observation->reporter->department}}"
                                                       label="-" placeholder="{{ __('Department') }}"
                                                       readonly="readonly" mb="3"/>
                                </div>
                            </div>


                            <div class="row mb-1">
                                <div class="col-12 col-sm-6">
                                    <x-form.text-input value="{{$observation->responsible?->name}}"
                                                       label="{{ __('Responsible Person') }}" users="users"
                                                       placeholder="{{ __('Name') }}"
                                                       required='required' readonly="readonly" mb="0">
                                    </x-form.text-input>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <x-form.text-input value="{{$observation->responsible?->department}}"
                                                       label="-" placeholder="{{ __('Department') }}"
                                                       readonly="readonly" mb="3"/>
                                </div>

                            </div>


                            <h5 class="bg-light p-2 mt-0 mb-3"> {{ __('Comments') }} </h5>

                            <div class="row">
                                <div class="col-12">
                                    <x-form.textarea-input value="{{$observation->comment}}"
                                                           rows="2" label="{{ __('Comments') }}"
                                                           readonly="readonly"/>
                                </div>
                            </div>



                            @if($observation->actions)
                                <h5 class=" bg-light p-2 mt-0 mt-3">Related Actions</h5>


                                <div class="table-responsive">
                                    <table class="table table-bordered my-2 text-center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('Action ID') }}</th>
                                            <th>{{ __('Action Title') }}</th>
                                            <th>{{ __('Responsible') }}</th>
                                            <th>{{ __('Target Date') }}</th>
                                            <th>{{ __('View') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($observation->actions as $key => $action)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$action->id}}</td>
                                                <td>{{$action->title}}</td>
                                                <td>{{$action->responsible?->name}}</td>
                                                <td>{{$action->target_date}}</td>


                                                <td style="padding: 5px;">
                                                    <button data-toggle="modal" onclick="inspectFieldsColor()"
                                                            data-target="#action-modal-read-{{$action->id}}"
                                                            type="button"
                                                            class="btn btn-blue">
                                                        {{ __('View') }}
                                                    </button>
                                                </td>
                                            </tr>

                                            <x-modal.add-action operation="read" id="read-{{$action->id}}"
                                                                :users="$users"
                                                                :action="$action"/>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                        </form>
                    </div>
                </div>
                {{---end card--}}
            </div>
            {{---end card size--}}
        </div>
        {{---end the base for the card size--}}
    </div>
    {{--end of container fluid--}}



    @push('scripts')

        <script>

            $(document).ready(function () {

                let people_container = $('#people-potential-consequences-container');
                let environment_container = $('#environment-potential-consequences-container');
                let asset_container = $('#asset-potential-consequences-container');

                if ($('#people-potential-consequences-list').val() !== '') {
                    $('#people-checkbox').prop('checked', true)
                    people_container.find('select').prop('required', true);
                    people_container.find('.red-star').html('*');
                    people_container.fadeIn(1000);
                }
                if ($('#environment-potential-consequences-list').val() !== '') {
                    $('#environment-checkbox').prop('checked', true)
                    environment_container.find('select').prop('required', true);
                    environment_container.find('.red-star').html('*');
                    environment_container.fadeIn(1000);
                }
                if ($('#asset-potential-consequences-list').val() !== '') {
                    $('#asset-checkbox').prop('checked', true)
                    asset_container.find('select').prop('required', true);
                    asset_container.find('.red-star').html('*');
                    asset_container.fadeIn(1000);
                }

                $("input, select, textarea").each(function () {
                    if ($(this).attr('id') === 'title' && $(this).val() !== '') {
                        $(this).css("background-color", "#f6ffad");
                    } else if ($(this).val() !== '')
                        $(this).css("background-color", "rgb(232, 240, 254)");
                    else
                        $(this).css("background-color", "#fff");
                });
            });

        </script>

    @endpush

</x-main-layout>
