@extends('marketplace.layout')
<div class="container " style="padding-top: 2.4rem;padding-bottom: 2.4rem;" id="step5">
    <div class="tracking-progress-bar text-center">
      <div class="tracking-progress-bar__item tracking-progress-bar__item--first tracking-progress-bar__item--active">1</div>
      <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
      <div class="tracking-progress-bar__item tracking-progress-bar__item--active">2</div>
      <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
      <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">3</div>
      <span class="tracking-progress-bar__item__bar  tracking-progress-bar__item--active"></span>
      <div class="tracking-progress-bar__item  tracking-progress-bar__item--active">4</div>
      <span class="tracking-progress-bar__item__bar tracking-progress-bar__item--active"></span>
      <div class="tracking-progress-bar__item tracking-progress-bar__item--active">5</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">6</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">7</div>
      <span class="tracking-progress-bar__item__bar"></span>
      <div class="tracking-progress-bar__item">8</div>
    </div>
  
  
  <div class="p-3 pb-md-4 mx-auto text-center">
      <h2 class="display-5 fw-normal"><b>Step 5</b> - Check Your Order</h1>
        <div class="container align-center" style="padding-top: 2rem;padding-bottom: 2.4rem;">
          <div class="table-responsive">
            <table class="table text-center" id="tables">
              <thead>
                <tr >
                  <th style="width: 20%;">Product</th>
                  <th style="width: 20%;">Price</th>
                  <th style="width: 20%;">Quantity</th>
                  <th style="width: 20%;">Total Amount</th>
                  <th style="width: 20%;">Action</th>
                </tr>
              </thead>
              <tbody id="tbv">
              </tbody>
            </table>
          </div>
        </div>
      
        <form method = "POST"action="{{route('onboarding', ['next_step'=>'step6'] +\Request::all() )}}">
          @csrf
        <input type="hidden" id ="details" name = "details"/>
        <a class = "w-25 btn  btn-orange" href="{{route('step4', \Request::all())}}">Back </a>
        <button type="submit" class="w-25 btn  btnviolet" onClick = "toJson()">Next</button>
        
        </form>
    </div>
  </div>

<script>

    var checkBoxLogo = document.getElementById("logo");
    var checkBoxTemplate = document.getElementById("template");
    var checkBoxCW = document.getElementById("cw");
    var checkBoxSP = document.getElementById("sp");
    var checkBox1 = document.getElementById("1");
    var checkBox2 = document.getElementById("2");
    const tbodyEl = document.getElementById("tbv");
    const tableEl = document.getElementById("tables");
    
if (parseInt(localStorage.getItem("l"))>=1){
  tbodyEl.innerHTML += `
  <tr>
    <td><p class = "step5p" id="prod1">Logo</p></td>
    <td><p class = "step5p" >5000</p></td>
    <td>
      <div class="input-group">
        <button onclick="dec(1)" class = "btn btn-orange btn0">-</button>
        <input type="text" id="box1"  value ="1" class="form-control text-center sm-hide">
        <p id="label1" class="phide" >1</p>
        <button onclick="inc(1)" class = "btn btn-orange btn0">+</button>
      </div>
    </td>
    <td><p class = "step5p"  id = "val1">5000</p></td>
    <td><button class="deleteBtn btnviolet btn">Delete</button> </td>
  </tr>
  `;
} 

if (parseInt(localStorage.getItem("t"))>=1){
  tbodyEl.innerHTML += `
  <tr>
    <td><p class = "step5p" id="prod2">Template</p></td>
    <td><p class = "step5p" >5000</p></td>
    <td>
      <div class="input-group">
        <button onclick="dec(2)" class = "btn btn-orange btn0">-</button>
        <input type="text" id="box2"  value ="1" class="form-control text-center sm-hide">
        <p id="label2" class="phide" >1</p>
        <button onclick="inc(2)" class = "btn btn-orange btn0">+</button>
      </div>
    </td>
    <td><p  class = "step5p" id = "val2">5000</p></td>
    <td><button class="deleteBtn btnviolet btn">Delete</button></td>
    </tr>
    `;
}

