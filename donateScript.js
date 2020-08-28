const donate_form=document.getElementById('donate-form');

function storeDonateData(e){
  //  e.preventDefault();
    const donate_data={
        name:donate_form.name.value,
        phone:donate_form.phone.value,
        email:donate_form.email.value,
        address:donate_form.address.value,
        goods:donate_form.goods.value
    }
    console.log(donate_data);
}

donate_form.addEventListener('submit',storeDonateData);