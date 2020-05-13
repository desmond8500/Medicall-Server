<a class="mr-md-3" data-toggle="modal" data-target=".modalText{{ $id}}">
    {{$title}}
</a>

<div class="modal fade modalText{{ $id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content container">
    {{-- ====================================================================================== --}}
        @include($content)
    {{-- ====================================================================================== --}}
    </div>
  </div>
</div>
