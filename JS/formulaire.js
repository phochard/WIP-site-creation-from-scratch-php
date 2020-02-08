function showDiv(oEvent){
    var sVal = this.value,
        sIdCible = 'register-'+sVal+'-form',
        oForm = this.form,
        sClass = "select-cible-show",
        aDivs = oForm.getElementsByClassName("select-cible");
    for(var i = 0; i < aDivs.length; i++){
      var oEle = aDivs[i];
      if(oEle.id == sIdCible){
        oEle.classList.add(sClass)
      }else{ 
        oEle.classList.remove(sClass)
      }
    }
  }
  document.addEventListener('DOMContentLoaded',function(){
    var oForm = document.forms['myForm'];
    oForm['status-select'].addEventListener('change',showDiv);
  });
