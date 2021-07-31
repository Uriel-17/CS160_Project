$(document).ready(function () {
  //activate tooltip
  $('[data-toggle="tooltip"]').tooltip();
  //select deselect checkboxs
  var checebox = $("table tbody input[type= checkbox]");
  $("#selectAll").click(function () {
    if (this.checked) {
      checebox.each(function () {
        this.checked = true;
      });
    } else {
      checebox.each(function () {
        this.checked = false;
      });
    }
  });
  checebox.click(function () {
    if (this.checked) {
      $("selectAll").prop("checked", false);
    }
  });
});
