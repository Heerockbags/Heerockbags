$("[data-toggle=popover]").popover({
  html: true, 
content: function() {
        return $('#popover-content').html();
      }
});

$('.popover-dismiss').popover({
  trigger: 'focus'
})
$(document).ready(function () {
  $(document).click(function (event) {
      var clickover = $(event.target);
      var _opened = $(".burger").hasClass(".toggle in");
      if (_opened === true && !clickover.hasClass("burger")) {
          $(".burger").click();
      }
  });
});