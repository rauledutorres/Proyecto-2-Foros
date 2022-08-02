const btn_reg=document.querySelector("#reg");
const btn_is=document.querySelector("#is");
const box_login=document.querySelector("#login");;
const box_register=document.querySelector("#registro");
// const reg=document.querySelector("#reg");
//___________________ boton de incio de sesion y registro__________________
btn_reg.addEventListener('click',()=>{
    btn_is.classList.toggle("is");
    btn_reg.classList.toggle("reg");
    box_login.classList.toggle("login");
    box_register.classList.toggle("registro");
});
btn_is.addEventListener('click',()=>{
    btn_reg.classList.toggle("reg");
    btn_is.classList.toggle("is");
    box_register.classList.toggle("registro");
    box_login.classList.toggle("login");
});

