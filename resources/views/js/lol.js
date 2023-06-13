// var countre=1;
// function add_more_field() {
//     countre+=1
//     html='<div class="row" id="row'+countre+'">\
//     <div class="col-8">\
//         <label >Select A Room</label>\
//         <input type="text" name="produvt'+countre+'" class="form-control" placeholder="lenovo 3300">\
//     </div>\
//     <div class="col-4">\
//         <label >Room type</label>\
//         <input type="number" name="price'+countre+'" class="form-control" placeholder="lenovo 3300">\
//     </div>\
// </div>'
//   var form= document.getElementById('product-form')
//   form.innerHTML+=html
// }
(function() {
    var counter = 0;
    var btn = document.getElementById('btn');
    var form = document.getElementById('form');
    var addInput = function() {
      counter++;
      var input = document.createElement("input");
      // input.id = 'input-' + counter;
      input.type = 'text';
      input.name = 'input-' + counter++;
      input.placeholder = 'Room type ' + counter;
      form.appendChild(input);
    };
    btn.addEventListener('click', function() {
      addInput();
    }.bind(this));
  })();
(function() {
    var counter = 0;
    var btn = document.getElementById('btn');
    var form = document.getElementById('form');
    var addInput = function() {
      counter++;
      var input = document.createElement("input");
      // input.id = 'input-' + counter;
      input.type = 'text';
      input.name = 'input-' + counter++;
      input.placeholder =   ' Select Room ' + counter;
      form.appendChild(input);
    };
    btn.addEventListener('click', function() {
      addInput();
    }.bind(this));
  })();
