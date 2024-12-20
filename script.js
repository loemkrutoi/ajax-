//createTableQuery();
let button = document.getElementById('btn');
let login = document.getElementById('login');
let email = document.getElementById('email');
let theatre = document.getElementById('theatre');
let forma = document.querySelector('form');
let div = document.querySelector('div');
let btn = document.getElementById('btn');

let allInputs = document.querySelectorAll('input');
let modalWin = document.querySelector('.modalWin');

allInputs[0].addEventListener('blur', JSONFunc);
allInputs[1].addEventListener('blur', JSONFunc);
allInputs[2].addEventListener('blur', JSONFunc);

// async function createTableQuery (){
//     try{
//         let query = await fetch(`addTable.php`)
//         let response = await query.text();
//         if(response) {
//             div.innerHTML = response;
//         }
//     }
//     catch (error) {
//         console.log(error);
//     };
// };

async function JSONFunc (event){
    event.preventDefault();
    div.classList.add('normal');
    div.classList.remove('hidden');
    try{
        let loginValue = login.value;
        let emailValue = email.value;
        let theatreValue = theatre.value;
        let query = await fetch(`ajax.php`,{
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({'login':loginValue , 'email':emailValue, 'theatre':theatreValue})
            });
        let response = await query.text();
        if(response) {
            div.innerHTML = response;
        }
    }
    catch (error) {
        console.log(error);
    };
};

btn.addEventListener('click', async function(event){
    event.preventDefault();
    addUser;
});

async function addUser(){
    try{
        if(login.value != '' && email.value != '' && theatre.value != ''){
            let query = await fetch('addUser.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: new URLSearchParams({login: login.value , email: email.value , theatre: theatre.value})
            });
            let response = await query.text();
            console.log(response);
            div.classList.add('hidden');
            div.classList.remove('normal');
            allInputs.forEach(item =>{
                item.value = '';
            })
        }
    }
    catch (error) {
        console.log(error);
    }
};