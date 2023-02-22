<div class="row ">
    <div class="col-12 ">
        <div class="card-box mb-0" :style="style ? 'border:2px solid black;' : ''">
            <div x-data="{ display: false }"
                 class="row d-flex mx-1 mb-1 justify-content-between btn-group dropdown-btn-group pull-right">
                <button @click="display=!display" {{--@click.outside="display=false"--}} type="button"
                        class="btn btn-default"
                        {{--data-toggle="dropdown"--}}
                        style="max-width: fit-content; background-color: #f3f7f9; color: #343a40; border: 1px solid rgba(50,58,70,.3);">
                    {{ __('Display')}}
                </button>

                <span class="clicky" @click="style= !style">
                                    <i class="mdi mdi-arrow-expand-all font-22"></i>
                                </span>

                <button wire:click="exportUsers()" type="button" class="btn btn-default"
                        style="max-width: fit-content; background-color: #f3f7f9; color: #343a40; border: 1px solid rgba(50,58,70,.3);">
                    {{ __('Excel')}}
                </button>

                <ul class="dropdown-menu columns-list"
                    style="padding:15px;"
                    :style="display ? 'display:block;' : ''">
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-0" value="report-1-col-0">
                        <label for="toggle-report-1-col-0">{{ __('id')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-01" value="report-1-col-01">
                        <label for="toggle-report-1-col-01">{{ __('stage_id')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-1" value="report-1-col-1">
                        <label for="toggle-report-1-col-1">{{ __('category')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-2" value="report-1-col-2">
                        <label for="toggle-report-1-col-2">{{ __('sub_category')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-3" value="report-1-col-3">
                        <label for="toggle-report-1-col-3">{{ __('title')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-4" value="report-1-col-4">
                        <label for="toggle-report-1-col-4">{{ __('observation_date')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-5" value="report-1-col-5">
                        <label
                            for="toggle-report-1-col-5">{{ __('observation_time')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-6" value="report-1-col-6">
                        <label for="toggle-report-1-col-6">{{ __('observation_description')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-7" value="report-1-col-7">
                        <label for="toggle-report-1-col-7">{{ __('location_id')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-8" value="report-1-col-8">
                        <label for="toggle-report-1-col-8">{{ __('area_id')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-9" value="report-1-col-9">
                        <label for="toggle-report-1-col-9">{{ __('immediate_action_taken')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-10" value="report-1-col-10">
                        <label for="toggle-report-1-col-10">{{ __('reported_by')}}</label>
                    </li>
                    <li class="checkbox-row">
                        <input type="checkbox" checked onchange="controlColumns()"
                               id="toggle-report-1-col-11" value="report-1-col-11">
                        <label for="toggle-report-1-col-11">{{ __('responsible_person')}}</label>
                    </li>
                </ul>
            </div>
            <div class="responsive-table-plugin">
                <div class="table-rep-plugin">
                    <div class="table-responsive" style="border: none; margin-bottom:0;"
                         data-pattern="priority-columns">
                        <table id="report-1" class="table table-striped">
                            <thead wire:ignore>
                            <tr>
                                <th class="column_id">
                                    {{ __('ID')}}
                                </th>
                                <th class="column_stage_id">
                                    {{ __('stage_id')}}
                                </th>
                                <th class="column_category" data-priority="1">
                                    {{ __('category')}}
                                </th>
                                <th class="column_sub_category" data-priority="3">
                                    {{ __('sub_category')}}
                                </th>
                                <th class="column_title" data-priority="1">
                                    {{ __('title')}}
                                </th>
                                <th class="column_observation_date" data-priority="1">
                                    {{ __('observation_date')}}
                                </th>
                                <th class="column_observation_time" data-priority="1">
                                    {{ __('observation_time')}}
                                </th>
                                <th class="column_observation_description" data-priority="3">
                                    {{ __('observation_description')}}
                                </th>
                                <th class="column_location_id" data-priority="3">
                                    {{ __('location_id')}}
                                </th>
                                <th class="column_area_id" data-priority="3">
                                    {{ __('area_id')}}
                                </th>
                                <th class="column_immediate_action_taken" data-priority="3">
                                    {{ __('immediate_action_taken')}}
                                </th>
                                <th class="column_reported_by" data-priority="6">
                                    {{ __('reported_by')}}
                                </th>
                                <th class="column_responsible_person" data-priority="6">
                                    {{ __('responsible_person')}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($observations as $observation)
                                <tr wire:ignore.self>
                                    <th wire:ignore.self class="column_id">
                                        {{$observation->id}}
                                    </th>
                                    <th wire:ignore.self class="column_stage_id">
                                        {{$observation->stage->name}}
                                    </th>
                                    <th wire:ignore.self class="column_category">
                                        {{$observation->category}}
                                    </th>
                                    <td wire:ignore.self class="column_sub_category">
                                        {{$observation->sub_category}}
                                    </td>
                                    <td wire:ignore.self class="column_title">
                                        {{$observation->title}}
                                    </td>
                                    <td wire:ignore.self class="column_observation_date">
                                        {{$observation->observation_date}}
                                    </td>
                                    <td wire:ignore.self class="column_observation_time">
                                        {{$observation->observation_time}}
                                    </td>
                                    <td wire:ignore.self class="column_observation_description">
                                        {{$observation->observation_description}}
                                    </td>
                                    <td wire:ignore.self class="column_location_id">
                                        {{$observation->location->name}}
                                    </td>
                                    <td wire:ignore.self class="column_area_id">
                                        {{$observation->area->name}}
                                    </td>
                                    <td wire:ignore.self class="column_immediate_action_taken">
                                        {{$observation->immediate_action_taken}}
                                    </td>
                                    <td wire:ignore.self class="column_reported_by">
                                        {{$observation->reporter->name}}
                                    </td>
                                    <td wire:ignore.self class="column_responsible_person">
                                        {{$observation->responsible->name}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive -->
                </div> <!-- end .table-rep-plugin-->
            </div> <!-- end .responsive-table-plugin-->
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div><!-- end row -->
