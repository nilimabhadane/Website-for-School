function testAnim(x) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated');
};
$('#edit_model').on('show.bs.modal', function (e) {
  var anim = $('#entrance').val();
      testAnim(anim);
})
$('#edit_model').on('hide.bs.modal', function (e) {
  var anim = $('#exit').val();
      testAnim(anim);
})
