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
// let arr=document.querySelectorAll('i')
// arr[0].addEventListener('click',()=>{
//     let elmnt = document.querySelector("div.scroll");
//     elmnt.scrollLeft = -420;
// })
// arr[1].addEventListener('click',()=>{
//     let elmnt = document.querySelector("div.scroll");
//     elmnt.scrollLeft = 420;
// })


// document.queryselector('button').addEventListener('click',()=>{
//     var elmnt = document.getElementById("myDIV");
//     elmnt.scrollLeft = 50;
//   });