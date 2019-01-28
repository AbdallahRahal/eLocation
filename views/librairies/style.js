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


$('#RepriseModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

$('#SuppModal').on('show.bs.modal', function (event) {
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

$('#Rendre_Art').on('show.bs.modal', function (event) {
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

function change_point (adresse) {

  var e = document.getElementById('point_relais');
  var d = e.options[e.selectedIndex].textContent;
  var r = d.split('/');
  var t = r[0];

$('#maps').attr("src", "https://maps.google.com/maps?q="+t+"&t=&z=13&ie=UTF8&iwloc=&output=embed");

};

function tri (amount) {

var e = document.getElementById('testJs');

if( e.options[e.selectedIndex].value == 'Croissant') {

var $sorted_items,
  getSorted = function(selector, attrName) {
      return $(
        $(selector).toArray().sort(function(a, b) {
            var aVal = parseInt(a.getAttribute(attrName)),
                bVal = parseInt(b.getAttribute(attrName));
            return aVal - bVal;
        })
      );
  };

$sorted_items = getSorted("#lists .col-md-4", "data-price").clone();

$('#lists').html( $sorted_items );
$('#lists').hide();
$('#lists').show(1500);

  /*amount = Number(amount);
  var liste = document.getElementsByClassName('col-md-4');
  for(i = 0; i < liste.length;i++)
  {
    console.log(liste[i].dataset.price);
  }*/

} else if(e.options[e.selectedIndex].value == 'Décroissant' ) {

  var $sorted_items,
  getSorted = function(selector, attrName) {
      return $(
        $(selector).toArray().sort(function(a, b){
            var aVal = parseInt(a.getAttribute(attrName)),
                bVal = parseInt(b.getAttribute(attrName));
            return bVal - aVal;
        })
      );
  };

$sorted_items = getSorted("#lists .col-md-4", "data-price").clone();

$('#lists').html( $sorted_items );
$('#lists').hide();
$('#lists').show(1500);

}else if(e.options[e.selectedIndex].value == 'Neuf' ) {

  var $sorted_items,
  getSorted = function(selector, attrName) {
      return $(
        $(selector).toArray().sort(function(a, b){
            var aVal = parseInt(a.getAttribute(attrName)),
                bVal = parseInt(b.getAttribute(attrName));
            return aVal - bVal;

        })
      );
  };

$sorted_items = getSorted("#lists .col-md-4", "data-etat").clone();

$('#lists').html( $sorted_items );
$('#lists').hide();
$('#lists').show(1500);

}else if(e.options[e.selectedIndex].value == 'Abime' ) {

  var $sorted_items,
  getSorted = function(selector, attrName) {
      return $(
        $(selector).toArray().sort(function(a, b){
            var aVal = parseInt(a.getAttribute(attrName)),
                bVal = parseInt(b.getAttribute(attrName));
            return bVal - aVal;
        })
      );
  };

$sorted_items = getSorted("#lists .col-md-4", "data-etat").clone();

$('#lists').html( $sorted_items );
$('#lists').hide();
$('#lists').show(1500);

}
};