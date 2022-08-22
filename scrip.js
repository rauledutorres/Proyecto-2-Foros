const btn_reg=document.querySelector("#reg");
const btn_is=document.querySelector("#is");

const box_login=document.querySelector("#login");
const box_register=document.querySelector("#registro");
document.getElementById
const btn_vipass=document.querySelector(".img_reg_vipass");
const btn_vitxt=document.querySelector(".img_reg_vitxt");

const btn_logpass=document.querySelector(".img_log_vipass");
const btn_logtxt=document.querySelector(".img_log_vitxt");

const pass=document.querySelector(".input_pass");
const logpass=document.querySelector("#log_pass");
const valid=document.querySelector("#valid_pass");
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
//boton para vizualizar la contraseña en el form reg//
btn_vipass.addEventListener('click',()=>{
    btn_vipass.classList.toggle("txt");
    btn_vitxt.classList.toggle("pass");
    pass.setAttribute("type","text");
    console.log(pass);
});
btn_vitxt.addEventListener('click',()=>{
    btn_vipass.classList.toggle("txt");
    btn_vitxt.classList.toggle("pass");
    pass.setAttribute("type","password");
    console.log(pass);
});
//--------------------------------------------------//
//boton para vizualizar la contraseña en el form log//
btn_logpass.addEventListener('click',()=>{
    btn_logpass.classList.toggle("txt");
    btn_logtxt.classList.toggle("pass");
    logpass.setAttribute("type","text");
    console.log(logpass);
});
btn_logtxt.addEventListener('click',()=>{
    btn_logpass.classList.toggle("txt");
    btn_logtxt.classList.toggle("pass");
    logpass.setAttribute("type","password");
    console.log(logpass);
});
//-------------------------------------------------//
valid.addEventListener('keyup',(event)=>{
    let con = (pass.value);
    let val_con = event.target.value;
    if (con === val_con) {
        console.log("las contraseña son iguales");
        
    }else{
        console.log("no son iguales");
    }
});



