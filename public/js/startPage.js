
function startBest(){
  document.getElementById('linkBest').className = 'btn-warning btn col-3'
  document.getElementById('linkTop').className = 'btn-outline-warning btn col-3'
  document.getElementById('linkNews').className = 'btn-outline-warning btn col-3'
}

function startNew(){
  document.getElementById('linkNews').className = 'btn-warning btn col-3'
  document.getElementById('linkTop').className = 'btn-outline-warning btn col-3'
  document.getElementById('linkBest').className = 'btn-outline-warning btn col-3'
}

function startTop(){
  document.getElementById('linkTop').className = 'btn-warning btn col-3'
  document.getElementById('linkBest').className = 'btn-outline-warning btn col-3'
  document.getElementById('linkNews').className = 'btn-outline-warning btn col-3'
}
