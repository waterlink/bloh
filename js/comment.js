function post_comment(){
  var request = new XMLHttpRequest();
  var url = "/logic/comments/new.php";
  var post_id = document.getElementsByName("post_id")[0].value;
  var comment = document.getElementsByName("comment")[0].value;
  document.getElementsByName("comment")[0].value = "";
  var vars = "post_id="+post_id+"&comment="+comment;
  request.open("POST", url, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.onreadystatechange = function() {
    if(request.readyState == 4 && request.status == 200) {
      var return_data = request.responseText;
    document.getElementsByClassName("comments_container")[0].innerHTML = return_data;
    }
  }
  request.send(vars);
  // document.getElementsByClassName("comments_container")[0].innerHTML = "processing...";
}
