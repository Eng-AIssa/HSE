<x-main-layout>

    <x-slot name="pageTitle">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">HSSE</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Accident</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Accident') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div style="border: 1px dashed black; border-radius: 3px"
                             class="col-sm-10 col-xl-8 offset-1 offset-xl-2 p-4">

                            <div class="d-flex flex-row justify-content-between">
                                <h3 class="mb-4">{{ __('Accident') }} #92 </h3>
                                <div class="text-right">
                                    <x-form.form-button label="{{ __('Save As Draft') }}" class="m-1"/>
                                    <x-form.form-button label="{{ __('Submit') }}" class="m-1"/>
                                </div>
                            </div>

                            <form>

                                <x-form.form-select-input label="{{ __('Incident Type') }}">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('Nearmiss') }}</option>
                                    <option value="">{{ __('Accident') }}</option>
                                </x-form.form-select-input>

                                <x-form.form-select-input label="{{ __('Incident Group') }}">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('Injury') }}</option>
                                    <option value="">{{ __('Health') }}</option>
                                    <option value="">{{ __('Operation') }}</option>
                                    <option value="">{{ __('Environment') }}</option>
                                </x-form.form-select-input>

                                <x-form.form-select-input label="{{ __('Location') }}">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('Location A') }}</option>
                                    <option value="">{{ __('Location B') }}</option>
                                    <option value="">{{ __('Location C') }}</option>
                                    <option value="">{{ __('Location D') }}</option>
                                </x-form.form-select-input>

                                <div class="d-flex flex-row ">
                                    <x-form.form-date-input label="{{ __('Date Occurred') }}"/>
                                    <x-form.form-time-input label="{{ __('Time Occurred') }}" class="ml-2"/>
                                </div>

                                <div class="d-flex flex-row ">
                                    <x-form.form-date-input label="{{ __('Logging Date') }}"/>
                                    <x-form.form-time-input label="{{ __('Logging Time') }}" class="ml-2"/>
                                </div>

                                <x-form.form-text-input label="{{ __('Title') }}" mb="3"/>

                                <div class="d-flex flex-row justify-content-around ">
                                    <x-form.form-select-input label="{{ __('Potential Severity') }}" class="ml-1">
                                        <option selected>{{ __('Select') }}</option>
                                        <option value="">{{ __('C1') }}</option>
                                        <option value="">{{ __('C2') }}</option>
                                        <option value="">{{ __('C3') }}</option>
                                    </x-form.form-select-input>
                                    <x-form.form-select-input label="{{__('Frequency')}}" class="ml-1">
                                        <option selected>{{ __('Select') }}</option>
                                        <option value="">{{ __('F1') }}</option>
                                        <option value="">{{ __('F2') }}</option>
                                        <option value="">{{ __('F3') }}</option>
                                    </x-form.form-select-input>
                                    <x-form.form-select-input label="{{ __('Potential Risk') }}" class="ml-1">
                                        <option selected>{{ __('Select') }}</option>
                                        <option value="">{{ __('R1') }}</option>
                                        <option value="">{{ __('R2') }}</option>
                                        <option value="">{{ __('R3') }}</option>

                                    </x-form.form-select-input>
                                </div>

                                <x-form.form-text-input label="{{ __('Justification For Risk') }}" mb="4"/>


                                <x-form.form-select-input label="{{ __('General Classification') }}"
                                                     style="margin-bottom: 5px!important;" class="ml-1">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('System Involved') }}</option>
                                    <option value="">{{ __('Equipment Involved') }}</option>
                                    <option value="">{{ __('Substance Chemical Involved') }}</option>
                                </x-form.form-select-input>

                                <input type="text" class="form-control mb-3 mt-0 ml-1"
                                       placeholder="{{ __('Write Specification') }}">


                                <div class="d-flex flex-row justify-content-start ">
                                    <x-form.form-select-input label="{{ __('Incident Type') }}" class="ml-1">
                                        <option selected>{{ __('Select') }}</option>
                                        <option value="">{{ __('On The Jop') }}</option>
                                        <option value="">{{ __('Off The Jop') }}</option>
                                    </x-form.form-select-input>
                                    <div class="mt-3 ml-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label" for="">{{ __('Communication has done to
                                                authorities') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label"
                                                   for="">{{ __('Is Repeated Incident') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <x-form.form-text-input label="{{ __('Reported By') }}" placeholder="{{ __('Name') }}" mb="0"/>
                                <x-form.form-text-input label="" placeholder="{{ __('Department') }}" mb="3"/>

                                <x-form.form-text-input label="{{ __('Responsible Person') }}" placeholder="{{ __('Name') }}" mb="0"/>
                                <x-form.form-text-input label="" placeholder="{{ __('Department') }}" mb="4"/>

                                <x-form.form-textarea-input label="{{ __('Incident Description') }}"/>

                                <x-form.form-textarea-input label="{{ __('Immediate Action Taken') }}" rows="2"/>

                                <x-form.form-select-input label="{{ __('Type Of Activity At Time Of Incident') }}">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('Normal Operation') }}</option>
                                    <option value="">{{ __('Chemical Handling') }}</option>
                                    <option value="">{{ __('Cleaning') }}</option>
                                    <option value="">{{ __('Commissioning') }}</option>
                                </x-form.form-select-input>

                                <x-form.form-file-input label="{{ __('Evidence Attachments') }}"/>

                                <div class="d-flex flex-row justify-content-around flex-wrap">
                                    <x-form.form-button label="{{ __('Send Email') }}" class="mt-1"/>
                                    <x-form.form-button label="{{ __('Delete') }}" class="mt-1"/>
                                    <x-form.form-button label="{{ __('Add Investigation') }}" class="mt-1"/>
                                    <x-form.form-button label="{{ __('Add Actions') }}" class="mt-1"/>
                                    <x-form.form-button label="{{ __('Add Root Causes') }}" class="mt-1"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-main-layout>
