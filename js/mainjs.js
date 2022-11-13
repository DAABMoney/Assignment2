function EnableDisable() {
    let enTxb = document.getElementById("enTxb");
    let cardInfo = document.getElementById("cardInfo");
    let cardDate = document.getElementById("cardDate");
    cardInfo.disabled = enTxb.checked ? false : true;
    cardDate.disabled = enTxb.checked ? false : true;
    if (!cardInfo.disabled) {
        cardDate.focus();
        cardInfo.focus();        
    }
}
function EnableDisableTxt() {
    let enTxb2 = document.getElementById("enTxb2");
    let cardInfo = document.getElementById("cardInfo");
    let cardDate = document.getElementById("cardDate");
    cardInfo.disabled = enTxb2.checked ? false : true;
    cardDate.disabled = enTxb2.checked ? false : true;
    if (!cardInfo.disabled) {
        cardDate.focus();
        cardInfo.focus();        
    }
}
function resetTxt() {
    let reset = document.getElementById("reset");
    let cardInfo = document.getElementById("cardInfo");
    let cardDate = document.getElementById("cardDate");
    cardInfo.disabled = reset.checked ? false : true;
    cardDate.disabled = reset.checked ? false : true;
    if (!cardInfo.disabled) {
        cardDate.focus();
        cardInfo.focus();        
    }
}/*
function phoneDash (element) {
    let elem = document.getElementById(element.id);
    elem = elem.value.split('-').join('');
    let finalVal = elem.match(/.{1,3}/g).join('-');
    document.getElementById(element.id).value = finalVal;
}*/
/*function cardDash (element) {
    let elem = document.getElementById(element.id);
    elem = elem.value.split('-').join('');
    let finalVal = elem.match(/.{1,4}/g).join('-');
    document.getElementById(element.id).value = finalVal;
}*/
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    let charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function ShowHide(chkBx) {
    let sameAB = document.getElementById("sameAB");
    sameAB.style.display = chkBx.checked ? "block" : "none";
}