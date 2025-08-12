$(document).ready(function() {
    // Load language data


    // Event listener for staff member click
    // $(document).on('click', '.staff', function(e) {
    //     e.preventDefault();
    //     var staffId = $(this).data('id');
    //     $.ajax({
    //         url: '../staff-data.php',
    //         type: 'POST',
    //         data: { id: staffId },
    //         dataType: 'json',
    //         success: function(response) {
    //             var modal = `
    //                 <div class="modal fade" id="staff-modal" tabindex="-1" role="dialog" aria-labelledby="staff-modal-label" aria-hidden="true">
    //                     <div class="modal-dialog modal-lg" role="document">
    //                         <div class="modal-content">
    //                             <div class="modal-header">
    //                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    //                                     <span aria-hidden="true">&times;</span>
    //                                 </button>
    //                             </div>
    //                             <div class="modal-body">
    //                                 ${response.description}
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>`;
    //             $('#staff-modal-container').html(modal);
    //             $('#staff-modal').modal('show');
    //         }
    //     });
    // });

});
