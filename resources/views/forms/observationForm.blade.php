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
                            <li class="breadcrumb-item active">Observation</li>
                        </ol>
                    </div>
                    <h4 class="page-title"> {{ __('Observation') }}</h4>
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
                        <div style="border: 1px dashed black; border-radius: 3px" class="col-sm-10 col-xl-8 offset-1 offset-xl-2 p-4">
                            <h3 class="mb-4">{{ __('Observation') }} #237 </h3>
                            <form>

                                <x-form.form-select-input label="{{ __('Category') }}">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('Unsafe Act') }}</option>
                                    <option value="">{{ __('Unsafe Condition') }}</option>
                                    <option value="">{{ __('Positive') }}</option>
                                    <option value="">{{ __('Suggestions/Complaint') }}</option>
                                </x-form.form-select-input>

                                <x-form.form-select-input label="{{ __('Sub-Category') }}">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('PPE') }}</option>
                                    <option value="">{{ __('Position Of People') }}</option>
                                    <option value="">{{ __('Tool & Equipment') }}</option>
                                    <option value="">{{ __('Procedures') }}</option>
                                </x-form.form-select-input>

                                <x-form.form-text-input label="{{ __('Title') }}" mb="3"/>

                                <x-form.form-date-input label="{{ __('Observation Date') }}"/>
                                <x-form.form-time-input label="{{ __('Observation Time') }}"/>

                                <x-form.form-select-input label="{{ __('Location') }}">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('Location A') }}</option>
                                    <option value="">{{ __('Location B') }}</option>
                                    <option value="">{{ __('Location C') }}</option>
                                    <option value="">{{ __('Location D') }}</option>
                                </x-form.form-select-input>

                                <x-form.form-textarea-input label="{{ __('Observation Description') }}"/>

                                <x-form.form-textarea-input label="{{ __('Immediate Action Taken') }}" rows="2"/>

                                <x-form.form-select-input label="{{ __('Potential Consequences') }}">
                                    <option selected>{{ __('Select') }}</option>
                                    <option value="">{{ __('Personal Injury') }}</option>
                                    <option value="">{{ __('Spill') }}</option>
                                    <option value="">{{ __('Fire') }}</option>
                                    <option value="">{{ __('Gas Leak') }}</option>
                                </x-form.form-select-input>

                                <x-form.form-text-input label="{{ __('Reported By') }}" placeholder="{{ __('Name') }}" mb="0"/>
                                <x-form.form-text-input label="" placeholder="{{ __('Department') }}" mb="3"/>

                                <x-form.form-textarea-input rows="2" label="{{ __('Comments') }}"/>

                                <x-form.form-text-input label="{{ __('Responsible Person') }}" placeholder="{{ __('Name') }}" mb="0"/>
                                <x-form.form-text-input label="" placeholder="{{ __('Department') }}" mb="4"/>

                                <x-form.form-file-input label="{{ __('Evidence Attachments') }}" />

                                <div class="d-flex flex-row justify-content-between">
                                    <x-form.form-button label="{{ __('Add Action') }}"/>
                                    <x-form.form-button label="{{ __('Save As Draft') }}"/>
                                    <x-form.form-button label="{{ __('Submit') }}"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-main-layout>