if (parseInt(localStorage.getItem("cw"))>=1){
  tbodyEl.innerHTML += `
    <tr>
    <td><p  class = "step5p" id="prod3">Content Writing</p></td>
    <td><p class = "step5p" >5000</p></td>
    <td>
      <div class="input-group">
        <button onclick="dec(3)" class = "btn btn-orange btn0">-</button>
        <input type="text" id="box3"  value ="1" class="form-control text-center sm-hide">
        <p id="label3" class="phide" >1</p>
        <button onclick="inc(3)" class = "btn btn-orange btn0">+</button>
      </div>
    </td>
    <td><p class = "step5p"  id = "val3">5000</p></td>
    <td><button class="deleteBtn btnviolet btn">Delete</button>  </td>
    </tr>
    `;
}

if (parseInt(localStorage.getItem("sp"))>=1){
  tbodyEl.innerHTML += `
  <tr>
  <td><p class = "step5p"  id="prod3">Stock Photos</p></td>
  <td><p class = "step5p" >5000</p></td>
  <td>
    <div class="input-group">
      <button onclick="dec(4)" class = "btn btn-orange btn0">-</button>
      <input type="text" id="box4"  value ="1" class="form-control text-center sm-hide">
      <p id="label4" class="phide" >1</p>
      <button onclick="inc(4)" class = "btn btn-orange btn0">+</button>
    </div>
  </td>
  <td><p class = "step5p"  id = "val4">5000</p></td>
  <td><button class="deleteBtn btnviolet btn">Delete</button></td>
  </tr>
  `;
} 

if (parseInt(localStorage.getItem("cb1"))>=1){
tbodyEl.innerHTML += `
<tr>
<td><p class = "step5p"  id="prod4">Test1</p></td>
<td><p class = "step5p" >5000</p></td>
<td>
  <div class="input-group">
    <button onclick="dec(5)" class = "btn btn-orange btn0">-</button>
    <input type="text" id="box5"  value ="1" class="form-control text-center sm-hide">
    <p id="label5" class="phide" >1</p>
    <button onclick="inc(5)" class = "btn btn-orange btn0">+</button>
  </div>
</td>
<td><p  class = "step5p" id = "val5">5000</p></td>
<td><button class="deleteBtn btnviolet btn">Delete</button></td>
</tr>
`;
} 
if (parseInt(localStorage.getItem("cb2"))>=1){
tbodyEl.innerHTML += `
<tr>
<td><p  class = "step5p" id="prod5">test2</p></td>
<td><p class = "step5p" >5000</p></td>
<td>
  <div class="input-group">
    <button onclick="dec(6)" class = "btn btn-orange btn0">-</button>
    <input type="text" id="box6"  value ="1" class="form-control text-center sm-hide">
    <p id="label6" class="phide" >1</p>
    <button onclick="inc(6)" class = "btn btn-orange btn0">+</button>
  </div>
</td>
<td><p  class = "step5p" id = "val6">5000</p></td>
<td><button class="deleteBtn btnviolet btn">Delete</button></td>
</tr>
`;

} 

function onDeleteRow(e) {
  if (!e.target.classList.contains("deleteBtn")) {
      return;
  }
    const btn = e.target;
    btn.closest("tr").remove();
  }

tableEl.addEventListener("click", onDeleteRow);




function toJson() {

    var data = [];
    var table = document.getElementById("tables");
    // first row needs to be headers
    var headers = [];
    for (var i=0; i<table.rows[0].cells.length; i++) {
      if(table.rows[0].cells[i].innerHTML.toLowerCase()=="quantity" || table.rows[0].cells[i].innerHTML.toLowerCase()=="action" ){
        continue;
      }
      else{
        headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi,'');
      }
       
    }
    // go through cells
    for (var i=1; i<table.rows.length; i++) {

        var tableRow = table.rows[i];
        var rowData = {};

        for (var j=0; j<tableRow.cells.length; j++) {
          if(headers[j] != null){
            rowData[ headers[j] ] = tableRow.cells[j].innerText;

          }
          else{
            continue;
          }
        }
        data.push(rowData);
    }    
    document.getElementById("details").value = JSON.stringify(data);
   
    for(let x=1;x<=5;x++){
     var element = document.getElementById("box".concat(x));
    if(element!= null){
      var value = parseInt(element.value);
      if(value>=1){
      localStorage.setItem("prod".concat(x), document.getElementById("prod".concat(x)).innerText);
      localStorage.setItem("qty".concat(x), document.getElementById("box".concat(x)).value);
      localStorage.setItem("tp".concat(x),  document.getElementById("val".concat(x)).innerText);

      }

    }
    else
      continue;
   
  }
}



</script>
