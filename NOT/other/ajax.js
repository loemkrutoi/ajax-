'use strict';

async function fetchGetData() {
    try{
        let response = await fetch('index.php?one=1');
        let txt = await response.text();
        console.log(txt);
    } catch(e){
        console.log('error', e);
    }
}
fetchGetData();

async function fetchPostData() {
    try{
        let response = await fetch('index.php',{
            method: 'POST',
            headers: {'Content-Type':'application/x-www-form-urlencoded'},
            body: new URLSearchParams({password: '1234'})
        });
        let txt = await response.text();
        console.log(txt);
    } catch(e){
        console.log('error', e);
    }
}
fetchPostData();

async function fetchJSONData() {
    try{
        let response = await fetch('index.php',{
            method: 'POST',
            headers: {'Content-Type':'application/json'},
            body: JSON.stringify({
                password: '1234'
            })
        });
        let txt = await response.text();
        console.log(txt);
    } catch(e){
        console.log(e);
    }
}
fetchJSONData();