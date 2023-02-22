<x-main-layout>


    @push('css')
        @livewireStyles
    @endpush


    <x-slot name="pageTitle">
        {{ __('Incident') }}
    </x-slot>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-9 col-xl-9">
                <div class="card-box">





                    <livewire:add-incident :datalist="$datalist" :locations="$locations" :users="$users"/>




                </div>
                <!-- CardBox End -->
            </div>
            <!-- CardBox Size End -->
        </div>
        <!-- Container Row End -->
    </div>
    <!-- Container End -->


    @push('scripts')

        <script>


            //show, hide, edit fields based on incident type[ accident or nearmiss]
            $('#incident_type').on('change', function () {

                //if Nearmiss chosen
                if ($('#Nearmiss').is(':selected')) {
                    $('#type-of-activity').show();

                    //show 'Potential Loss' checkboxes container
                    $('.assessment-show').show();
                    //show 'Potential Loss' evaluation container if any of the checkboxes is checked
                    if ($('#people').prop('checked') || $('#environment').prop('checked') || $('#cost').prop('checked'))
                        $('#assessment').show();
                    //enable 'Potential Loss' evaluation fields based on 'Potential Severity' state
                    checkEvaluationFields('people')
                    checkEvaluationFields('environment')
                    checkEvaluationFields('asset')

                    $('.accident-consequences').hide();
                    $('input[name="actual_loss[]"]').attr('disabled', true);

                    $("label,h5, h3, h2, .page-title-box li").each(function () {
                        let text = $(this).text();
                        text = text.replace("Incident", "Nearmiss");
                        text = text.replace("Accident", "Nearmiss");
                        $(this).text(text);
                    });
                }
                //if Accident chosen
                else {
                    $('#type-of-activity').hide();
                    $('.assessment-show').hide();
                    $('#assessment').hide();
                    $('.accident-consequences').show();
                    $('input[name="actual_loss[]"]').attr('disabled', false);
                    $('.potential-loss').attr('disabled', true);


                    $("label,h5, h3, h2, .page-title-box li").each(function () {
                        let text = $(this).text();
                        text = text.replace("Incident", "{{ __('Accident') }}");
                        text = text.replace("Nearmiss", "{{ __('Accident') }}");
                        $(this).text(text);
                    });
                }

            });



            //change background-color if an input is filled
            $("input, select, textarea").focusout(function () {
                if ($(this).attr('id') === 'title') {
                    if ($(this).val() !== '')
                        $(this).css("background-color", "#f6ffad");
                } else {
                    if ($(this).val() !== '')
                        $(this).css("background-color", "rgb(232, 240, 254)");
                }
                if ($(this).val() === '')
                    $(this).css("background-color", "#fff");

                $('.js-select').on('change', function (e) {
                    if (e.target.value !== '')
                        $(this).parent('div').find('.select2-selection').css('background-color', 'rgb(232, 240, 254)');
                    else
                        $(this).parent('div').find('.select2-selection').css('background-color', '#fff');
                });
            });

        </script>



        <script>

            let assessment = $('#assessment');

            //Control 'Loss Potential' people section fields (show-hide-disable-readonly) when people checkbox value changed
            $("#people").on('change', function () {

                if ($(this).prop('checked')) {

                    //show people evaluation section
                    $('#people-evaluation').fadeIn(1000);
                    //set red star to inputs to clarify that they are required if it was checked
                    $('#people-evaluation').find('.red-star').html('*');
                    //show matrix only if frequency input is set
                    if ($('#people-frequency-of-occurrence option:selected').val())
                        $('#people-matrix').fadeIn(1000);

                    checkEvaluationFields('people')

                } else {

                    //hide people evaluation section
                    $('#people-evaluation').fadeOut(1000);
                    //hide people matrix
                    $('#people-matrix').fadeOut(1000);
                    //set all inputs(Potential Severity, frequency, potential risk) to disabled
                    $('.people-potential-loss').attr('disabled', true);
                    //unset red star when checkbox unchecked
                    $('#people-evaluation').find('.red-star').html('');
                }

                checkEvaluationContainer();
            });

            //Control 'Loss Potential' environment section fields (show-hide-disable-readonly) when people checkbox value changed
            $("#environment").on('change', function () {

                if ($(this).prop('checked')) {

                    //show environment evaluation section
                    $('#environment-evaluation').fadeIn(1000);
                    //set red star to inputs to clarify that they are required if it was checked
                    $('#environment-evaluation').find('.red-star').html('*');
                    //show matrix only if frequency input is set
                    if ($('#environment-frequency-of-occurrence option:selected').val())
                        $('#environment-matrix').fadeIn(1000);

                    checkEvaluationFields('environment')

                } else {

                    //hide environment evaluation section
                    $('#environment-evaluation').fadeOut(1000);
                    //hide environment matrix
                    $('#environment-matrix').fadeOut(1000);
                    //set all inputs(Potential Severity, frequency, potential risk) to disabled
                    $('.environment-potential-loss').attr('disabled', true);
                    //unset red star when checkbox unchecked
                    $('#environment-evaluation').find('.red-star').html('');
                }

                checkEvaluationContainer();
            });

            //Control 'Loss Potential' asset section fields (show-hide-disable-readonly) when people checkbox value changed
            $("#cost").on('change', function () {

                if ($(this).prop('checked')) {

                    //show cost(asset) evaluation section
                    $('#cost-evaluation').fadeIn(1000);
                    //set red star to inputs to clarify that they are required if it was checked
                    $('#cost-evaluation').find('.red-star').html('*');
                    //show matrix only if frequency input is set
                    if ($('#asset-frequency-of-occurrence option:selected').val())
                        $('#cost-matrix').fadeIn(1000);

                    checkEvaluationFields('asset')

                } else {

                    //hide cost(asset) evaluation section
                    $('#cost-evaluation').fadeOut(1000);
                    //hide cost(asset) matrix
                    $('#cost-matrix').fadeOut(1000);
                    //set all inputs(Potential Severity, frequency, potential risk) to disabled
                    $('.asset-potential-loss').attr('disabled', true);
                    //unset red star when checkbox unchecked
                    $('#cost-evaluation').find('.red-star').html('');
                }

                checkEvaluationContainer();
            });


            function checkEvaluationContainer() {
                if ($('#people').prop('checked') || $('#environment').prop('checked') || $('#cost').prop('checked'))
                    assessment.show();
                else
                    assessment.fadeOut(1000);
            }

            function checkEvaluationFields(section) {
                if ($('#' + section + '-potential-severity option:selected').val()) {
                    //if 'potential severity' has value enable all inputs(disabled => false)
                    $('.' + section + '-potential-loss').attr('disabled', false);
                    $('#' + section + '-risk').attr('readonly', true);
                } else
                    //if 'potential severity' doesn't have a value only enable potential severity
                    $('#' + section + '-potential-severity').attr('disabled', false);
            }

        </script>


        @livewireScripts
    @endpush
</x-main-layout>
