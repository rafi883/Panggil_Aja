
const container = document.getElementById ('container');
const signInBtn = document.getElementById ('register');
const loginBtn = document.getElementById ('login');

signInBtn.addEventListener('click', ()=>{
    container.classList.add("active");
});

loginBtn.addEventListener('click', ()=>{
    container.classList.add("active");
});

