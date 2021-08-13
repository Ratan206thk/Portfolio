function opening() {
    document.querySelector('div.hello').style.opacity = 0.8;
    document.querySelector('div.box').style.position = 'fixed';
    document.querySelector('div.hello').style.visibility = "visible";
    document.querySelector('div.hello').style.height =window.innerHeight+'px';
    console.log(window.clientHeight);    
}
let button=document.querySelector('button');
button.classList.add('hide');
function closing(x) {
    document.querySelector('div.hello').style.opacity = 0;
    document.querySelector('div.box').style.position = 'absolute';
    document.querySelector('div.hello').style.visibility = "hidden";
    if(!x)return;
    let div = document.querySelector(".box");
    if (x != 1) {
        for (let i = 0; i + 1 < div.childElementCount; i++) {
            div.children[i + 1].classList.add('hide');
        }
        button.classList.remove('hide');
        div.children[x + 2].classList.toggle('hide');
        div.children[x + 2].classList.toggle('active');
    }
    else {
        for (let i = 0; i + 1 < div.childElementCount; i++) {
            button.classList.add('hide');
            div.children[i + 1].classList.remove('hide');
            div.children[i + 1].classList.remove('active');
        }
    }
}
let arr = document.querySelectorAll('i');
let elmnt = document.querySelector("div.scroll");
arr[0].addEventListener('click', () => {
    elmnt.scrollBy(-(document.querySelector('div.scroll div.col').clientWidth),0);
})
arr[1].addEventListener('click', () => {
    elmnt.scrollBy(document.querySelector('div.scroll div.col').clientWidth,0);
})