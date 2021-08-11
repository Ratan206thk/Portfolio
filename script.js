function opening() {
    document.querySelector('div.hello').style.opacity = 0.8;
    document.querySelector('div.box').style.position = 'fixed';
    document.querySelector('div.hello').style.visibility = "visible";
}
function closing() {
    document.querySelector('div.hello').style.opacity = 0;
    document.querySelector('div.box').style.position = 'absolute';
    document.querySelector('div.hello').style.visibility = "hidden";
}
let arr=document.querySelectorAll('i');
let ran=0;
let elmnt = document.querySelector("div.scroll");
arr[0].addEventListener('click',()=>{
    
    if(ran>0)
  {  elmnt.scrollLeft = (--ran)*420;
    console.log(elmnt.scrollLeft);}
})
arr[1].addEventListener('click',()=>{
    if(ran+3<elmnt.childElementCount)
    {elmnt.scrollLeft = (++ran)*420;
        console.log(elmnt.scrollLeft);}
    })