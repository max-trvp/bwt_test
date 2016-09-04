$(function() {
  $('.comment-ans').click(function(){
    var $ansForm = $('.ans-form');
    $ansForm.hide();
    var mid = $(this).attr("id");
    var clone = $ansForm.clone();
    $ansForm.remove();
    setTimeout(function(){
      $(clone).css("margin", "5px 0 5px 20px");
      $(clone).insertAfter("span#" + mid).slideDown();
      $("input[name=parent]").val(mid);
    }, 200);
  });
});