function checkCardType() {
  var cardNumber = document.getElementById("card-number");
  var pattern = /^4(\d ?){12,15}$/;
  // alert(cardNumber);

  // if(cardNumber[0] == 4) {
  //   alert("lol");
  //   if(13 <= cardNumber.length <= 16) 
  //     document.getElementById("card-type").innerHTML = "VISA";
  // } else {
  //   document.getElementById("card-type").innerHTML = "Its not a Visa card";
  }

  if(pattern.test(cardNumber)){
    document.getElementById("card-type").innerHTML = "VISA";
  } else {
    document.getElementById("card-type").innerHTML = "Its not a Visa card";
  }
}


function incrementQuantity() {
  document.getElementById("item-quantity").stepUp();
  updatePrice();
}

function decrementQuantity() {
  document.getElementById("item-quantity").stepDown();
  updatePrice();
}

function quantityCheck(){
  var quantity = document.getElementById("item-quantity").value;
  if (quantity >= 1){
    return quantity;
  } else {
    alert("Please enter a quantity greater than 0.");
    return false;
  }
}

function formCheck() {
  return quantityCheck();
}

// var pricesArray = new Array();
// pricesArray["walnut-pendant"] = 55.00;
// pricesArray["timber-cylindrical-pendant"] = 75.00;
// pricesArray["metallic-bar-pendant"] = 85.00;
//
// function getSinglePrice(){
//   var theForm = document.getElementById("option");
//   var singlePrice = pricesArray[theForm.value];
//   return singlePrice;
// }


function updatePrice() {
  // var total = getSinglePrice();
  var price = document.getElementById("single-price").value;
  var quantity = document.getElementById("item-quantity").value;

  document.getElementById("total_price").innerHTML = (price * quantity).toFixed(2);
}
