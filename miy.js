var div = document.createElement('div');
div.className = "alert alert-success";
div.innerHTML = "<strong>Ура!</strong> Вы прочитали это важное сообщение.";
document.body.appendChild(div);
setTimeout(function() {
div.parentNode.removeChild(div);
  }, 1000);