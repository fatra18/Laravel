@extends('layouts.app')
@section('content')
<p>Link 1</p>
<a data-toggle="modal" data-id="ISBN564541" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">test</a>

<p>&nbsp;</p>


<p>Link 2</p>
<a data-toggle="modal" data-id="ISBN-001122" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">test</a>

<div class="modal hide" id="addBookDialog">
 <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>Modal header</h3>
  </div>
    <div class="modal-body">
        <p>some content</p>
        <input type="text" name="bookId" id="bookId" value=""/>
    </div>
</div>
@endsection
<script>
    $(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
    
});

</script>