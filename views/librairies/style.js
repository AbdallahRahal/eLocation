function hider(b) {
	
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

$('#SettingsModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

$('#RegisterModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
};

function recherche(amount) {
  amount = Number(amount);
  for(let i = 0; i < amount; i++) {
    
    var titre = document.getElementById("titre"+ i).textContent;
    var text = document.getElementById("text"+ i).textContent;
    let item = document.getElementById('card'+ i);
    var ecriture = document.getElementById('test1').value;
    
    if(titre[titre.search(ecriture)] != undefined || text[text.search(ecriture)] != undefined  ) {
    //if(text.search(ecriture)) {
      $(item).show();
    
    } else {

      $(item).hide();

    }
  }

};

function tri(amount) {
  amount = Number(amount);
  for(let i = 0; i < amount; i++) {
    
    var price = document.getAttribute("data-price");

    
    if(titre[titre.search(ecriture)] != undefined || text[text.search(ecriture)] != undefined  ) {
    //if(text.search(ecriture)) {
      $(item).show();
    
    } else {

      $(item).hide();

    }
  }

};