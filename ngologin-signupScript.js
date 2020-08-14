const login=document.getElementById("login");
const signup=document.getElementById('sign-up-data')


function storeNgoLogin(e){
    e.preventDefault();
    const ngo_login={
        name:login.name.value,
        password:login.password.value
    }
    console.log(ngo_login);
}

login.addEventListener('submit',storeNgoLogin);


function storeNgoSignup(e){
    e.preventDefault();
    const ngo_signup={
        name:signup.ngoname.value,
        phone:signup.ngophone.value,
        email:signup.ngoemail.value,
        location:signup.location.value,
        password1:signup.password1.value,
        password2:signup.password2.value

    }
    console.log(ngo_signup);

}
signup.addEventListener('submit',storeNgoSignup);



