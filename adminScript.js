const  admin_form=document.getElementById("admin_form");
function storeAdminDetails(e){
    e.preventDefault();
    const admin={
        name:admin_form.name.value,
        password:admin_form.password.value
    }
    console.log(admin);
}


admin_form.addEventListener('submit',storeAdminDetails);