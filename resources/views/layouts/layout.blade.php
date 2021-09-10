<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   
    <link href="{{ URL::asset('css/test.css'); }}" rel="stylesheet">

    <title>LexMeet</title>
          
  <script>
    var checkBoxLogo = document.getElementById("logo");
    var checkBoxTemplate = document.getElementById("template");
    var checkBoxCW = document.getElementById("cw");
    var checkBoxSP = document.getElementById("sp");
    var checkBox1 = document.getElementById("1");
    var checkBox2 = document.getElementById("2");
    var l,t,cw,sp,cb1,cb2 = 0;


  function onAddWebsite(){
    
   

    if (checkBoxLogo.checked == true){
        localStorage.setItem("l", "1");

    } 
    if (checkBoxTemplate.checked == true){
        localStorage.setItem("t", "1");
    } 
    if (checkBoxCW.checked == true){
        localStorage.setItem("cw", "1");
    } 
    if (checkBoxSP.checked == true){
        localStorage.setItem("sp", "1");
    } 
    if (checkBox1.checked == true){
        localStorage.setItem("cb1", "1");
    } 
    if (checkBox2.checked == true){
        localStorage.setItem("cb2", "1");
    } 


    }
  var data = 1;
  function dec(x){
    tableEl.addEventListener("click", onDeleteRow);
    data=parseInt(document.getElementById("box".concat(x)).value);

    data=data-1;
    document.getElementById("box".concat(x)).value=data;
    data=parseInt(document.getElementById("val".concat(x)).innerText);
    document.getElementById("val".concat(x)).innerText=data-5000;
  }


  function inc(x){
    data=parseInt(document.getElementById("box".concat(x)).value);
    data=data+1;
    
    document.getElementById("box".concat(x)).value=data;
    document.getElementById("val".concat(x)).innerText=data*5000;
  }

 

  

 
 
</script>

</head>
<body>
  
    
   


  
</body>
</html>