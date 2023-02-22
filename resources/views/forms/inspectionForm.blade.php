<x-main-layout>

    @push('css')
        @livewireStyles

        <link href="{{asset('libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
        <style>
            .inspection-form .dropdown-menu.show {
                display: flex!important;
            }
        </style>
    @endpush



    <x-slot name="pageTitle">
        {{ __('Inspection') }}
    </x-slot>


    <div class="container-fluid" id="fluid">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-9 col-xl-9">
                <div class="card-box">
                    <div class="row">

                        <livewire:add-inspection :datalist="$datalist" :locations="$locations" :areas="$areas"
                                          :users="$users" />

                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')

        <script>



            // show text field if 'Other' option is chosen for manual insertion
            $('#category').on('change', function () {
                if ($(this).val() === 'Other')
                    $('#manual-category').fadeIn(1000);
                else
                    $('#manual-category').fadeOut(1000);
            });


            //change background-color if an input is filled
            $("input, select, textarea").focusout(function () {
                if ($(this).attr('id') === 'description') {
                    if ($(this).val() !== '')
                        $(this).css("background-color", "#f6ffad");
                } else {
                    if ($(this).val() !== '')
                        $(this).css("background-color", "rgb(232, 240, 254)");
                }
                if ($(this).val() === '')
                    $(this).css("background-color", "#fff");
            });
        </script>



        {{-- handle checkbox lists style and dynamic adding and removing --}}
        <script>

            $('.checkbox').on('change', function () {
                let checkboxes_result_container = $(this).parents('.checkboxes-container').find('.result-container');

                // if checkbox is checked
                if ($(this).prop('checked') === true) {

                    // create span to hold the value of the checked checkbox
                    let span_element = $("<span id='" + $(this).attr('id') + "2' class=' bg-light rounded' style='display: inline-block; margin:5px 5px 0 5px; padding: 5px 10px; font-size: 0.74rem;'></span>");

                    // create small exit icon with 'x' sign to remove span manually if desired
                    let small_quite = $("<small class='clicky ml-2 ' onclick='smallQuite(this)'>x</small>")

                    // add checked checkbox value to the created span and attach the created close icon
                    span_element.text($(this).val()).append(small_quite);

                    // show the results container to hold the created span
                    checkboxes_result_container.fadeIn(1000);

                    // add the created spans to results container
                    checkboxes_result_container.append(span_element);

                    // else if the checkbox was unchecked
                } else {

                    // remove span which is related to unchecked checkbox
                    $('#' + $(this).attr('id') + '2').remove();

                    // hide the results container if no spans left to show
                    if (!checkboxes_result_container.find('span').html())
                        checkboxes_result_container.fadeOut(1000);
                }
            });


            // function to handle the click event on span's close icon
            function smallQuite(me) {
                let checkbox = $(me).parent('span').attr('id');
                let result_container = $(me).parents('.result-container');

                // uncheck the checkbox related to removed span
                $('#' + checkbox.slice(0, -1)).prop("checked", false);

                // hide the result container if there is no spans left to show( -1 in the if statement represent the span which will be removed after the if)
                if (!(result_container.find('span').length - 1 > 0)) {
                    result_container.fadeOut(1000);
                }

                // remove the span
                $('#' + checkbox).remove();
            }


            $('.dropdown-menu').on('click', function (e) {
                e.stopPropagation();
            });


        </script>




        <!-- Dropzone file uploads-->
        <script src="{{asset('js/dropzone.js')}}"></script>

        <!-- Init js-->
        <script src="{{asset('js/pages/form-fileuploads.init.js')}}"></script>


        @livewireScripts
    @endpush

</x-main-layout>
