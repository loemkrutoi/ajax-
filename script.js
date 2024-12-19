let baton = document.getElementById('btn');
let userLogin = document.getElementById('userLogin');
let userPassword = document.getElementById('userPassword');
let p = document.querySelector('p');

baton.addEventListener('click', async function JSONSubmit(event) {
    event.preventDefault();
    try{
        let loginValue = userLogin.value;
        let response = await fetch('ajaxJson.php',{
            method: 'POST',
            headers: {'Content-Type':'application/json'},
            body: JSON.stringify({'userLogin':loginValue})
        });
        let txt = await response.text();
        if(txt){
            console.log(response);
            console.log(loginValue);
            p.classList.remove('hidden');
        }
    } catch(e){
        console.log(e);
    }
})