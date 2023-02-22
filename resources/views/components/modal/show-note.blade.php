@props(['note', 'id'])

<div id="{{$id}}-modal" class="modal fade" tabindex="-1"
     role="dialog" aria-labelledby="showNoteModalLabel" aria-hidden="true" style="display: none;">

    <div class="modal-dialog modal-lg">
        <div class="modal-content ">

            <div class="modal-header bg-soft-light">
                <h4 class="modal-title" id="showNoteModalLabel">
                    {{ __('Fire Report') }}
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>

            <div class="modal-body p-4 bg-light">

                <div class="row">
                    <x-form.textarea >
                        {{$note}}
                    </x-form.textarea>
                </div>

            </div><!-- End Model Body -->
        </div><!-- End Model content -->
    </div><!-- End Model dialog -->
</div><!-- End Modal -->

