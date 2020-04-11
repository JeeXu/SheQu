var xmlhttp;

function loadXMLDoc(url, cfunc) {
  if (window.XMLHttpRequest) {
    // IE7+, Firefox, Chrome, Opera, Safari 代码
    xmlhttp = new XMLHttpRequest();
  } else {
    // IE6, IE5 代码
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = cfunc;
  xmlhttp.open("GET", url, true);
  xmlhttp.send();
}

function oldperson() {
  loadXMLDoc("php/oldperson/searchOldperson.php", function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("oldperson-msg").innerHTML =
        xmlhttp.responseText;
    }
  });
}

function oldPerson(str) {
  loadXMLDoc("php/oldperson/searchOldperson.php?search_name=" + str, function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("oldperson-msg").innerHTML =
        xmlhttp.responseText;
    }
  });
}

function showOldperson() {
  let str = $("#searchName").val();
  if (str.trim() == "") {
    document.getElementById("search-result").innerHTML = "请输入name";
    return;
  }
  oldPerson(str);
}

function article() {
  loadXMLDoc("php/article/search.php", function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("msg-box").innerHTML = xmlhttp.responseText;
    }
  });
}

function helpMsg() {
  loadXMLDoc("php/help/searchHelp.php", function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("helpMsg-card").innerHTML = xmlhttp.responseText;
    }
  });
}

function delArticle() {
  var id = event.srcElement.id;
  var r = confirm("确认删除?");
  if (r != true) {
    return false;
  } else {
    loadXMLDoc("php/article/delete.php?id=" + id, function () {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        article();
      }
    });
  }
}

function delHelpMsg() {
  var id = event.srcElement.id;
  var r = confirm("确认删除?");
  if (r != true) {
    return false;
  } else {
    loadXMLDoc("php/help/delete.php?id=" + id, function () {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        helpMsg();
      }
    });
  }
}
//页面全部加载完成执行 jq方法
// $().ready(function () {
//   article()
//   oldperson()
// });
//页面全部加载完成执行 方法2
window.onload = function () {
  oldperson()
  article()
  helpMsg()
}