<button type="button" class="btn {{$btn_style ?? 'btn-primary'}}" data-toggle="modal" data-target="#{{$divid}}">
    {{$title?? ""}}
  </button>

<div class="modal fade" id="{{$divid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="{{$divid}}Label">{{$title ?? "xxx"}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{$slot}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn {{$btn_style ?? 'btn-primary'}}">Save changes</button>
        </div>
      </div>
    </div>
</div>
