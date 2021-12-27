 <!-- Core plugin JavaScript-->
 <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins --> 
 <script src="/vendor/chart.js/Chart.min.js"></script>

 <!-- Bootstrap core JavaScript-->
 <script src="/vendor/jquery/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
 <script src="https://unpkg.com/vue-toasted"></script>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
 <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
 <script>
        ClassicEditor
                .create( document.querySelector( '.ckeditor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>

 
 <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>
         $('#edit').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var title = button.data('mytitle') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body input').val(title)
})

 </script>
 
